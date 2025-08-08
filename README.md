# source-code for PostgreSQL
source-code login system, modified for pgsql

Tested working on ie6 and higher, modern chrome and firefox

# Prerequisites
PHP install (tested working on 8.2.29 and 8.4)

PostgreSQL install (tested working on PGSQL15 and 17)

# How to use
Replace the "dummy" text in config.php with your pgSQL user and do the same thing for pass and dbname

The script expects a "users" table with username, password and email columns of a string type, owned by the user provided

This script actually has the following things fixed:
1. The password gets encrypted before getting saved
2. The textboxes should be SQL injection proof
3. I fixed the style of the pages, I personally didnt like it.

If you want to edit the pages you only need to keep the forms and the PHP code

# Other info
While there exists a otp.php file, it wasn't bound to anything (even in original repo!) and it seemed to be for a OneTimePass, but there is no code (even in original repo!) to handle that