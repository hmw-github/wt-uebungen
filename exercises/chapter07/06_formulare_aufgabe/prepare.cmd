@echo off
rem prepare.cmd - Vorbereitung fuer "06_formulare_aufgabe"
rem Duenner Wrapper, der die gemeinsame Kopierlogik in scripts\prepare_base.cmd aufruft.
set "SCRIPT_DIR=%~dp0"
if "%SCRIPT_DIR:~-1%"=="\" set "SCRIPT_DIR=%SCRIPT_DIR:~0,-1%"
call "%SCRIPT_DIR%\..\..\scripts\prepare_base.cmd" "%SCRIPT_DIR%" "%SCRIPT_DIR%\..\..\chapter07\05_tabs_aufgabe"
