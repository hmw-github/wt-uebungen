@echo off
rem prepare_base.cmd - gemeinsame Kopierlogik fuer alle prepare.cmd-Wrapper
rem der Aufgabenordner. Wird NICHT direkt aufgerufen, sondern von den
rem einzelnen prepare.cmd-Dateien mit den passenden Pfaden parametrisiert.
rem
rem Verwendung: prepare_base.cmd <ziel-verzeichnis> [<vorgaenger-verzeichnis>]
rem
rem Uebernimmt automatisch die bereits geloesten Dateien aus dem Vorgaenger-
rem Verzeichnis in das Ziel-Verzeichnis. Dateien, die im Ziel bereits neue
rem TODO-Markierungen ("TODO <Nr>:") enthalten, werden dabei NICHT
rem ueberschrieben, damit die neue Aufgabenstellung erhalten bleibt. Dateien,
rem die es im Vorgaenger nicht gibt (z.B. wegen Umbenennung wie index.html ->
rem index.php), werden nicht neu angelegt. Enthaelt die Vorgaenger-Datei
rem selbst noch offene TODOs, wird sie ebenfalls NICHT kopiert (Schutz gegen
rem zu fruehes Ausfuehren). Wird kein Vorgaenger-Verzeichnis uebergeben, ist
rem die Aufgabe eigenstaendig - es wird nur ein Hinweis ausgegeben.
setlocal enabledelayedexpansion

if "%~1"=="" (
    echo FEHLER: Kein Ziel-Verzeichnis uebergeben.
    echo Verwendung: %~nx0 ^<ziel-verzeichnis^> [^<vorgaenger-verzeichnis^>]
    exit /b 1
)
for %%I in ("%~1") do set "DEST_DIR=%%~fI"

if "%~2"=="" (
    echo Diese Aufgabe ist eigenstaendig ^(kein Teil des Webportfolio-Projekts^).
    echo Keine Vorbereitung noetig - direkt in der Vorgabedatei loslegen.
    exit /b 0
)

if not exist "%~2" (
    echo FEHLER: Vorgaenger-Aufgabe nicht gefunden unter:
    echo   %~2
    echo Bitte zuerst die Vorgaenger-Aufgabe vollstaendig bearbeiten.
    exit /b 1
)
for %%I in ("%~2") do set "PREV_DIR=%%~fI"

echo Uebernehme geloeste Dateien aus: %PREV_DIR%
echo Ziel: %DEST_DIR%
echo.

set /a kopiert=0
set /a uebersprungen=0

for /r "%DEST_DIR%" %%F in (*) do (
    set "destfile=%%F"
    set "rel=%%F"
    set "rel=!rel:%DEST_DIR%\=!"

    set "skip=0"
    if /I "!rel!"=="prepare.sh" set "skip=1"
    if /I "!rel!"=="prepare.cmd" set "skip=1"
    if /I "!rel!"=="_todos.md" set "skip=1"
    echo !rel!|findstr /I /E ".todos.md" >nul && set "skip=1"
    echo !rel!|findstr /I /E ".prepare.sh" >nul && set "skip=1"
    echo !rel!|findstr /I /E ".prepare.cmd" >nul && set "skip=1"

    if "!skip!"=="0" (
        set "hastodo=0"
        findstr /R /C:"TODO [0-9]*:" "!destfile!" >nul 2>&1 && set "hastodo=1"

        if "!hastodo!"=="1" (
            echo   [neu]      !rel! ^(enthaelt neue TODOs - Vorgabedatei bleibt erhalten^)
            set /a uebersprungen+=1
        ) else (
            set "prevfile=%PREV_DIR%\!rel!"
            set "prevtodo=0"
            if exist "!prevfile!" findstr /R /C:"TODO [0-9]*:" "!prevfile!" >nul 2>&1 && set "prevtodo=1"

            if "!prevtodo!"=="1" (
                echo   [WARNUNG]  !rel!: Vorgaenger-Datei ist noch nicht fertig bearbeitet ^(enthaelt noch TODOs^) - wird NICHT kopiert
                set /a uebersprungen+=1
            ) else if exist "!prevfile!" (
                copy /Y "!prevfile!" "!destfile!" >nul
                echo   [kopiert]  !rel!
                set /a kopiert+=1
            )
        )
    )
)

echo.
echo Fertig: %kopiert% Datei^(en^) aus der eigenen Loesung uebernommen, %uebersprungen% Datei^(en^) unveraendert gelassen ^(neue TODOs bzw. Vorgaenger-Datei noch nicht fertig^).
echo Weiter geht's mit README.md und _todos.md dieser Aufgabe.

endlocal
