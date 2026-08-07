@echo off
rem prepare.cmd - Vorbereitung fuer "04_dom_werte_lesen_aufgabe"
rem
rem Uebernimmt automatisch die bereits geloesten Dateien der Vorgaenger-Aufgabe
rem "..\..\chapter05\01_einbinden_aufgabe" in diese Aufgabe. Dateien, die in dieser Aufgabe bereits
rem neue TODO-Markierungen ("TODO <Nr>:") enthalten, werden dabei NICHT
rem ueberschrieben, damit die neue Aufgabenstellung erhalten bleibt. Dateien,
rem die es in der Vorgaenger-Aufgabe nicht gibt (z.B. wegen Umbenennung wie
rem index.html -> index.php), werden nicht neu angelegt.
setlocal enabledelayedexpansion

set "SCRIPT_DIR=%~dp0"
if "%SCRIPT_DIR:~-1%"=="\" set "SCRIPT_DIR=%SCRIPT_DIR:~0,-1%"

for %%I in ("%SCRIPT_DIR%\..\..\chapter05\01_einbinden_aufgabe") do set "PREV_DIR=%%~fI"

if not exist "%PREV_DIR%" (
    echo FEHLER: Vorgaenger-Aufgabe nicht gefunden unter:
    echo   %PREV_DIR%
    echo Bitte zuerst die Vorgaenger-Aufgabe vollstaendig bearbeiten.
    exit /b 1
)

echo Uebernehme geloeste Dateien aus: %PREV_DIR%
echo Ziel: %SCRIPT_DIR%
echo.

set /a kopiert=0
set /a uebersprungen=0

for /r "%SCRIPT_DIR%" %%F in (*) do (
    set "destfile=%%F"
    set "rel=%%F"
    set "rel=!rel:%SCRIPT_DIR%\=!"

    set "skip=0"
    if /I "!rel!"=="prepare.sh" set "skip=1"
    if /I "!rel!"=="prepare.cmd" set "skip=1"
    if /I "!rel!"=="_todos.md" set "skip=1"
    echo !rel!|findstr /I /E ".todos.md" >nul && set "skip=1"

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
