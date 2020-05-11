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

?>



<html>

<head>
   
    <title> Easybank </title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="shortcut icon" href="favicon.png" type="image/png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->


<style>
body {
background-image: url("images/bg1.jpg");
background-repeat: no-repeat;
background-size: 100% 100%;
background-color: ;
}


 /* For id document */

.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}


</style>




<script type = 'text/javascript' >
function changeHashOnLoad() 
{
     window.location.href += '#';
     setTimeout('changeHashAgain()', '50'); 
}
 
function changeHashAgain()
 {
  window.location.href += '1';
}
 
var storedHash = window.location.hash;
window.setInterval(function () 
{
    if (window.location.hash != storedHash) {
         window.location.hash = storedHash;
    }
}, 50);
window.onload=changeHashOnLoad;
</script> 




</head>


<body onload="doLogout(); return false;">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <img src="images/logo4.png" height="130" width="27%">
                    <img src="images/bg5.png" height="130" width="33%">
                    <img src="images/logo5.png" height="130" width="27%">
                </div>
                <div class="login-form"  style="width: 650px; position: relative; left: -10%; 
                                                background-color:white; 
                                                border-style:solid; border-width:0.5em; 
                                                border-radius: 2em;">

                    <form action="" method="post">

                        <h3 align="center"> 
                         <font color="black"> <b> <i> 
                            &dollar; &dollar; EASYBANK ACCOUNT &euro; &euro; 
                         </i> </b> </font>
                       </h3> <hr>


                       <h3 align="center"> <font color="black"> <b> Step 1: Login Details </b> </font> </h3>
                   


                        <div class="form-group">
                            <label>Email address</label>
                            <span class="glyphicon glyphicon-envelope"></span>
                       <input type="email" class="form-control" name="email" style="font-size:17px; font-weight:bold;"       
                              placeholder="Email" required>
                        </div>


                       <div class="form-group">
                            <label>Password</label>
                             <span class="glyphicon glyphicon-lock"></span>
                     <input type="password" class="form-control" name="password" style="font-size:17px; font-weight:bold;" 
                            placeholder="Password" required>
                        </div>


                     <div class="form-group">
                            <label>Mobile number</label>
                             <span class="glyphicon glyphicon-phone"></span> <br>
                      <input type="text" class="form-control col-sm-1" name="symbol_area_code" style="font-size:15px; font-weight:bold;" value="+" disabled>
           <input type="tel" class="form-control col-sm-2" name="area_code" style="font-size:13px; font-weight:bold;" placeholder="Area Code" pattern="[0-9]{2,3}" required>
                            <input type="phone" class="form-control col-sm-9" name="mobile" style="font-size:17px; font-weight:bold;" placeholder="Number" required>
                        </div>

                           <br><br>      

                        <div class="wrapper">
                         <span class="group-btn">     
                       <button type="submit" name="submit_step1" class="btn btn-primary btn-flat m-b-30 m-t-30"> 
                          Next step <i class="glyphicon glyphicon-menu-right"></i>
                      </button>
                        </span>
                         </div>

                            <br><br>                          

                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="index.php"> Sign in </a></p>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>



     <!--

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
 
     -->


</body>
</html>





<?php

//error_reporting(E_ALL | E_WARNING | E_NOTICE);
//ini_set('display_errors', TRUE);

  if (isset($_POST['submit_step1']))
    {

      require_once('__SRC__/secure_data.php');

        if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
            {
 
             $obj_secure_data = new SECURE_INPUT_DATA;


             // get personal details from user

              $email             =  $obj_secure_data->SECURE_DATA_ENTER($_POST['email']);
              $password          =  $obj_secure_data->SECURE_DATA_ENTER($_POST['password']);                 
              $area_code         =  $obj_secure_data->SECURE_DATA_ENTER($_POST['area_code']);
              $mobile_number     =  $obj_secure_data->SECURE_DATA_ENTER($_POST['mobile']);
            

          // insert values to sessions 
       
          $_SESSION['email'] = $email;  
          $_SESSION['password'] = md5($password);
          $_SESSION['symbol_area_code'] = $symbol_area_code;
          $_SESSION['area_code'] = "+" .$area_code;
          $_SESSION['mobile_number'] = $mobile_number;

          $_SESSION['step1']=true;


          $yourURL="page-register2.php";
          echo ("<script>location.href='$yourURL'</script>");


             }  // end of SECURE_INPUT_DATA_AVAILABLE class exists


         }  // end of submit_step1




?>
