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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->


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
 
          $sql = "select account_no, IBAN from accounts where email = '$email'";
          $result = $conn->query($sql); 
          $row = $result->fetch_assoc();
          
             $account_no = $row['account_no'];
             $IBAN       = $row['IBAN'];
 

            $sql2 = "select count(transaction_number), month(date_transfer)
                     from transactions_easy_bank
                     where _from_customer_account_no = '$account_no' ";
            $result2 = $conn->query($sql2);



            $sql3 = "select count(transaction_number), month(date_transfer) from transactions_anyone_bank
                     where _from_customer_IBAN = '$IBAN' ";
            $result3 = $conn->query($sql3);

           


          $easy_bank_transactions_january = 0;
          $anyone_bank_transactions_january = 0;
          $easy_bank_transactions_february = 0;
          $anyone_bank_transactions_february = 0;
          $easy_bank_transactions_march = 0;
          $anyone_bank_transactions_march = 0;
          $easy_bank_transactions_april = 0;
          $anyone_bank_transactions_april = 0;
          $easy_bank_transactions_may = 0;
          $anyone_bank_transactions_may = 0;
          $easy_bank_transactions_june = 0;
          $anyone_bank_transactions_june = 0;
          $easy_bank_transactions_july = 0;
          $anyone_bank_transactions_july = 0;
          $easy_bank_transactions_august = 0;
          $anyone_bank_transactions_august = 0;
          $easy_bank_transactions_september = 0;
          $anyone_bank_transactions_september = 0;
          $easy_bank_transactions_october = 0;
          $anyone_bank_transactions_october = 0;
          $easy_bank_transactions_november = 0;
          $anyone_bank_transactions_november = 0;
          $easy_bank_transactions_december = 0;
          $anyone_bank_transactions_december = 0;







             while ($row2 = $result2->fetch_assoc())
                {

                $easy_bank_transactions =  $row2['count(transaction_number)'];

                $dt1 = "0000-1-00";
                $d1 = date_parse_from_format("Y-m-d", $dt1);

                $dt2 = "0000-2-00";
                $d2 = date_parse_from_format("Y-m-d", $dt2);

                $dt3 = "0000-3-00";
                $d3 = date_parse_from_format("Y-m-d", $dt3);

                $dt4 = "0000-4-00";
                $d4 = date_parse_from_format("Y-m-d", $dt4);

                $dt5 = "0000-5-00";
                $d5 = date_parse_from_format("Y-m-d", $dt5);

                $dt6 = "0000-6-00";
                $d6 = date_parse_from_format("Y-m-d", $dt6);

                $dt7 = "0000-7-00";
                $d8 = date_parse_from_format("Y-m-d", $dt7);

                $dt8 = "0000-8-00";
                $d8 = date_parse_from_format("Y-m-d", $dt8);

                $dt9 = "0000-9-00";
                $d9 = date_parse_from_format("Y-m-d", $dt9);

                $dt10 = "0000-10-00";
                $d10 = date_parse_from_format("Y-m-d", $dt10);

                $dt11 = "0000-11-00";
                $d11 = date_parse_from_format("Y-m-d", $dt11);

                $dt12 = "0000-12-00";
                $d12 = date_parse_from_format("Y-m-d", $dt12);
               

                      if ($row2['month(date_transfer)'] == $d1["month"] )
                           {
                         $easy_bank_transactions_january =  $row2['count(transaction_number)'];
                            }

                      if ($row2['month(date_transfer)'] == $d2["month"] )
                           {
                         $easy_bank_transactions_february =  $row2['count(transaction_number)'];
                            }

                     if ($row2['month(date_transfer)'] == $d3["month"] )
                           {
                         $easy_bank_transactions_march =  $row2['count(transaction_number)'];
                            }

                    if ($row2['month(date_transfer)'] == $d4["month"] )
                             {
                         $easy_bank_transactions_april =  $row2['count(transaction_number)'];
                            }


                   if ($row2['month(date_transfer)'] == $d5["month"] )
                           {
                         $easy_bank_transactions_may =  $row2['count(transaction_number)'];
                            }

                   if ($row2['month(date_transfer)'] == $d6["month"] )
                           {
                         $easy_bank_transactions_june =  $row2['count(transaction_number)'];
                            }


                   if ($row2['month(date_transfer)'] == $d7["month"] )
                           {
                         $easy_bank_transactions_july =  $row2['count(transaction_number)'];
                            }

                  if ($row2['month(date_transfer)'] == $d8["month"] )
                           {
                         $easy_bank_transactions_august =  $row2['count(transaction_number)'];
                            }

                  if ($row2['month(date_transfer)'] == $d9["month"] )
                           {
                         $easy_bank_transactions_september =  $row2['count(transaction_number)'];
                            }

                  if ($row2['month(date_transfer)'] == $d10["month"] )
                           {
                         $easy_bank_transactions_october =  $row2['count(transaction_number)'];
                            }

                  if ($row2['month(date_transfer)'] == $d11["month"] )
                           {
                         $easy_bank_transactions_november =  $row2['count(transaction_number)'];
                            }

                  if ($row2['month(date_transfer)'] == $d12["month"] )
                           {
                         $easy_bank_transactions_december =  $row2['count(transaction_number)'];
                            }


                }




            while ($row3 = $result3->fetch_assoc())
                {

                $anyone_bank_transactions =  $row3['count(transaction_number)'];

                $dtt1 = "0000-1-00";
                $dd1 = date_parse_from_format("Y-m-d", $dtt1);

                $dtt2 = "0000-2-00";
                $dd2 = date_parse_from_format("Y-m-d", $dtt2);

                $dtt3 = "0000-3-00";
                $dd3 = date_parse_from_format("Y-m-d", $dtt3);

                $dtt4 = "0000-4-00";
                $dd4 = date_parse_from_format("Y-m-d", $dtt4);

                $dtt5 = "0000-5-00";
                $dd5 = date_parse_from_format("Y-m-d", $dtt5);

                $dtt6 = "0000-6-00";
                $dd6 = date_parse_from_format("Y-m-d", $dtt6);

                $dtt7 = "0000-7-00";
                $dd8 = date_parse_from_format("Y-m-d", $dtt7);

                $dtt8 = "0000-8-00";
                $dd8 = date_parse_from_format("Y-m-d", $dtt8);

                $dtt9 = "0000-9-00";
                $dd9 = date_parse_from_format("Y-m-d", $dtt9);

                $dtt10 = "0000-10-00";
                $dd10 = date_parse_from_format("Y-m-d", $dtt10);

                $dtt11 = "0000-11-00";
                $dd11 = date_parse_from_format("Y-m-d", $dtt11);

                $dtt12 = "0000-12-00";
                $dd12 = date_parse_from_format("Y-m-d", $dtt12);
               

                      if ($row3['month(date_transfer)'] == $dd1["month"])
                           {
                         $anyone_bank_transactions_january =  $row3['count(transaction_number)'];
                            }

                      if ($row3['month(date_transfer)'] == $dd2["month"] )
                           {
                         $anyone_bank_transactions_february =  $row3['count(transaction_number)'];
                            }

                     if ($row3['month(date_transfer)'] == $dd3["month"] )
                           {
                         $anyone_bank_transactions_march =  $row3['count(transaction_number)'];
                            }

                    if ($row3['month(date_transfer)'] == $dd4["month"] )
                             {
                         $anyone_bank_transactions_april =  $row3['count(transaction_number)'];
                            }


                   if ($row3['month(date_transfer)'] == $dd5["month"] )
                           {
                         $anyone_bank_transactions_may =  $row3['count(transaction_number)'];
                            }

                   if ($row3['month(date_transfer)'] == $dd6["month"] )
                           {
                         $anyone_bank_transactions_june =  $row3['count(transaction_number)'];
                            }


                   if ($row3['month(date_transfer)'] == $dd7["month"] )
                           {
                         $anyone_bank_transactions_july =  $row3['count(transaction_number)'];
                            }

                  if ($row3['month(date_transfer)'] == $dd8["month"] )
                           {
                         $anyone_bank_transactions_august =  $row3['count(transaction_number)'];
                            }

                  if ($row3['month(date_transfer)'] == $dd9["month"] )
                           {
                         $anyone_bank_transactions_september =  $row3['count(transaction_number)'];
                            }

                  if ($row3['month(date_transfer)'] == $dd10["month"] )
                           {
                         $anyone_bank_transactions_october =  $row3['count(transaction_number)'];
                            }

                  if ($row3['month(date_transfer)'] == $dd11["month"] )
                           {
                         $anyone_bank_transactions_november =  $row3['count(transaction_number)'];
                            }

                  if ($row3['month(date_transfer)'] == $dd12["month"] )
                           {
                         $anyone_bank_transactions_december =  $row3['count(transaction_number)'];
                            }


                }



  echo "<div class='breadcrumbs'>
       <div class='content mt-3'>
       <div class='animated fadeIn'>

  <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type='text/javascript'>
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Your Transactions From 2018', 'Easy Bank', 'Anyone Bank'],
          ['Full Transactions', 30000, 30],
          ['January', $easy_bank_transactions_january*1000, $anyone_bank_transactions_january],
          ['February',$easy_bank_transactions_february*1000, $anyone_bank_transactions_february],
          ['March', $easy_bank_transactions_march*1000, $anyone_bank_transactions_march],
          ['April', $easy_bank_transactions_april*1000, $anyone_bank_transactions_april],
          ['May', $easy_bank_transactions_may*1000, $anyone_bank_transactions_may],
          ['June', $easy_bank_transactions_june*1000, $anyone_bank_transactions_june],
          ['July', $easy_bank_transactions_july*1000, $anyone_bank_transactions_july],
          ['August', $easy_bank_transactions_august*1000, $anyone_bank_transactions_august],
          ['September', $easy_bank_transactions_september*1000, $anyone_bank_transactions_september],
          ['October', $easy_bank_transactions_october*1000, $anyone_bank_transactions_october],
          ['November', $easy_bank_transactions_november*1000, $anyone_bank_transactions_november],
          ['December', $easy_bank_transactions_december*1000, $anyone_bank_transactions_december]

        ]);

        var options = {
            width: 1100, 
            height: 600,
          chart: {
            title: '',
            subtitle: ''
          },
          bars: 'horizontal', // Required for Material Bar Charts.
          series: {
            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            x: {
              distance: {label: 'parsecs'}, // Bottom x-axis.
              brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
            }
          }
        };

      var chart = new google.charts.Bar(document.getElementById('dual_x_div'));
      chart.draw(data, options);
    };
    </script>



              <div class='card-body' style='border:0;' align='center'>
                    <h4 class='mb-3'> Your transactions Chart </h4>
                    <div class='flot-container'>
                       <div id='dual_x_div' class='flot-pie-container'></div>
                  </div>
               </div>
                        
           </div>
         </div>
       </div>";

               //} // end of while



  /*

              <div class='row'>
                        <div class='col-lg-6'>
                            <div class='card'>
                                <div class='card-body'>
                                    <h4 class='mb-3'>Pie Chart</h4>
                                    <div class='flot-container'>
                                        <div id='chart_div'></div>
                                    </div>
                                </div>
                            </div><!-- /# card -->
                        </div><!-- /# column -->
                       </div>

       
*/


    } // end of else connect


  } // end of class exists

  

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

