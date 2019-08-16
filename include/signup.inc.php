<?php
if (isset($_POST['signup-submit'])) {


require 'dbh.inc.php';
$username=$_POST['uid'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$pwdrepeat=$_POST['pwdrepeat'];
if(empty($username) ||empty($pwdrepeat) ||empty($pwd) ||empty($email)){
 header("Location: ../sign.php?error=emptyfield&uid=".$username."&mail".$email.);
 exit();

}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
header("Location: ../signup.php?error=invalidmailuid")
exit()
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&uid=".$username);
    exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
    header("Location: ../signup.php?error=invaliduid&mail=".$email);
    exit();
}
else if($pwd !== $pwdrepeat){
    header("Location: ../signup.php?error=passwordcheckuid=".$username."&mail=".$email);
    exit();
}
else{

    $sql="SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: ../sighup.php?error=sqlerror");
    exit();
    }
    else{
// s:string i:integer b:boolean d=double 若要兩個變數ex: "ss" ,$username,$pwd
mysqli_stmt_bind_param($stmt,"s",$username);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

$resultCheck=mysqli_stmt_num_rows();

if($resultCheck > 0 ){
    header("Location: ../signup.php?error=usertaken&mail=".$email);
    exit();
}
else{

    $sql="INSERT INTO users (uidUsers,emailUsers,pwdUsers) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: ../sighup.php?error=sqlerror");
    exit();
    }
    else{
        $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"sss",$username,$email,$pwd);
        mysqli_stmt_execute($stmt);
       header("Location: ../signup.php?signup=success");
       exit();
    }
}
    }
}

mysqli_stmt_close($stmt);
mysqli_close($connect);

}

else{
    
}