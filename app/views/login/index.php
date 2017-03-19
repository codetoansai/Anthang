<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="stylesheet" href="public/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <form class="form-signin" method="post" action="<?php echo BASE_URL; ?>Login/postLogin">
        
        <h2 class="form-signin-heading">Đăng Nhập</h2>
        <label for="name" class="sr-only">Username</label>
        <input type="text" id="name" class="form-control" placeholder="username" name="txtname" required autofocus>
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="txtpass" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="ok">Sign in</button>
      </form>

    </div> <!-- /container -->
</body>
</html>