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



.form-control{
  border-color:;
  box-shadow: inset 0 1px 1px grey, 0 0 8px grey;
}


/*
.btn-primary
{
    background-color: #4865AE;
 
}


.btn-primary:hover, .btn-primary:active, .btn-primary:visited, .btn-primary:focus 
{
background-color:  #6A5188;
}
*/


.alert 
{
max-width: 550px;
margin: auto; 
}

</style>


<script src="http://code.jquery.com/jquery-1.11.1.js"></script>


<script type="text/javascript" language="javascript">
function ClearForm()
{
    document.MyForm.reset();
}
</script>



</head>


<body onload="ClearForm()">


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
            element.innerHTML = "i-code has expired. To complete the transaction, you have a new code";
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




  echo "<div class='breadcrumbs'>";

           echo  "<div class='col-sm-4'>
                <div class='page-header float-left'>
                    <div class='page-title'>
                        <h1> <b> $lastname $firstname </b> </h1>
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


     $pieces = explode(" ", $_POST['recipient']);
     $lastname = $pieces[0];
     $firstname = $pieces[1]; 


     $sql3  = "select publishable_key_stripe, secret_key_stripe from customers
                where lastname = '$lastname' and firstname = '$firstname'";
     $result3 = $conn->query($sql3);

     while ($row3 = $result3->fetch_assoc())
       {

  echo $row3['publishable_key_stripe'] ."<br>" .$row3['secret_key_stripe'];

require 'widrawals/stripe/Stripe.php';

$params = array(
	"testmode"   => "on",
	"private_live_key" => "sk_live_xxxxxxxxxxxxxxxxxxxxx",
	"public_live_key"  => "pk_live_xxxxxxxxxxxxxxxxxxxxx",
	"private_test_key" =>  "{$row3['secret_key_stripe']}",
	"public_test_key"  =>  "{$row3['publishable_key_stripe']}"
);

//echo $lastname ."<br>" .$firstname;

if ($params['testmode'] == "on") {
	Stripe::setApiKey($params['private_test_key']);
	$pubkey = $params['public_test_key'];
} else {
	Stripe::setApiKey($params['private_live_key']);
	$pubkey = $params['public_live_key'];
}

if(isset($_POST['stripeToken']))
{
	//$amount_cents = str_replace(".","",$_POST['amount']);  // Chargeble amount
        $main_amount = $_POST['main_amount'];
        $secondary_amount = $_POST['secondary_amount'];
        $amount_cents = $main_amount .$secondary_amount;

        $length_code = 8;
        $invoiceid = substr(str_shuffle("123456789"),0, $length_code); // Invoice ID
                   
	$description = "Invoice #" . $invoiceid . " - " . $invoiceid;
	
	try {

		$charge = Stripe_Charge::create(array(		 
			  "amount" => $amount_cents,
			  "currency" => "usd",
			  "source" => $_POST['stripeToken'],
			  "description" => $description)			  
		);

		if ($charge->card->address_zip_check == "fail") {
			throw new Exception("zip_check_invalid");
		} else if ($charge->card->address_line1_check == "fail") {
			throw new Exception("address_check_invalid");
		} else if ($charge->card->cvc_check == "fail") {
			throw new Exception("cvc_check_invalid");
		}
		// Payment has succeeded, no exceptions were thrown or otherwise caught				

		$result = "success";

	} catch(Stripe_CardError $e) {			

	$error = $e->getMessage();
		$result = "declined";

	} catch (Stripe_InvalidRequestError $e) {
		$result = "declined";		  
	} catch (Stripe_AuthenticationError $e) {
		$result = "declined";
	} catch (Stripe_ApiConnectionError $e) {
		$result = "declined";
	} catch (Stripe_Error $e) {
		$result = "declined";
	} catch (Exception $e) {

		if ($e->getMessage() == "zip_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "address_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "cvc_check_invalid") {
			$result = "declined";
		} else {
			$result = "declined";
		}		  
	}
	
	//echo "<BR>Stripe Payment Status : ".$result;
	
	//echo "<BR>Stripe Response : ";
	
	//print_r($charge); exit;
 

          if ($result ==  true)
              { 
              echo '<script type="text/javascript">alert("This transfer was held successfully.");
                     </script>';
              echo ("<script>location.href='transac_withdrawals.php'</script>");
                }


}


           
  } // end of while
         

       } // end of else connect

    $conn->close();

    } // end of if class connect exists




