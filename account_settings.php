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



<!DOCTYPE html>
<html lang="en" >

<head>

     <title> Easybank </title>
     <link rel="shortcut icon" href="favicon.png" type="image/png">

  <meta HTTP-EQUIV="REFRESH" content="900; url=/logout.php">



  <meta charset="UTF-8">

  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Slabo+27px|Yesteryear'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>



 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<style>

* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  background: #eceef1;
  font-family: 'Slabo 27px', serif;
  color: #333a45;
}

.wrapper {
  margin: 5em auto;
  max-width: 1000px;
  background-color: #fff;
  -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.06);
          box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.06);
}

.header {
  padding: 30px 30px 0;
  text-align: center;
}
.header__title {
  margin: 0;
  text-transform: uppercase;
  font-size: 2.5em;
  font-weight: 500;
  line-height: 1.1;
}
.header__subtitle {
  margin: 0;
  font-size: 1.5em;
  color: #949fb0;
  font-weight: 500;
  line-height: 1.1;
}

.cards {
  padding: 15px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
          flex-flow: row wrap;
}

.card {
  margin: 15px;
  width: calc((100% / 3) - 30px);
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
@media screen and (max-width: 991px) {
  .card {
    width: calc((100% / 2) - 30px);
  }
}
@media screen and (max-width: 767px) {
  .card {
    width: 100%;
  }
}
.card:hover .card__inner {
  background-color: #1abc9c;
  -webkit-transform: scale(1.05);
          transform: scale(1.05);
}
.card__inner {
  width: 100%;
  padding: 30px;
  position: relative;
  cursor: pointer;
  background-color: #949fb0;
  color: #eceef1;
  font-size: 1.5em;
  text-transform: uppercase;
  text-align: center;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.card__inner:after {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.card__inner .fa {
  width: 100%;
  margin-top: .25em;
}
.card__expander {
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  background-color: transparent;
  width: 100%;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-transform: uppercase;
  color: #eceef1;
  font-size: 1.5em;
}
.card__expander .fa {
  font-size: 0.75em;
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
  color: black;
}
.card__expander .fa:hover {
  opacity: 0.9;
}
.card.is-collapsed .card__inner:after {
  content: "";
  opacity: 0;
}
.card.is-collapsed .card__expander {
  max-height: 0;
  min-height: 0;
  overflow: hidden;
  margin-top: 0;
  opacity: 0;
}
.card.is-expanded .card__inner {
  background-color: #1abc9c;
}
.card.is-expanded .card__inner:after {
  content: "";
  opacity: 1;
  display: block;
  height: 0;
  width: 0;
  position: absolute;
  bottom: -30px;
  left: calc(50% - 15px);
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-bottom: 15px solid #333a45;
}
.card.is-expanded .card__inner .fa:before {
  content: "\f115";
}
.card.is-expanded .card__expander {
  max-height: 1000px;
  min-height: 200px;
  overflow: visible;
  margin-top: 30px;
  opacity: 1;
}
.card.is-expanded:hover .card__inner {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.card.is-inactive .card__inner {
  pointer-events: none;
  opacity: 0.5;
}
.card.is-inactive:hover .card__inner {
  background-color: #949fb0;
  -webkit-transform: scale(1);
          transform: scale(1);
}

@media screen and (min-width: 992px) {
  .card:nth-of-type(3n+2) .card__expander {
    margin-left: calc(-100% - 30px);
  }

  .card:nth-of-type(3n+3) .card__expander {
    margin-left: calc(-200% - 60px);
  }

  .card:nth-of-type(3n+4) {
    clear: left;
  }

  .card__expander {
    width: calc(300% + 60px);
  }
}
@media screen and (min-width: 768px) and (max-width: 991px) {
  .card:nth-of-type(2n+2) .card__expander {
    margin-left: calc(-100% - 30px);
  }

  .card:nth-of-type(2n+3) {
    clear: left;
  }

  .card__expander {
    width: calc(200% + 30px);
  }
}




/* Main carousel style */
.carousel {
    width: 800px;
}

/* Indicators list style */
.article-slide .carousel-indicators {
    bottom: -30%;
    left: 20%;
    margin-left: 100px;
    width: 100%;
}
/* Indicators list style */
.article-slide .carousel-indicators li {
    border: medium none;
    border-radius: 0;
    float: left;
    height: 80px;
    margin-bottom: 5px;
    margin-left: 0;
    margin-right: 5px !important;
    margin-top: 0;
    width: 130px;
}
/* Indicators images style */
.article-slide .carousel-indicators img {
    border: 2px solid #FFFFFF;
    float: left;
    height: 80px;
    left: 0;
    width: 130px;
}
/* Indicators active image style */
.article-slide .carousel-indicators .active img {
    border: 2px solid #428BCA;
    opacity: 0.7;
}



</style>



<script>
// Stop carousel
$('.carousel').carousel({
  interval: false
});
</script>



<script>
$(document).ready(function() {
    $('#div1').hide();
    $('#preview').on('click', function() {
            $('#div1').toggle(300);
    });
});
</script>



  
</head>



<body>


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

 //echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>';
 //echo '<div id="div1">';



  echo "<div class='wrapper'>";

  echo "<div class='header'>
    <h1 class='header__title'> Account Settings </h1>
    <h2 class='header__subtitle'> Easy Bank </h2>
  </div>";





 echo "<div class='cards'>";


    $sql1 = "select firstname, lastname, date_of_birth, id_document_number, mobile_area_code, mobile_number,
                    nationality, country, town_city, street, street_number, tax_id_number
             from customers
             where email = '".$_SESSION['login']."'";
    $result1 = $conn->query($sql1);
           

     while ($row1 = $result1->fetch_assoc())
            {

   echo "<div class=' card [ is-collapsed ] '>
      <div class='card__inner [ js-expander ]'>
        <span> Personal Details </span>
        <i class='fa fa-folder-o'></i>
      </div>
      <div class='card__expander'>
        <i class='fa fa-close [ js-collapser ]'></i>


<div class='container'>
<div class='row'>
<div class='col-sm-12'>
<p></p> 
</div>
</div>

   
         <div class='row'>

            <div class='panel panel-default' style='min-width: 900px; max-width: 900px; color:black;'>
                      <div class='panel-heading'> 
                        <h4 > Customer Details </h4>
                     </div>

                       <div class='panel-body'>
                      <div class='col-md-4 col-xs-12 col-sm-6 col-lg-4'>

                       <img alt='User Pic' src='images/logo_pdf.jpg' id='' class='img-circle img-responsive'> 
                     
                
                      </div>

                      <div class='col-md-8 col-xs-12 col-sm-6 col-lg-8'>
                          <div class='container'>
                            <h2> {$row1['lastname']} {$row1['firstname']} </h2>
                            <p> an   <b> Customer </b></p>
                          </div>

                           <hr>

                          <ul class='container details'>


                            <li> 
                            <p>
                            <span class='glyphicon glyphicon-picture' style='width:50px;'></span>
                               id_document_number: &nbsp; {$row1['id_document_number']} 
                            </p>
                            </li>


                            <li> 
                            <p>
                            <span class='glyphicon glyphicon-info-sign' style='width:50px;'></span>
                               tax id number: &nbsp; {$row1['tax_id_number']} 
                            </p>
                            </li>



                            <li> 
                            <p>
                            <span class='glyphicon glyphicon-calendar' style='width:50px;'></span>
                               date birth: &nbsp; {$row1['date_of_birth']} 
                            </p>
                            </li>


                            <li> 
                            <p>
                            <span class='glyphicon glyphicon-phone' style='width:50px;'></span>
                               mobile number: &nbsp; {$row1['mobile_area_code']}  {$row1['mobile_number']} 
                            </p>
                            </li>



                            <li> 
                            <p>
                            <span class='glyphicon glyphicon-globe' style='width:50px;'></span>
                               nationality: &nbsp; {$row1['nationality']} 
                            </p>
                            </li>



                            <li> 
                            <p>
                            <span class='glyphicon glyphicon-map-marker' style='width:50px;'></span>
                              country &nbsp; {$row1['country']}  &nbsp; &nbsp;  city: &nbsp; {$row1['town_city']} 
                            </p>
                            </li>


                            <li> 
                            <p>
                            <span class='glyphicon glyphicon-road' style='width:50px;'></span>
                               street: &nbsp; {$row1['street']}  &nbsp; &nbsp;  number: &nbsp; {$row1['street_number']} 
                            </p>
                            </li>


                          </ul>
                      
                      </div>

                </div>
                  </div>
             


</div><!--/row-->
<p></p>
</div>

      </div>
    </div>";


    } // end of while





   echo "<div class=' card [ is-collapsed ] '>
      <div class='card__inner [ js-expander ]'>
        <span> Login Details </span>
        <i class='fa fa-folder-o'></i>
      </div>
      <div class='card__expander'>
        <i class='fa fa-close [ js-collapser ]'></i>


<div class='container'>
<div class='row'>
<div class='col-sm-12'>
<p></p> 
</div>
</div>

<div class='row'>

<div class='col-sm-6 col-sm-offset-3'>

<form action='account_change_pass.php' method='post' id='passwordForm'>

<input type='password' class='input-lg form-control' name='password' id='password1' placeholder='New Password' autocomplete='off' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' required>

<div class='row'>

<div class='col-sm-6'>
<span id='8char' class='glyphicon glyphicon-remove' style='color:#FF0004;'></span> 
 <font color='black'> 8 Characters Long </font> <br>
<span id='ucase' class='glyphicon glyphicon-remove' style='color:#FF0004;'></span> 
<font color='black'> One Uppercase Letter </font>
</div>

<div class='col-sm-6'>
<span id='lcase' class='glyphicon glyphicon-remove' style='color:#FF0004;'></span> 
  <font color='black'> One Lowercase Letter </font> <br>
<span id='num' class='glyphicon glyphicon-remove' style='color:#FF0004;'></span> 
 <font color='black'> One Number </font>
</div>

</div>

<input type='password' class='input-lg form-control' name='password_retype' id='password2' placeholder='Repeat Password' autocomplete='off' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' required>

<div class='row'>
<div class='col-sm-12'>
<span id='pwmatch' class='glyphicon glyphicon-remove' style='color:#FF0004;'></span> Passwords Match
</div>
</div>

<input type='submit' name='change_password' class='col-xs-12 btn btn-primary btn-load btn-lg' data-loading-text='Changing Password...' value='Change Password'>
</form>

<p></p>


</div>
<p></p>
</div><!--/row-->
<p></p>
</div> ";


echo'
<script>
$("input[type=password]").keyup(function(){
    var ucase = new RegExp("[A-Z]+");
	var lcase = new RegExp("[a-z]+");
	var num = new RegExp("[0-9]+");
	
	if($("#password1").val().length >= 8){
		$("#8char").removeClass("glyphicon-remove");
		$("#8char").addClass("glyphicon-ok");
		$("#8char").css("color","#00A41E");
	}else{
		$("#8char").removeClass("glyphicon-ok");
		$("#8char").addClass("glyphicon-remove");
		$("#8char").css("color","#FF0004");
	}
	
	if(ucase.test($("#password1").val())){
		$("#ucase").removeClass("glyphicon-remove");
		$("#ucase").addClass("glyphicon-ok");
		$("#ucase").css("color","#00A41E");
	}else{
		$("#ucase").removeClass("glyphicon-ok");
		$("#ucase").addClass("glyphicon-remove");
		$("#ucase").css("color","#FF0004");
	}
	
	if(lcase.test($("#password1").val())){
		$("#lcase").removeClass("glyphicon-remove");
		$("#lcase").addClass("glyphicon-ok");
		$("#lcase").css("color","#00A41E");
	}else{
		$("#lcase").removeClass("glyphicon-ok");
		$("#lcase").addClass("glyphicon-remove");
		$("#lcase").css("color","#FF0004");
	}
	
	if(num.test($("#password1").val())){
		$("#num").removeClass("glyphicon-remove");
		$("#num").addClass("glyphicon-ok");
		$("#num").css("color","#00A41E");
	}else{
		$("#num").removeClass("glyphicon-ok");
		$("#num").addClass("glyphicon-remove");
		$("#num").css("color","#FF0004");
	}
	
	if($("#password1").val() == $("#password2").val()){
		$("#pwmatch").removeClass("glyphicon-remove");
		$("#pwmatch").addClass("glyphicon-ok");
		$("#pwmatch").css("color","#00A41E");
	}else{
		$("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
	}
});
</script>';



    echo "</div>
        </div>";




    $sql3 = "select identity_front_data, identity_back_data
             from customers
             where email = '".$_SESSION['login']."'";
    $result3 = $conn->query($sql3);
           

     while ($row3 = $result3->fetch_assoc())
            {



    echo" <div class=' card [ is-collapsed ] '>
      <div class='card__inner [ js-expander ]'>
        <span> Your documents </span>
        <i class='fa fa-folder-o'></i>
      </div>
      <div class='card__expander'>
        <i class='fa fa-close [ js-collapser ]'></i>
 

<div align='center'>

<div class='carousel slide article-slide' id='article-photo-carousel'>

  <!-- Wrapper for slides -->
  <div class='carousel-inner cont-slider'>

    <div class='item active'>
      <img id=foo src='data:image/jpeg;base64," .base64_encode($row3['identity_front_data'])  ."' 
           height='350' width='450' />
    </div>

    <div class='item'>
      <img id=foo src='data:image/jpeg;base64," .base64_encode($row3['identity_back_data'])  ."'
           height='350' width='450'  />
    </div>

  </div>


  <!-- Indicators -->
  <ol class='carousel-indicators'>

    <li class='active' data-slide-to='0' data-target='#article-photo-carousel'>
      <img id=foo src='data:image/jpeg;base64," .base64_encode($row3['identity_front_data'])  ."'/>
    </li>

    <li class='' data-slide-to='1' data-target='#article-photo-carousel'>
      <img id=foo src='data:image/jpeg;base64," .base64_encode($row3['identity_back_data'])  ."'/>
    </li>


  </ol>
</div>

</div>

      </div>
    </div>";


  }// end of while


   echo "</div> </div>";




  //echo '</div>';


  } // end of else connect


 } // end of connect class exist



?>









  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script>
  var $cell = $('.card');

//open and close card when clicked on card
$cell.find('.js-expander').click(function() {

  var $thisCell = $(this).closest('.card');

  if ($thisCell.hasClass('is-collapsed')) {
    $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed').addClass('is-inactive');
    $thisCell.removeClass('is-collapsed').addClass('is-expanded');
    
    if ($cell.not($thisCell).hasClass('is-inactive')) {
      //do nothing
    } else {
      $cell.not($thisCell).addClass('is-inactive');
    }

  } else {
    $thisCell.removeClass('is-expanded').addClass('is-collapsed');
    $cell.not($thisCell).removeClass('is-inactive');
  }
});

//close card when click on cross
$cell.find('.js-collapser').click(function() {

  var $thisCell = $(this).closest('.card');

  $thisCell.removeClass('is-expanded').addClass('is-collapsed');
  $cell.not($thisCell).removeClass('is-inactive');

});
   </script>




</body>

</html>
