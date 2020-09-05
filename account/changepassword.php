<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Change Password</title>

  <link rel="stylesheet" href="../login/css/style1.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
<body>

  <div class="container">

    <div id="login">

      <form action="verifypassword.php" method="POST">

        <fieldset class="clearfix">
          <p>

            <?php 
            session_start();

            if(!empty($_SESSION["message"])) {
              //session_destroy() ;
              echo $_SESSION["message"];
             // die;
              unset($_SESSION["message"]);
            }
            
            if(isset($_SESSION) && !empty($_SESSION["email"]))
            { 

              
            }

            ?>
          </p>
          <p><span class="fontawesome-lock"></span><input type="password" name="oldpassword"  value="" placeholder="Old Password" required></p>
          <p><span class="fontawesome-lock"></span><input type="password" name="newpassword"  value="" placeholder="New Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
          <p><span class="fontawesome-lock"></span><input type="password" name="confirmpassword"  value="" placeholder="Confirm Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
          <p><input type="submit" value="Confirm"></p>
          <p><a href="<?php echo "../editprofile.php";?>"><input type="button" value="Cancel"></p>
         </fieldset>

      </form>

    </div> <!-- end login -->

  </div>

</body>
</html>


