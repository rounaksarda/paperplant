

<!DOCTYPE html>
  <html lang="en-US">
  <head>

    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Change Email-id</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="../login/css/style1.css" media="screen" type="text/css" />
  
<script type="text/javascript">
  function checkEmail()

</script>

  </head>

  <body>

    <div class="container">

      <div id="login">

        <form action="verifyemailid.php" method="POST">

          <fieldset class="clearfix">
            <p>

            <?php 
            session_start();
        
            if(isset($_SESSION) && !empty($_SESSION["message"]))
              {  
              echo $_SESSION["message"]; 
              unset($_SESSION["message"]);
              }

              ?>
                

              </p>
            <p><span class="fontawesome-user"></span><input type="email" name="email" value="" placeholder="Enter New Email-Id" pattern=".{8,}" required title="8 characters minimum"></p> 


            
            <p><input type="submit" value="Submit"></p>

          </fieldset>

        </form>
      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>