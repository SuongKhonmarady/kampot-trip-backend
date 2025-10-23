@echo off
echo Starting MySQL and Creating Database...
echo.

REM Start MySQL service (adjust path if needed)
net start MySQL80

REM Wait a moment
timeout /t 3

REM Create database
mysql -u root -e "CREATE DATABASE IF NOT EXISTS kampot_trip CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"

echo.
echo Database created successfully!
echo.
pause