?>
  



  <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                     <img class="align-content" style="position: relative; left: -60%;" src="images/menu/transf0.png" height="70" width="80" alt=""> 
                      <h2 style="position: relative; left: -60%;"> <font color="grey"> <b> Easy Bank Cards  </b> </font> </h2>
                </div>

                <div class="login-form"  style="width: 550px; position: relative; left: -60%;">


         <form action="" method="POST" id="payment-form">
        <span class="payment-errors"></span>
            

                  <div class="form-group form-inline">

              <i class="fa fa-user-o" style="font-size:16px;"></i> &nbsp;
              <label> Recipient </label> 

              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 



                 

              <select class="form-control col-sm-8" id="sel1" name="recipient">
            
             <?php

    require_once('__SRC__/connect.php');


     if (class_exists('DATABASE_CONNECT'))
            {
 
             $obj_conn2  = new DATABASE_CONNECT;
            
             $host2 = $obj_conn2->connect[0];
             $user2 = $obj_conn2->connect[1];
             $pass2 = $obj_conn2->connect[2];
             $db2   = $obj_conn2->connect[3];

 
              $conn2 = new mysqli($host2,$user2,$pass2,$db2);
 
                 if ($conn2->connect_error)
                      {
                       die ("Cannot connect " .$conn2->connect_error);
                        }


                else
                  {

                 $sql2 = "select firstname , lastname 
                          from customers order by lastname asc";
                 $result2 = $conn2->query($sql2);               
  
                 while ($row2 = $result2->fetch_assoc())
                        {

           echo "<option> {$row2['lastname']}  {$row2['firstname']}
                  </option>";

 
                     } // end of while


                } // end of else connect

                $conn2->close();

               } // end of class exist
  
               ?>

             </select>



         </div>





       <div class="form-group form-inline">

	   <i class="fa fa-money" style="font-size:18px;"></i> &nbsp;
           <label> Ammount </label> <br>
            &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; 
          <input type="text" class="form-control col-sm-4" name="main_amount" placeholder="####"
      data-stripe="number" pattern="[0-9]{1,7}" title="Only Numbers (up to 7 digits)" required> &nbsp;
          
       <input type="text" class="form-control col-sm-3" name="secondary_amount" placeholder="##" 
          data-stripe="number" pattern="[0-9]{1,2}" title="Only Numbers (up to 2 digits)" required> &nbsp;
         
       <input type="text" class="form-control col-sm-1" style="text-align:center;" name="currency" value="&euro;" disabled> 
        
        </div>



          <br>



          <div class="form-group form-inline">
     
              <i class="fa fa-credit-card" style="font-size:17px;"></i> &nbsp;
              <label> Card Number </label> 
                &nbsp; &nbsp;
            <input type="text" class="form-control col-sm-8" name="card_number" 
                   data-stripe="number" placeholder="#### #### #### ####" pattern="[0-9]{16}" 
                   title="Only Digits (16 digits required)" required>

          </div>


           <br>


 <div class="form-group form-inline">
     
              <i class="fa fa-credit-card" style="font-size:17px;"></i> &nbsp;
              <label> EXPIRATION </label> &nbsp; &nbsp; 
    
            <input type="text" class="form-control col-sm-2" name="exp_day" placeholder="MM" 
                data-stripe="exp_month" pattern="[0-9]{1,2}" title="Only Digits (1 or 2 digits required)" required>
                    
                   &nbsp; / &nbsp;
              
            <input type="text" class="form-control col-sm-2" name="exp_year" placeholder="YY" 
                   data-stripe="exp_year" pattern="[0-9]{2}" title="Only Digits (2 digits required)" required>

                   &nbsp; &nbsp; 

             <i class="fa fa-credit-card" style="font-size:17px;"></i> &nbsp;
             <label> CVC </label> 
                   &nbsp; &nbsp;
            <input type="text" class="form-control col-sm-2" name="cvc" placeholder="###" 
                   data-stripe="cvc" pattern="[0-9]{3}" title="Only Digits (3 digits required)" required>


          </div>

           <br>


     <div class="wrapper">
        <span class="group-btn">     
          <button type="submit" name="transfer_easy_bank" class="btn btn-primary btn-flat m-b-30 m-t-30"> 
           Transfer &nbsp; &nbsp; 
           <img src="images/menu/transfer3.png" style="height:28px; width:28px; fill: green;"></i> 
          </button>
        </span>
     </div>

 </form>


      </div>
     </div>
    </div>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- TO DO : Place below JS code in js file and include that JS file -->
<script type="text/javascript">
	Stripe.setPublishableKey('<?php echo $params['public_test_key']; ?>');
  
	$(function() {
	  var $form = $('#payment-form');
	  $form.submit(function(event) {
		// Disable the submit button to prevent repeated clicks:
		$form.find('.submit').prop('disabled', true);
	
		// Request a token from Stripe:
		Stripe.card.createToken($form, stripeResponseHandler);
	
		// Prevent the form from being submitted:
		return false;
	  });
	});

	function stripeResponseHandler(status, response) {
	  // Grab the form:
	  var $form = $('#payment-form');
	
	  if (response.error) { // Problem!
	
		// Show the errors on the form:
		$form.find('.payment-errors').text(response.error.message);
		$form.find('.submit').prop('disabled', false); // Re-enable submission
	
	  } else { // Token was created!
	
		// Get the token ID:
		var token = response.id;

		// Insert the token ID into the form so it gets submitted to the server:
		$form.append($('<input type="hidden" name="stripeToken">').val(token));
	
		// Submit the form:
		$form.get(0).submit();
	  }
	};
</script>




        </div> <!-- .content -->
    </div><!-- /#right-panel -->

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
