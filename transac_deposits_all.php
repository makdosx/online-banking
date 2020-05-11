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

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title> Easybank </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="shortcut icon" href="favicon.png" type="image/png">

<style>

.panel-body
{
background: transparent;
display: inline-block;
overflow-y: scroll;
max-height:600px;
width: 98%;
}

table
{
table-layout:fixed;
}




th
{
background-color: #D4EDDA;
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

</body>
</html>




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

          $q = $_GET['q'];

      
        if (strpos($q, 'EB') !== false) 
              {
      
        $sql = "select date_transfer, _from_customer_lastname, _from_customer_firstname, 
                  _from_customer_IBAN, _to_customer_lastname, _to_customer_firstname,
                  _to_customer_IBAN, transaction_number, amount                 
                  from transactions_anyone_bank 
                  where  _from_customer_IBAN = '".$q."' 
                  order by date_transfer desc";
        $result = $conn->query($sql);


   
      echo '<div class="panel-body table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="text-center"> Date Transfer </th>
              <th class="text-center"> From Customer </th>
              <th class="text-center"> From Customer IBAN </th>
              <th class="text-center"> To Customer </th>
              <th class="text-center"> To Customer IBAN </th>
              <th class="text-center"> Transaction Number </th>
              <th class="text-center"> Amount </th>
            </tr>
          </thead></table></div>';




       while ($row = $result->fetch_assoc())
             { 

         echo "<div class='panel-body table-responsive'>
               <table class='table table-hover'>
               <tbody>
            <tr class='edit' id='detail'>

              <td class='text-center'> 
                {$row['date_transfer']}
              </td>

              <td class='text-center'> 
                {$row['_from_customer_lastname']} {$row['_from_customer_firstname']} 
              </td>

              <td class='text-center'> 
                {$row['_from_customer_IBAN']} 
              </td>

              <td class='text-center'> 
                {$row['_to_customer_lastname']} {$row['_to_customer_firstname']} 
              </td>

              <td class='text-center'>
                {$row['_to_customer_IBAN']}
              </td>

              <td class='text-center'> 
               {$row['transaction_number']} 
              </td>

              <td class='text-center'> 
               {$row['amount']} &euro;
              </td>

            </tr>
          </tbody></div>";
      


         } // end of while


         echo '<table>
              </div>';  



           echo '<div align="center"> 
               <a href="transac_export_anyone_bank.php">  
                Export Transactions All Banks
               </a> 
             </div>';



          }// end of iban








     
      else  if (strpos($q, 'All') !== false) 
              {

         
          $sql2 = "select account_no, IBAN from accounts where email = '".$_SESSION['login']."'";
          $result2 = $conn->query($sql2); 
          $row2 = $result2->fetch_assoc();
          

          $account_no2 = $row2['account_no'];
          $IBAN2       = $row2['IBAN'];


         $sql3 = "select date_transfer, _from_customer_lastname, _from_customer_firstname, 
                  _from_customer_accno_iban, _to_customer_lastname, _to_customer_firstname,
                  _to_customer_accno_iban, transaction_number, amount                 
                  from transactions_all 
                  where  _from_customer_accno_iban = '$account_no2' or _from_customer_accno_iban = '$IBAN2'
                  order by date_transfer desc";
         $result3 = $conn->query($sql3);


         
      echo '<div class="panel-body table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="text-center"> Date Transfer </th>
              <th class="text-center"> From Customer </th>
              <th class="text-center"> From Customer ACC.NO/IBAN </th>
              <th class="text-center"> To Customer </th>
              <th class="text-center"> To Customer ACC.NO/IBAN </th>
              <th class="text-center"> Transaction Number </th>
              <th class="text-center"> Amount </th>
            </tr>
          </thead></table></div>';



       while ($row3 = $result3->fetch_assoc())
             { 

         echo "<div class='panel-body table-responsive'>
               <table class='table table-hover'>
               <tbody>
            <tr class='edit' id='detail'>

              <td class='text-center'> 
                {$row3['date_transfer']}
              </td>

              <td class='text-center'> 
                {$row3['_from_customer_lastname']} {$row3['_from_customer_firstname']} 
              </td>

              <td class='text-center'> 
                {$row3['_from_customer_accno_iban']} 
              </td>

              <td class='text-center'> 
                {$row3['_to_customer_lastname']} {$row3['_to_customer_firstname']} 
              </td>

              <td class='text-center'>
                {$row3['_to_customer_accno_iban']}
              </td>

              <td class='text-center'> 
               {$row3['transaction_number']} 
              </td>

              <td class='text-center'> 
               {$row3['amount']} &euro;
              </td>

            </tr>
          </tbody></div>";
      


         } // end of while



         echo '<table>
              </div>';  


               echo '<div align="center"> 
               <a href="transac_export_all_banks.php">  
                Export Transactions All Banks
               </a> 
             </div>';


         } // end of all transactions








         else
           {
      
         $sql4 = "select date_transfer, _from_customer_lastname, _from_customer_firstname, 
                  _from_customer_account_no, _to_customer_lastname, _to_customer_firstname,
                  _to_customer_account_no, transaction_number, amount                 
                  from transactions_easy_bank 
                  where  _from_customer_account_no = '".$q."'
                  order by date_transfer desc";
         $result4 = $conn->query($sql4);


   
      echo '<div class="panel-body table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th class="text-center"> Date Transfer </th>
              <th class="text-center"> From Customer </th>
              <th class="text-center"> From Account No </th>
              <th class="text-center"> To Customer </th>
              <th class="text-center"> To Account No </th>
              <th class="text-center"> Transaction Number </th>
              <th class="text-center"> Amount </th>
            </tr>
          </thead></table></div>';




       while ($row4 = $result4->fetch_assoc())
             { 

         echo "<div class='panel-body table-responsive'>
               <table class='table table-hover'>
               <tbody>
            <tr class='edit' id='detail'>

              <td class='text-center'> 
                {$row4['date_transfer']}
              </td>

              <td class='text-center'> 
                {$row4['_from_customer_lastname']} {$row4['_from_customer_firstname']} 
              </td>

              <td class='text-center'> 
                {$row4['_from_customer_account_no']} 
              </td>

              <td class='text-center'> 
                {$row4['_to_customer_lastname']} {$row4['_to_customer_firstname']} 
              </td>

              <td class='text-center'>
                {$row4['_to_customer_account_no']}
              </td>

              <td class='text-center'> 
               {$row4['transaction_number']} 
              </td>

              <td class='text-center'> 
               {$row4['amount']} &euro;
              </td>

            </tr>
          </tbody></div>";
      


         } // end of while


         echo '<table>
              </div>';  

     
           echo '<div align="center"> 
               <a href="transac_export_easy_bank.php">  
                Export Transactions All Banks
               </a> 
             </div>';

          }// end of account






         } // end of else connect


        $conn->close();


    } // end of if class connect exists



?>
