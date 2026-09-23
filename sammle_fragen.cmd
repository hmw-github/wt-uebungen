@echo off
rem sammle_fragen.cmd - Sammelt die Einstiegsfragen aller Uebungen in fragen.md
rem
rem Quellen (je Uebung eine Datei, sortiert nach Kapitel und Uebungsnummer):
rem   exercises\chapterNN\<uebung>\_fragen.md      (Uebung als Ordner)
rem   exercises\chapterNN\<uebung>.fragen.md       (Uebung als Einzeldatei)
rem Die Kapitelueberschrift wird aus der ersten Zeile der Kapitel-README
rem abgeleitet ("# Uebungsaufgaben zu Kapitel 3: HTML" -> "# Kapitel 3 - HTML").
rem Diese Datei muss UTF-8-kodiert bleiben (Umlaute/Gedankenstrich unten).
setlocal EnableDelayedExpansion
chcp 65001 >nul

set "SCRIPT_DIR=%~dp0"
if "%SCRIPT_DIR:~-1%"=="\" set "SCRIPT_DIR=%SCRIPT_DIR:~0,-1%"
set "EXERCISES=%SCRIPT_DIR%\exercises"
set "ZIEL=%SCRIPT_DIR%\fragen.md"

call :einleitung > "%ZIEL%"
for /f "delims=" %%K in ('dir /b /ad /on "%EXERCISES%\chapter*"') do (
    call :kapitel "%%K" >> "%ZIEL%"
)

echo Fragen gesammelt in: %ZIEL%
endlocal
exit /b 0


:einleitung
echo # Einstiegsfragen zu den Übungen
echo(
echo Zu Beginn jeder Übung werden diese Fragen gemeinsam beantwortet. Sie
echo fragen das Grundwissen ab, das für die konkreten TODOs der jeweiligen
echo Übung gebraucht wird. Zu jeder Frage gibt es eine kurze erwartete
echo Antwort (zum Aufklappen), damit die Fragen auch ohne Antworten gezeigt
echo werden können.
exit /b 0


rem Gibt Kapitelueberschrift und alle Fragen-Dateien eines Kapitels aus.
rem %1 = Name des Kapitelordners (z.B. chapter03)
:kapitel
set "KAPITEL=%~1"
set "KDIR=%EXERCISES%\%KAPITEL%"

rem Kapitel ohne Fragen-Dateien ueberspringen
set "GEFUNDEN=0"
for /f "delims=" %%E in ('dir /b /on "%KDIR%\??_*" 2^>nul') do (
    call :fragendatei "%KDIR%" "%%E"
    if defined DATEI set "GEFUNDEN=1"
)
if "%GEFUNDEN%"=="0" exit /b 0

set "NR=%KAPITEL:~7%"
if "%NR:~0,1%"=="0" set "NR=%NR:~1%"
set "ERSTE="
set /p ERSTE=<"%KDIR%\README.md"
set "TITEL="
for /f "tokens=1,* delims=:" %%A in ("!ERSTE!") do set "TITEL=%%B"
if "!TITEL:~0,1!"==" " set "TITEL=!TITEL:~1!"

echo(
echo ---
echo(
echo # Kapitel %NR% – !TITEL!
for /f "delims=" %%E in ('dir /b /on "%KDIR%\??_*" 2^>nul') do (
    call :fragendatei "%KDIR%" "%%E"
    if defined DATEI (
        echo(
        type "!DATEI!"
    )
)
exit /b 0


rem Setzt DATEI auf die Fragen-Datei zum Eintrag %2 im Kapitelordner %1
rem (oder leert DATEI, falls der Eintrag keine Fragen-Datei ist).
:fragendatei
set "DATEI="
set "EINTRAG=%~2"
if exist "%~1\%~2\_fragen.md" (
    set "DATEI=%~1\%~2\_fragen.md"
) else if /i "!EINTRAG:~-10!"==".fragen.md" (
    set "DATEI=%~1\%~2"
)
exit /b 0
