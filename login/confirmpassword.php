<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Confirm Password</title>

  <link rel="stylesheet" href="css/style1.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
<body>

  <div class="container">

    <div id="login">

      <form action="passwordconfirmed.php" method="POST">

        <fieldset class="clearfix">
          <p>

            <?php 
            session_start();

            if(!isset($_SESSION["tocken"]) && empty($_SESSION["tocken"])){
              $_SESSION["tocken"]=$_GET['remember_tocken']; 

            }
            
            if(isset($_SESSION) && !empty($_SESSION["message"]))
            { 

              echo "<fieldset><legend></legend>".$_SESSION["message"]."</legend></fieldset>"; 
              echo "<br>";
              session_destroy();
            }

            ?>
          </p>
          <p><span class="fontawesome-lock"></span><input type="password" name="password"  value="" placeholder="New Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
          <p><span class="fontawesome-lock"></span><input type="password" name="confirmpassword"  value="" placeholder="Confirm Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
          <p><input type="submit" value="Confirm"></p>

        </fieldset>

      </form>

    </div> <!-- end login -->

  </div>

</body>
</html>


