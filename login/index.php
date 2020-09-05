
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <title></title>

    <link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Login</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

  
<script type="text/javascript">
  function checkEmail()

</script>

  </head>

  <body>


    <div class="container">

      <div id="login">

       <div align="center"><p style="font-size: 24px;font-weight: bolder;">Login<p></div>
<!-- new added for avtar -->
<!-- 
        <div class="avatar">
        <img src="accout/imagedown.svg" alt="Avatar">
        </div> -->

      <!-- new added ended -->

      <br>
        <form action="validate.php" method="POST">


          <fieldset class="clearfix">
            <p style="color: red;">

            <?php 
            session_start();
        
            if(isset($_SESSION) && !empty($_SESSION["message"]))
              {  
              echo $_SESSION["message"]; 
              echo "<br>";
              session_destroy();
              }

              if(isset($_SESSION) && !empty($_SESSION["verified"]))
              {  
              echo $_SESSION["verified"]; 
              session_destroy();
              }

              if(isset($_SESSION) && !empty($_SESSION["status"]) && isset($_SESSION['verified']))
              {  
                //echo $_SESSION["status"];
                //die;
              echo $_SESSION["verified"]; 
              session_destroy();
              }
              
              ?>
                

              </p>
            <p><span class="fontawesome-user"></span><input type="text" name="email" value="" placeholder="Email-Id" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required"></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="password"  value="" placeholder="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" class="btn btn-gradient" value="Sign In" ></p>

          </fieldset>

        </form>
        <p>forgotten Password? <a href="forgottenpassword.php">Get Password</a><span class="fontawesome-arrow-right"></span></p>
        <p>Not a member? <a href="../signup/signup.php">Sign up now</a><span class="fontawesome-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>