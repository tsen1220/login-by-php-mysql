<?php

define('db_server', 'localhost');
define('db_user', 'root');
define('db_password', '');
define('db_name', 'demo');

$link= mysqli_connect(db_server,db_user,db_password,db_name);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}