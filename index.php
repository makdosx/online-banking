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

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title> Easy bank </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    


    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

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

body 
{
background-image: url("/images/bg1.jpg");
background-repeat: no-repeat, repeat;
background-size: 100%;
}


.alert 
{
max-width: 550px;
margin: auto; 
}

</style>




</head>


<body>


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                      <!--  <img class="align-content" src="images/logo.png" alt=""> -->
                      <h2 align="center"> <font color="white"> <b> EASY BANK ACCOUNT </b> </font> </h2>
                    </a>
                </div>
                <div class="login-form">
                    <form action="" method="post">


                        <div class="form-group">
                            <label>Email address</label>
                              <div class="input-group">
              <span class="input-group-addon  col-sm-1""><i class="glyphicon glyphicon-user" style="font-size:20px; vertical-align: middle;"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        </div>


                        <div class="form-group">
                            <label>Password</label>
                           <div class="input-group">
              <span class="input-group-addon col-sm-1"><i class="glyphicon glyphicon-lock" style="font-size:20px; vertical-align: middle;"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                             </span>
                        </div>
                       </div>

                       <div class="form-group">
                            <label>Pin</label>
                           <div class="input-group">
          <span class="input-group-addon col-sm-1"><i class="glyphicon glyphicon-info-sign" style="font-size:20px; vertical-align: middle;"></i></span>
                            <input type="password" name="pin" class="form-control" placeholder="Pin" required>
                        </div>
                       </div>


                        <div class="checkbox" align="center">
                            <!--
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                              -->                       
                        </div>

                            <br>

                           <div class="wrapper">
                            <span class="group-btn">     
             <button type="submit" name="submit_login" class="btn btn-success btn-flat m-b-30 m-t-30"> Sign in <i class="fa fa-sign-in"></i></button>
                        </span>
                         </div>

                          <br><br>

                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="page-register.php"> Sign Up Here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>




<?php

error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);


  if (isset($_POST['submit_login']))
      {

          require_once('__SRC__/secure_data.php');

        if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
            {
 
             $obj_secure_data = new SECURE_INPUT_DATA;
              

             $email     =  $obj_secure_data->SECURE_DATA_ENTER($_POST['email']);
             $password  =  $obj_secure_data->SECURE_DATA_ENTER($_POST['password']);
             $pin       =  $obj_secure_data->SECURE_DATA_ENTER($_POST['pin']);

            
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

                    $email     =  $conn->real_escape_string($email);
                    $password  =  $conn->real_escape_string($password);
                    $pin       =  $conn->real_escape_string($pin);
  
                    $password  =  md5($password);


              
                    $sql = "select email,password,pin,account_type from customers where email='$email'";
                    $result = $conn->query($sql);
                    $count =  $result->num_rows;
                   
                         

                      if($count == 1) 
                         {
                  

                      while  ($row = $result->fetch_assoc())
                               {

                      if ($row['account_type'] != 'active')
                              {
                              echo"
                         <div class='alert alert-danger' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                         </button>
                         <strong> Your account is not activated </strong>.
                       </div>";
                              }


                        else if ($row['account_type'] == 'active')
                             {                   

                     if ($row['email'] != $email)
                              {
                              echo"
                         <div class='alert alert-danger' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                         </button>
                         <strong> Your Login </strong> Email is invalid.
                       </div>";
                              }

                        if ($row['password'] != $password)
                             {
                              echo"
                         <div class='alert alert-danger' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                         </button>
                         <strong> Your Login </strong> Password is invalid.
                       </div>";
                              }


                        if ($row['pin'] != $pin)
                             {
                              echo"
                         <div class='alert alert-danger' role='alert'>
                          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                           <span aria-hidden='true'>&times;</span>
                         </button>
                         <strong> Your Login </strong> Pin is invalid.
                       </div>";
                              }

                  
                    if ($row['email'] == $email && $row['password'] == $password && $row['pin'] == $pin)
                                {
                                 $_SESSION['login'] = $email;
                                 $_SESSION['timestamp']=time();
                                 echo ("<script>location.href='home.php'</script>");
                                 }


                               } // end of else if activate

                              }  // end of while

                           }  // end of count



                       else 
                         {

                              } // end of else  error login messages



                        }// end else class connect

                         $conn->close();


                     } // end if class connect exists

 


                 } // end if class secure_data



         
              else
               {
                // exit;
                } // end else class secure_data



      

     } // end of isset submit_login



?>
