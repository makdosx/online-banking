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


   else
    {

session_start();

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




  if (isset($_POST['transfer_easy_bank'])) 
      {

error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);


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

            require_once('__SRC__/secure_data.php');

            if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
                {

              $obj_secure_data = new SECURE_INPUT_DATA;


             // get personal details from user


            $_to_customer_lastname     =   $obj_secure_data->SECURE_DATA_ENTER($_POST['lastname']);    
            $_to_customer_firstname    =   $obj_secure_data->SECURE_DATA_ENTER($_POST['firstname']);                  
            $_to_customer_account_no   =   $obj_secure_data->SECURE_DATA_ENTER($_POST['account_no']);
            $reason                    =   $obj_secure_data->SECURE_DATA_ENTER($_POST['reason']);
            $main_amount               =   $obj_secure_data->SECURE_DATA_ENTER($_POST['main_amount']);
            $secondary_amount          =   $obj_secure_data->SECURE_DATA_ENTER($_POST['secondary_amount']);
            $total_amount              =   $main_amount ."." .$secondary_amount;


              $length_number = 16;
              $transaction_number = substr(str_shuffle("0123456789"),0, $length_number);


              
              $sql = "select firstname, lastname, account_number from customers 
                      where email = '".$_SESSION['login']."' ";
              $result  = $conn->query($sql);
 
                   while ($row = $result->fetch_assoc())
                       {
            
                        $_from_customer_lastname = $row['lastname'];
                        $_from_customer_firstname = $row['firstname'];
                        $_from_customer_account_no = $row['account_number'];


                        $sql2 = "insert into transactions_easy_bank  
                                 (_from_customer_lastname, _from_customer_firstname, _from_customer_account_no,
                                 _to_customer_lastname, _to_customer_firstname, _to_customer_account_no,
                                  reason, transaction_number, amount)
                                   values  
                                  ('$_from_customer_lastname', '$_from_customer_firstname',
                                   '$_from_customer_account_no',
                                   '$_to_customer_lastname', '$_to_customer_firstname',
                                   '$_to_customer_account_no',
                                   '$reason', '$transaction_number', '$total_amount')";

                        $result2 = $conn->query($sql2);

                         
                       $sql3 = "insert into transactions_all  
                                 (_from_customer_lastname, _from_customer_firstname, _from_customer_accno_iban,
                                  _to_customer_lastname, _to_customer_firstname, _to_customer_accno_iban,
                                  reason, transaction_number, amount)
                                   values  
                                  ('$_from_customer_lastname', '$_from_customer_firstname',
                                   '$_from_customer_account_no',
                                   '$_to_customer_lastname', '$_to_customer_firstname',
                                   '$_to_customer_account_no',
                                   '$reason', '$transaction_number', '$total_amount')";

                        $result3 = $conn->query($sql3);

        

                           if ($result2 == true && $result3 == true)
                               {
                          echo '<script type="text/javascript">alert("This transfer was held successfully.");
                         </script>';
                        echo ("<script>location.href='transf_easy_bank.php'</script>");
                            exit;
                                }


                           //  } // end of big result


                           else
                             {
                             //exit;
                              echo "Error";
                               }
                
     
                       } // end of while
             


            
        



                   //else
                    // { 
                      //exit;
                       //}



                } // end of secure data input


               } // end of else for connect



            } // end of if for calss exists secure data


        } // end of if isset post transfer button


    } // end of else session login

 

?>
