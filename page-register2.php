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

  
 if(!isset($_SESSION['step1']))
    {
     header('Location: page-register.php');
      }


?>





<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Easybank </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
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
    background-image: url("/images/bg1.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
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
                <div class="login-form"  style="width: 750px; position: relative; left: -20%;
                                                background-color:white; 
                                                border-style:solid; border-width:0.5em; 
                                                border-radius: 2em;">
                    <form action="" method="post">
                       
                      <h3 align="center"> 
                         <font color="black"> <b> <i> 
                            &dollar; &dollar; EASYBANK ACCOUNT &euro; &euro; 
                         </i> </b> </font>
                       </h3> <hr>
                      
                      <h3 align="center"> <font color="black"> <b> Step 2: Personal details </b> </font> </h3>

                      <div class="form-group">
                            <label>First & Last Name</label>
                            <span class="glyphicon glyphicon-user"></span> <br>
   <input type="text" class="form-control col-sm-6" name="first_name" style="font-size:17px; font-weight:bold;" placeholder="First Name" pattern="[A-Za-z]{1,32}" title="Only characters" required>
   <input type="text" class="form-control col-sm-6"  name="last_name" style="font-size:17px; font-weight:bold;" placeholder="Last Name" pattern="[A-Za-z]{1,32}" title="Only characters" required>
                            <br><br>
                        </div>

                      
                         <div class="form-group">
                           <label>Date of birth</label>
                          <span class="glyphicon glyphicon-calendar"></span> <br>
                    <input type="text" class="form-control col-sm-3" name="day" style="font-size:17px; font-weight:bold;" placeholder="DD" pattern="[0-9]{1,2}" title="Only numbers" required>
                    <input type="text" class="form-control col-sm-4" name="month" style="font-size:17px; font-weight:bold;" placeholder="MM" pattern="[0-9]{1,2}" title="Only numbers" required>
                    <input type="text" class="form-control col-sm-5" name="year" style="font-size:17px; font-weight:bold;" placeholder="YYYY" pattern="[0-9]{4}" title="Only numbers" required>
                         <br><br>
                        </div>


                         <div class="form-group">
                           <label>Nationality</label>
                          <span class="glyphicon glyphicon-globe"></span> <br>
              <input type="text" class="form-control" name="nationality" style="font-size:17px; font-weight:bold;" placeholder="Nationality" pattern="[A-Z]{1,16}" title="Only uppercase" required>
                        </div>

                     
                         <div class="form-group">
                           <label>ID document number</label>
                          <span class="glyphicon glyphicon-picture"></span> <br>
     <input type="text" class="form-control" name="identity_number" style="font-size:17px; font-weight:bold;" placeholder="Identity Number" pattern="[A-Z0-9]{1,16}" title="Uppercase and Numbers" required>
                            <br>
                        </div>


                          <div class="form-group">
                           <label> <u> Residential address </u> </label> 
                           <span class="glyphicon glyphicon-book"></span> <br>
                           <label>Country /  </label>
                           <label>Town/City /</label>
                            <label>Street / </label>
                            <label>Number/ </label>
                             <label>Post code </label> <br>
   <input type="text" class="form-control col-sm-2" name="country_code" style="font-size:14px; font-weight:bold;" placeholder="Country Code" pattern="[A-Z]{2,3}" title="Only uppercase" required>
   <input type="text" class="form-control col-sm-3" name="city" style="font-size:14px; font-weight:bold;" placeholder="Town/City" pattern="[A-Za-z]{1,32}" title="Characters and Numbers" required>
   <input type="text" class="form-control col-sm-3" name="street" style="font-size:14px; font-weight:bold;" placeholder="Street" pattern="[A-Za-z]{1,32}" title="Characters and Numbers" required>
   <input type="text" class="form-control col-sm-2" name="number" style="font-size:14px; font-weight:bold;" placeholder="Number" pattern="[0-9]{1,16}" title="Only Numbers" required>
   <input type="text" class="form-control col-sm-2" name="post_code" style="font-size:14px; font-weight:bold;" placeholder="Post Code" pattern="[0-9]{1,16}" title="Only Numbers" required>
                             <br><br><br>
                        </div>


                          <div class="form-group">
                           <label> <u> Country you pay taxes </u> </label>
                          <span class="glyphicon glyphicon-list-alt"></span> <br>
                           <label> Tax residence / </label>
                           <label> Tax ID number </label> <br>
    <input type="text" class="form-control col-sm-5" name="tax_residence" style="font-size:17px; font-weight:bold;" placeholder="Recidence" pattern="[A-Z]{1,32}" title="Only uppercase" required>
    <input type="text" class="form-control col-sm-7" name="tax_id_number" style="font-size:17px; font-weight:bold;" placeholder="ID Number" pattern="[0-9]{1,32}" title="Only Numbers" required>
                         <br><br>
                        </div>

                      <div class="wrapper">
                         <span class="group-btn">     
                       <button type="submit" name="submit_step2" class="btn btn-primary btn-flat m-b-30 m-t-30"> 
                          Next step <i class="glyphicon glyphicon-menu-right"></i>
                      </button>
                        </span>
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


error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);

  if (isset($_POST['submit_step2']))
    {

      require_once('__SRC__/secure_data.php');

        if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
            {
 
             $obj_secure_data = new SECURE_INPUT_DATA;


             // get personal details from user

              $first_name       =   $obj_secure_data->SECURE_DATA_ENTER($_POST['first_name']);
              $last_name        =   $obj_secure_data->SECURE_DATA_ENTER($_POST['last_name']);                 
              $day              =   $obj_secure_data->SECURE_DATA_ENTER($_POST['day']);
              $month            =   $obj_secure_data->SECURE_DATA_ENTER($_POST['month']);
              $year             =   $obj_secure_data->SECURE_DATA_ENTER($_POST['year']);
              $nationality      =   $obj_secure_data->SECURE_DATA_ENTER($_POST['nationality']);
              $identity_number  =   $obj_secure_data->SECURE_DATA_ENTER($_POST['identity_number']);
              $country_code     =   $obj_secure_data->SECURE_DATA_ENTER($_POST['country_code']);
              $city             =   $obj_secure_data->SECURE_DATA_ENTER($_POST['city']);
              $street           =   $obj_secure_data->SECURE_DATA_ENTER($_POST['street']);
              $number           =   $obj_secure_data->SECURE_DATA_ENTER($_POST['number']);
              $post_code        =   $obj_secure_data->SECURE_DATA_ENTER($_POST['post_code']);
              $tax_residence    =   $obj_secure_data->SECURE_DATA_ENTER($_POST['tax_residence']);
              $tax_id_number    =   $obj_secure_data->SECURE_DATA_ENTER($_POST['tax_id_number']);


          // insert values to sessions 
       
          $_SESSION['first_name'] = $first_name;  
          $_SESSION['last_name'] = $last_name;
          $_SESSION['day'] = $day;
          $_SESSION['month'] = $month;
          $_SESSION['year'] = $year;
          $_SESSION['nationality'] = $nationality;  
          $_SESSION['identity_number'] = $identity_number;
          $_SESSION['country_code'] = $country_code;
          $_SESSION['city'] = $city;
          $_SESSION['street'] = $street;
          $_SESSION['number'] = $number;          
          $_SESSION['post_code'] = $post_code;        
          $_SESSION['tax_residence'] = $tax_residence;  
          $_SESSION['tax_id_number'] = $tax_id_number;    

          $_SESSION['step2']=true;

          $yourURL="page-register3.php";
          echo ("<script>location.href='$yourURL'</script>");


             }  // end of SECURE_INPUT_DATA_AVAILABLE class exists


         }  // end of submit_step2




?>
