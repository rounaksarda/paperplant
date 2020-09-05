<?php
            //session_start();
            if(isset($_SESSION) && !empty($_SESSION["email"]))
              {  
              echo "HELLO , ".strtoupper($_SESSION["firstname"]." ".$_SESSION["lastname"]) ;
              $_SESSION['em']=$_SESSION['email'] ;
              }
              else 
              {
                echo "PAPER PLANT";
              }
        ?>