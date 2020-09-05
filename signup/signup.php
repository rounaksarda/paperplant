
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title></title>

    <link rel="stylesheet" href="../login/css/style1.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Signup</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

  

  </head>

  <body>


    <div class="container">

      <div id="login">

       <div align="center"><p style="font-size: 24px;font-weight: bolder;">Signup<p></div>
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
            //print_r($_SESSION);

            if(isset($_SESSION) && !empty($_SESSION["error"])){
              //session_start();
              //echo "hello";
              $i=0;
              $error=array();
              $error=$_SESSION["error"]; 
              //print_r($_SESSION);
              //echo $error[i]; 
              $count=sizeof($error);
              echo "<fieldset></legend>";
              while($i<$count)
              {
              global $i;
              $er=$error[$i];
              echo "*".$er."<br>";
              global $i;
              $i++;
              }
              echo "</fieldset>";
              echo "<br>";
              session_destroy();
               
          ?>

          <?php }
          else {
            //echo "else";
            } ?>
              </p>
            <p><span class="fontawesome-user"></span><input type="text" name="firstname" value="" placeholder="First Name"  pattern=".{3,}" required title="3 characters minimum"></p>
             <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-user"></span><input type="text" name="lastname" value="" placeholder="Last Name"  pattern=".{3,}" required title="3 characters minimum"></p>
            
            <p><span class="fontawesome-envelope"></span><input type="email" name="email" value="" placeholder="Email-Id" pattern=".{8,}" required title="8 characters minimum"></p>
            
            <p><span class="fontawesome-lock"></span><input type="password" name="password"  value="" placeholder="Password" onBlur="if(this.value == '') this.value = ''" onFocus="if(this.value == '') this.value = ''" pattern=".{6,}" required title="8 characters minimum"></p>
             <!-- JS because of IE support; better: placeholder="Password" -->
             <p><span class="fontawesome-lock"></span><input type="password" name="confirmpassword"  value="" placeholder="Confirm Password" onBlur="if(this.value == '') this.value = ''" onFocus="if(this.value == '') this.value = ''" pattern=".{6,}" required title="8 characters minimum"></p>
            <p><input type="submit" value="Sign In" ></p>

          </fieldset>

        </form>
      <!--   <p>forgotten Password? <a href="forgottenpassword.php">Get Password</a><span class="fontawesome-arrow-right"></span></p> -->
        <p>I am a member? <a href="../login/index.php">Login me</a><span class="fontawesome-arrow-right"></span></p>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>