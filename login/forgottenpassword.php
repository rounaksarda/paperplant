<!DOCTYPE html>
  <html lang="en-US">
  <head>

    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Password Recovery</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
  
<script type="text/javascript">
  function checkEmail()

</script>

  </head>

  <body>

    <div class="container">

      <div id="login">

        <form action="forgottenpasswordverify.php" method="POST">

          <fieldset class="clearfix">
            <p>

            <?php 
            session_start();
        
            if(isset($_SESSION) && !empty($_SESSION["message"]))
              {  
              echo $_SESSION["message"]; 
              session_destroy();
              }

            /*  if(isset($_SESSION) && !empty($_SESSION["verified"]))
              {  
              echo $_SESSION["verified"]; 
              session_destroy();
              }
              */
              ?>
                

              </p>
            <p><span class="fontawesome-user"></span><input type="text" name="email" value="" placeholder="Email-Id" onBlur="if(this.value == '') this.value = 'Email-Id'" onFocus="if(this.value == 'Email-Id') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
           <!-- <p><span class="fontawesome-lock"></span><input type="password" name="password"  value="" placeholder="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" value="Sign In"></p>

          </fieldset>

        </form>
      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>