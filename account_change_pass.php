<?php


/*
 * Copyright (c) 2018 Barchampas Gerasimos <makindosx@gmail.com>
 * online-banking a online banking system for local businesses.
 *
 * online-banking is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 *
 * online-banking is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */


 session_start();

  
 if(!isset($_SESSION['login']))
    {
     header('Location: index.php');
      }

$idletime=898;//after 60 seconds the user gets logged out

if (time()-$_SESSION['timestamp']>$idletime)
   {
    session_destroy();
    session_unset();
     }

  else
    {
    $_SESSION['timestamp']=time();
     }

 

?>


<html>
<head>


 <meta name="viewport" content="width=device-width, initial-scale=1">
     <title> Easybank </title>
     <link rel="shortcut icon" href="favicon.png" type="image/png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>

.alert 
{
max-width: 550px;
margin: auto; 
}

</style>

</head>


<body>
</htmnl>



<?php

     require_once('__SRC__/connect.php');


     if (class_exists('DATABASE_CONNECT'))
            {
 
             $obj_conn  = new DATABASE_CONNECT;
            
             $host = $obj_conn->connect[0];
             $user = $obj_conn->connect[1];
             $pass = $obj_conn->connect[2];
             $db   = $obj_conn->connect[3];

 
              $conn = new mysqli($host,$user,$pass,$db);
 
                 if ($conn->connect_error)
                      {
                       die ("Cannot connect " .$conn->connect_error);
                        }


             else
               {


                if (isset($_POST['change_password']))                
                  {
              
                  require_once('__SRC__/secure_data.php');
             
                   $obj_secure_data = new SECURE_INPUT_DATA;
              

                  $password         =   $obj_secure_data->SECURE_DATA_ENTER($_POST['password']);
                  $password_retype  =   $obj_secure_data->SECURE_DATA_ENTER($_POST['password_retype']);

                  $password         =   $conn->real_escape_string($password);
                  $password_retype  =   $conn->real_escape_string($password_retype);


                     if ($password == $password_retype)
                        {
                         $sql  = "update customers set password = md5('$password')
                                  where  email = '".$_SESSION['login']."'";
                         $result = $conn->query($sql);
                 
                          if ($result == true)
                             {

                             echo "<br>" ."<br>";

                             echo"
                         <div class='alert alert-danger' role='alert'>
                             <a href='account.php' target='_parent'> 
                              <strong> I want to stay connected </strong>
                            </a>
                       </div>";
               
                          echo "<br>";


                        echo"
                         <div class='alert alert-danger' role='alert'>
                            <a href='logout.php' target='_parent'> 
                              <strong> I want to disconect </strong> 
                            </a>
                       </div>";


                              } // end of result

                         } // end of if passwrods match



                     else if ($password != $password_retype)
                              { 
                   
                           echo "<br>" ."<br>";

                        echo"
                         <div class='alert alert-danger' role='alert'>
                          <button type='button' id='close1' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                         </button>
                          <strong> Password and Password retype do not match! </strong> 
                       </div>";

                          echo '<script type="text/javascript">
                                 $(document).ready(function() {
                                   $("#close1").on("click", function () {
                                  window.open("account.php", "_parent");
                                    });
                                      });
                                </script>';


                                } // end of else if password do not match

                       } // end of isset submit


                } // end of else connect

        
         } // end of class connect exist



?>

