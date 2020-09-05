
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title></title>

    <link rel="stylesheet" href="login/css/editstyle.css" media="screen" type="text/css" />

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
       <div align="center"><p style="font-size: 24px;font-weight: bolder;">Profile<p></div>

      <br>
        <form action="validate.php" method="POST">


          <fieldset class="clearfix">
           
<script type="text/javascript">function hello(){ document.getElementById("firstname").removeAttribute("disabled");
document.getElementById("firstname").removeAttribute("readonly");
}

function helllo()
{
  alert("helllo");
  document.getElementById("firstname").setAttribute("disabled");
document.getElementById("firstname").setAttribute("readonly");
  } </script>
            <table><tr><td>First Name</td><td><input type="text" id="firstname" name="firstname" value="" placeholder="First Name"  pattern=".{3,}" required title="3 characters minimum" onchange="helllo()" readonly disabled></td><td><img src="edit-button.svg" height="7%" width="7%" onclick="hello()"></td></tr></table>
             <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span>Last Name</span><input type="text" name="lastname" value="" placeholder="Last Name"  pattern=".{3,}" required title="3 characters minimum" readonly disabled>&nbsp<div><img src="edit-button.svg" height="7%" width="7%" onclick="hello()"><input type="button" value="Save" name=""></div></p>
            
            <p><span>Email-Id</span><input type="email" name="email" value="" placeholder="Email-Id" pattern=".{8,}" required title="8 characters minimum" readonly disabled>&nbsp<img src="edit-button.svg" height="7%" width="7%" onclick="hello()"></p>
            
            <p><span>Password</span><input type="password" name="password"  value="" placeholder="Password" pattern=".{6,}" required title="8 characters minimum" readonly disabled>&nbsp<img src="edit-button.svg" height="7%" width="7%" onclick="hello()"></p>

          </fieldset>

        </form>

      </div> <!-- end login -->

    </div>

  </body>
</html>

</body>

</html>