<?php
//如果是online或區域 名字為其名字
$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="loginsystemtut";

$connect=mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);


if(!$connect){
    die("Connection failed: ".mysqli_connect_error())
};