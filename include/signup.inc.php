<?php
if (isset($_POST['signup-submit'])) {


require 'dbh.inc.php';
$username=$_POST['uid'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$pwdrepeat=$_POST['pwdrepeat'];
if(empty($username) ||empty($pwdrepeat) ||empty($pwd) ||empty($email)  ){

}

}
