@echo off
set "PATH=d:\Ai Agents\Clinic Management system\php74;%PATH%"
cd /d "%~dp0"
echo Starting Hospital Management System on http://127.0.0.1:8000 ...
php artisan serve --port=8000
pause
