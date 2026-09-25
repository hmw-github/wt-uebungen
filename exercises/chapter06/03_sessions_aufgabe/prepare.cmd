@echo off
rem prepare.cmd - Vorbereitung fuer "03_sessions_aufgabe"
rem Duenner Wrapper, der die gemeinsame Kopierlogik in scripts\prepare_base.cmd aufruft.
set "SCRIPT_DIR=%~dp0"
if "%SCRIPT_DIR:~-1%"=="\" set "SCRIPT_DIR=%SCRIPT_DIR:~0,-1%"
call "%SCRIPT_DIR%\..\..\scripts\prepare_base.cmd" "%SCRIPT_DIR%" "%SCRIPT_DIR%\..\..\chapter06\02_formular_post_aufgabe"
