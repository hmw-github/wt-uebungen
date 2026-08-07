@echo off
rem prepare.cmd - Vorbereitung fuer "01_einbinden_aufgabe"
rem Duenner Wrapper, der die gemeinsame Kopierlogik in scripts\prepare_base.cmd aufruft.
set "SCRIPT_DIR=%~dp0"
if "%SCRIPT_DIR:~-1%"=="\" set "SCRIPT_DIR=%SCRIPT_DIR:~0,-1%"
call "%SCRIPT_DIR%\..\..\scripts\prepare_base.cmd" "%SCRIPT_DIR%" "%SCRIPT_DIR%\..\..\chapter04\07_responsive_design_aufgabe"
