<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_localhost = "127.0.0.1"; //Host de base de datos//
$database_localhost = "auth1"; //Base de datos//
$username_localhost = "root"; //Usuario de la base de datos (por defecto en la mayoria es ROOT//
$password_localhost = ""; //Contraseña de base de datos//
$localhost = mysql_pconnect($hostname_localhost, $username_localhost, $password_localhost) or trigger_error(mysql_error(),E_USER_ERROR); 
?>