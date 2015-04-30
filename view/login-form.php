
<?php
    require_once(__DIR__ . "/../model/config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" type="text/css" href="css/login-form.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>



<h1>Login</h1>
<button type="button">
        <a href="<?php echo $path . "register.php"?>">register</a>
    </button>
    
<form method="POST" action="<?php echo $path . "controller/login-user.php"; ?>">
<form>
    
  <div class="group">      
    <input type="text">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>E-mail</label>
  </div>
    
  <div class="group">      
    <input type="text">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Username</label>
  </div>

  <div class="group">      
    <input type="password">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Password</label>
  </div>
    

    
    <div>
        <input type="hidden" name="login" value="login" />
        <button type="submit" class="submit">Submit</button>
    </div>

</form>
</body>
</html>