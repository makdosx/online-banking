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

<meta charset="utf-8">


 <link rel="stylesheet" type="text/css" href=""> 

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/nikhil8krishnan/pen/WvYPvv?depth=everything&limit=all&order=popularity&page=27&q=text&show_forks=false" />

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>



<style class="cp-pen-styles">


h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
color: white;
 }
.tbl-content{
  height:600px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
color: white;
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: black;
  text-transform: uppercase;
color: white;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: black;
  border-bottom: solid 1px rgba(255,255,255,0.1);
color: white;
}


/* demo styles */


@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, brown, brown);
  background: linear-gradient(to right, brown, brown); 
  font-family: 'Roboto', sans-serif;
}


section{
  margin: 50px;
}



/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}


a
{
text-decoration: none;
color: white;;
}


a:hover
{
text-decoration: none;
color: black;
}



 /* css for modal pics */




</style>



</head>

<body id="body">




<?php


error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);


 if (!isset($_SESSION['login']))
    {
      header("Location: index.php");
      }
 

  else
    {

    require_once('__TMP__/connect.php');


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
   


     $sql = "select id, account_number, IBAN, firstname, lastname, date_of_birth, id_document_number, 
                        mobile_area_code, mobile_number,
                    identity_front_data, identity_front_name, identity_back_data ,identity_back_name, account_type 
             from customers order by lastname asc";
     $result = $conn->query($sql);
      

    if(!$result)
       {
        echo '<p> </p>';
          }


    else
      {

 echo"
<section>
  <!--for demo wrap-->

     <a href='logout.php' id='a'> Sign out  <a/>

  <h1>  Easy bank panel </h1>

  <div class='tbl-header'>
    <table cellpadding='0' cellspacing='0' border='0'>
      <thead>
        <tr>
          <th>Lastname</th>
          <th>Firstname</th>  
          <th>Date of birth</th>
          <th>Id number</th>
          <th>Mobile phone</th>
          <th>Id front</th>
          <th>Id back</th>
          <th>condition</th>
        </tr>
      </thead>
    </table>
  </div>";



     while ($row = $result->fetch_assoc())
         {

         $mobile_phone = $row['mobile_area_code'] ." " .$row['mobile_number'];

         $identity_front =  $row['identity_front_name'];
         $identity_back =  $row['identity_back_name'];


         $identity_number = $row['id_document_number'];


         $identity_front_name = str_replace($identity_front,$identity_number,$identity_front);
         $identity_front_name = $identity_front_name .".front";
         
         $identity_front_data =  "data:image/jpeg;base64," .base64_encode($row['identity_front_data'])." ";
 

         $identity_back_name = str_replace($identity_back,$identity_number,$identity_back);
         $identity_back_name = $identity_back_name .".back";
         

         $identity_back_data = "data:image/jpeg;base64," .base64_encode($row['identity_back_data'])  ." ";


   
         // check account type 

 
          if ($row['account_type'] == 'block' )
               {
                $acc_condition1 = 'checked';
                $acc_condition2 = '';
                }


         else if ($row['account_type'] == 'active' )
               {
                $acc_condition1 = '';
                $acc_condition2 = 'checked';
                }





   echo"

    <table cellpadding='0' cellspacing='0' border='0'>

      <tbody>
        <tr>
          <td> {$row['lastname']} </td>
          <td> {$row['firstname']} </td>  
          <td> {$row['date_of_birth']} </td>
          <td> {$row['id_document_number']} </td>
          <td> $mobile_phone </td>
          <td>
        


         <a href='".$identity_front_data."' target='_blank'> $identity_front_name </a>



          </td>

         
 
          <td>
       
  <a href='$identity_back_data' target='_blank'> $identity_back_name </a>

         </td>


         <td> 
        
        _________{$row['account_type']}_________

        <form action='' method='post'>
         <input type='hidden' name='lastname_account_condition' value='{$row['lastname']}'>
         <input type='hidden' name='firstname_account_condition' value='{$row['firstname']}'>
         <input type='hidden' name='account_no' value='{$row['account_number']}'>
         <input type='hidden' name='account_iban' value='{$row['IBAN']}'>
         <input type='hidden' name='id_account_condition' value='{$row['id']}'>
         <input type='radio' name='account_condition' value='block' $acc_condition1> Block 
         <input type='radio' name='account_condition' value='active' $acc_condition2> Active  
         <input type='submit' name='submit_account_condition' value='Enter' style='color:black;'>
       </form> 

         </td> 

        </tr>
      </tbody>
</section>";


       } // end while of table

 

         if (isset($_POST['submit_account_condition']))
            {

             $lastname_account_condition = $_POST['lastname_account_condition'];
             $firstname_account_condition = $_POST['firstname_account_condition'];
             $id_account_condition = $_POST['id_account_condition'];
             $account_no = $_POST['account_no'];
             $account_iban = $_POST['account_iban'];
             $account_condition = $_POST['account_condition'];

             $sql_account_condition = "update customers set account_type = '$account_condition' 
                                       where id = '$id_account_condition'
                                       and firstname = '$firstname_account_condition'
                                       and lastname = '$lastname_account_condition'
                                       and account_number = '$account_no' and IBAN = '$account_iban' ";
             $result_account_condition = $conn->query($sql_account_condition);



             

      if ($result_account_condition == true)
           {

       $sql_account_statment = "update accounts set account_statement = '$account_condition'
                                where account_no = '$account_no' and IBAN = '$account_iban'
                       and lastname = '$lastname_account_condition' and firstname = '$firstname_account_condition'";
     $result_account_statment = $conn->query($sql_account_statment);

      echo "<script type='text/javascript'>alert('Account $lastname_account_condition $firstname_account_condition is $account_condition');
                   </script>";
                 echo ("<script>location.href='identification.php'</script>");
                   }


             }



      } // end else of data table


    } // end of else for check connect to database


   } // end of class exists
 
    
  
   }  // end fo else for session login



?>





<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
//# sourceURL=pen.js
</script>


</body>
</html>
