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



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>

  <meta HTTP-EQUIV="REFRESH" content="900; url=/logout.php">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title> Easybank </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="favicon.png" type="image/png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->



<!--for big logout icon on hover -->

<script>
function bigImg(x) {
    x.style.height = "36px";
    x.style.width = "36px";
}

function normalImg(x) {
    x.style.height = "32px";
    x.style.width = "32px";
}
</script>




<style>
.modal {
  text-align: center;
  padding: 0!important;
}

.modal:before {
  content: '';
  display: inline-block;
  height: 80%;
  vertical-align: middle;
  margin-right: -4px; /* Adjusts for spacing */
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}

.modal-content {
  background-color: silver;
}
.modal-body {
  background-color: white;
}


.modal-backdrop {
    
   background-color: grey !important;
   opacity:`1;
    
/*
   background-image: url(images/bg2.jpg);
   opacity:1 !important;
*/
}


 .panel
        {
          margin: 5%;
          background: transparent;
        }


        tr
        {
          transition: all 0.5s;
        }
        tr:hover
        {
          background-color: #f0ad4e;
          transition: 0.5s;
        }
        .btn-warning
        {
          transition: all 0.8s;
        }

        .btn-warning:hover, .btn-warning:focus
        {
          transition: 0.8s;
          background-color: #428bca;
          border-color: #428bca;
        }

        .panel-footer
        {
          background-color: #5bc0de;
          color: white;
        }




</style>




<script>
  $(document).ready(function(){
      $(".form-control").popover({title: "Search Here", placement: "top"});
     })
</script>




</head>



<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="home.php"> EasyBank </a>
                <a class="navbar-brand active" href="home.php"><img src="images/logo5.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                   


                    <h3 class="menu-title"> statements </h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-handshake-o"></i> Transactions </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa fa-money"></i><a href="transac_deposits.php"> Deposits </a></li>
                            <li><i class="fa fa fa fa-credit-card"></i><a href="transac_withdrawals.php"> Withdrawals  </a></li>
                        </ul>
                    </li>


                  
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-credit-card-alt"></i> Transfers</a>
                        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-credit-card-alt"></i><a href="transf_easy_bank.php?i_code_true"> Easy Bank </a></li>
            <li><i class="fa fa-credit-card"></i><a href="transf_anyone_bank.php?i_code_true"> Anyone Bank  </a></li>
                        </ul>
                    </li>







                    <h3 class="menu-title"> Settings </h3><!-- /.menu-title -->

                    <li>
               <a href="account.php"> <i class="menu-icon fa fa-user"></i> Account </a>
                    </li>

                    <li>	
                        <a href="notifications.php"> <i class="menu-icon ti-bell"></i> Notifications </a>
                    </li>

                    <li>
                        <a href="statics.php"> <i class="menu-icon fa fa-bar-chart"></i> Statics </a>
                    </li>

                   


                    <h3 class="menu-title"> Extras </h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i> Services </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-info"></i><a href="informations.php"> Informations </a></li>
                            <li><i class="menu-icon fa fa-comments"></i><a href="support.php"> Support </a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       <?php echo date("d.m.Y"); ?>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
  
                         <?php  echo "Auto logout in ";  ?>    <span id="countdown"></span>


<!--for countdown to autologout -->
<script>
function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
            element.innerHTML = "countdown's over!";
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}

countdown( "countdown", 15, 0 );
</script>


                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                         <!--
                        <a href="javascript:logout();"> 
                      <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="user-avatar rounded-circle" src="images/menu/logout.png" title="Logout">
 </a>
-->

<a href="#" data-toggle="modal" data-target="#logoutModal">
   <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" class="user-avatar rounded-circle" src="images/menu/logout.png" title="Logout">
 </a>



<!-- Modal -->
<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Log Out <i class="fa fa-lock"></i></h4>
      </div>
      <div class="modal-body">
        <p><i class="fa fa-question-circle"></i> Are you sure you want to Logout? <br /></p>
        <div class="actionsBtns">
          <form>
           <button class="btn btn-default btn-lg" data-dismiss="modal"> Cancel
             <i class="fa fa-close"></i>
           </button>
              &nbsp;
           <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
           <button type="submit" class="btn btn-default btn-primary btn-lg" data-dismiss="modal"  onclick="window.location.href='logout.php'"/> Logout
            <i class="fa fa-check"></i>
          </button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
                      

               
  <script>
    function logout() 
      {
     if (confirm("Do you want logout?"))
        {
        location.href='logout.php';
       }
     }
 </script>


                    </div>


                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->






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

                 $email = $_SESSION['login'];

                 $sql_details_user = "select lastname, firstname from customers where email = '$email'"; 
                 $result_details_user = $conn->query($sql_details_user);
                 $row_details_user = $result_details_user->fetch_assoc();

                 $lastname  = ucfirst($row_details_user['lastname']);
                 $firstname = ucfirst($row_details_user['firstname']);


       
        echo '<div class="breadcrumbs">';

/*
          echo  "<div class='col-sm-4'>
                <div class='page-header float-left'>
                    <div class='page-title'>
                        <h1> Welcome to Easy Bank <b> $lastname $firstname </b> </h1>
                    </div>
                </div>
            </div>";


      
        $sql0 = "select total_balance from accounts where email = '".$_SESSION['login']."'";
        $result0 = $conn->query($sql0);
           

            while ($row0 = $result0->fetch_assoc())
               {

           echo "<div class='col-sm-8'>
                <div class='page-header float-right'>
                    <div class='page-title'>
                        <ol class='breadcrumb text-right'>
                            <li class='active'> Your balance: {$row0['total_balance']} <i class='fa fa-euro'></i> </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>";
       
         } // end ehile of balance

 */


          /*
        echo "<div class='content mt-3'>

           <div class='col-sm-12'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <span class='badge badge-pill badge-success'> 
                      You have successfully joined  $lastname $firstname
                    </span>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
            </div>";
            */



     $sql = "select id, created, lastname, firstname, title, message from notifications
             where email = '$email' ";
     $result = $conn->query($sql);
      

  echo '<div class="container-fluid">
    <div class="panel panel-success">
      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <h2 class="text-center pull-left" style="padding-left: 30px;"> 
          <i class="menu-icon fa fa-bell"></i> Notifications </h2>
          </div>';
          



      echo '<div class="panel-body table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="text-center"> Date </th>
              <th class="text-center"> Lstname </th>
              <th class="text-center"> firstname </th>
              <th class="text-center"> Title </th>
              <th class="text-center"> Notice </th>
            </tr>
          </thead>';


       while ($row = $result->fetch_assoc())
             { 

         echo "<tbody>
            <tr class='edit' id='detail'>
              <td class='text-center'> {$row['created']} </td>
              <td class='text-center'> {$row['lastname']} </td>
              <td class='text-center'> {$row['firstname']} </td>
              <td class='text-center'> {$row['title']} </td>
              <td class='text-center'> {$row['message']} </td>
            </tr>
          </tbody>";
      


         } // end of while


         echo '<table>
              </div>';  
 


           echo '<br><br>';
           
 

          $sql2 = "select total_balance, account_statement from accounts where email = '".$_SESSION['login']."'";
          $result2 = $conn->query($sql2);
           

            while ($row2 = $result2->fetch_assoc())
               {
           
           echo '<div align="center">';

           echo "<div class='col-xl-3 col-lg-6'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='stat-widget-one'>
                            <div class='stat-icon dib'><i class='fa fa-euro text-success border-success'></i></div>
                            <div class='stat-content dib'>
                                <div class='stat-text'> Your balance </div>
                                <div class='stat-digit'> {$row2['total_balance']} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";



            echo "<div class='col-xl-3 col-lg-6'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='stat-widget-one'>
                            <div class='stat-icon dib'><i class='ti-user text-primary border-primary'></i></div>
                            <div class='stat-content dib'>
                                <div class='stat-text'> Your account </div>
                                <div class='stat-digit'> {$row2['account_statement']} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";


          } // end of while



       $sql3 = "select account_no, IBAN from accounts where email = '".$_SESSION['login']."'";
       $result3 = $conn->query($sql3);
           

     while ($row3 = $result3->fetch_assoc())
            {

           $account_no = $row3['account_no'];
           $IBAN       = $row3['IBAN'];


         $sql4 = "select count(_from_customer_account_no) from transactions_easy_bank 
                  where  _from_customer_account_no = '$account_no'";
         $result4 = $conn->query($sql4);
         $row4    = $result4->fetch_assoc();
               
        
         $sql5 = "select count(_from_customer_IBAN) from transactions_anyone_bank 
                  where  _from_customer_IBAN = '$IBAN'";
         $result5 = $conn->query($sql5);
         $row5    = $result5->fetch_assoc();
              

         $transfer_easy_bank   = $row4['count(_from_customer_account_no)'];
         $transfer_anyone_bank = $row5['count(_from_customer_IBAN)'];
 
         $all_transfers = $transfer_easy_bank + $transfer_anyone_bank;
 

       

         $sql6 = "select count(_from_customer_account_no) from transactions_easy_bank 
                  where _from_customer_account_no = '$account_no' or _to_customer_account_no = '$account_no'";
         $result6 = $conn->query($sql6);
         $row6    = $result6->fetch_assoc();
               
        
         $sql7 = "select count(_from_customer_IBAN) from transactions_anyone_bank 
                  where _from_customer_IBAN = '$IBAN' or _to_customer_IBAN = '$IBAN'";
         $result7 = $conn->query($sql7);
         $row7    = $result7->fetch_assoc();
              

         $transactions_easy_bank   = $row6['count(_from_customer_account_no)'];
         $transactions_anyone_bank = $row7['count(_from_customer_IBAN)'];
 
         $all_transactions = $transactions_easy_bank + $transactions_anyone_bank;



          echo "<div class='col-xl-3 col-lg-6'>
                <div class='card'>
                    <div class='card-body'>
                        <div class='stat-widget-one'>
                       <div class='stat-icon dib'><i class='fa fa-handshake-o text-warning border-warning'></i></div>
                            <div class='stat-content dib'>
                                <div class='stat-text'> Transcactions </div>
                                <div class='stat-digit'> $all_transactions </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";


   
         
       echo "<div class='col-xl-3 col-lg-6'>
                <div class='card'>
                    <div class='card-body'>
                    <div class='stat-widget-one'>
                    <div class='stat-icon dib'><i class='fa fa-credit-card-alt text-warning border-warning'></i></div>
                            <div class='stat-content dib'>
                                <div class='stat-text'> Transfers </div>
                                <div class='stat-digit'> $all_transfers </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";


         } // end of while select elements
 

         echo '<div>';


       echo '</div> 
            </div>';




         } // end of else connect



    } // end of if class connect exists



?>

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
