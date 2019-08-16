<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="./bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">


    <form class="form-signin backgroundpaper" action="./include/signup.inc.php">
  <h1 class="h3 mb-3 font-weight-normal">國軍人才招募中心註冊</h1>
  <input type="text" class="form-control" placeholder="Username" name='uid' required autofocus>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name='email' required autofocus>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name='pwd' required>
  <input type="password" id="inputPassword" class="form-control" placeholder="Passwordrepeat" name='pwdrepeat' required>
  <div class="checkbox mb-3">
 
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name='signup-submit'>確定</button> 

  <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>

</form>



</body>
</html>