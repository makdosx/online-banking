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



 // if (isset($_GET['i_code_send'])) 
      //{

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

           $length_code = 4;
           $i_code = substr(str_shuffle("123456789"),0, $length_code);
 
     
           $sql = "update accounts set i_code = '$i_code', i_code_time = NOW() where email = '$email'";
           $result = $conn->query($sql);


       if ($result == true)
           {                    
   

/*
 // send pin to email //

// Include and initialize phpmailer class
require '/var/www/easybank/mail/PHPMailerAutoload.php';
$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = '';
$mail->Password = '';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('Easybank', 'Easybank');

// Add a recipient
$mail->addAddress($email);

// Add cc or bcc 
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Email subject
$mail->Subject = 'Easybank pin code';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = "<h3> <font color='grey'>  
                   Mr,s $email your i_code for the confirm transaction is: </font> 
                   $i_code 
                </h3>";
$mail->Body = $mailContent;


     // Send email
           if(!$mail->send())
               {
                echo '<script type="text/javascript">alert("i_code error. Please try again.");
                </script>';
                 exit;
                 }

               
                else
                  {

           echo '<script type="text/javascript">alert("Chech your mail for i_code");
                </script>';
            //echo ("<script>location.href='transf_easy_bank.php?ok=true'</script>");
               
                   // $_SESSION['i_code_end'] = $i_code;

                    echo ("<script>location.href='transf_anyone_bank.php?i_code_one'</script>");

                          }  

*/



$msg = " Mr,s $email your i_code for the confirm transaction is: $i_code ";

$headers = "";
$headers .= "From: Easybank <easybank@easybank.no-reply> \r\n";
$headers .= "Reply-To:" . $email . "\r\n" ."X-Mailer: PHP/" . phpversion();
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$send = mail("$email","Easybank",$msg,$headers);

     if(!$send)
               {
                echo '<script type="text/javascript">alert("i_code error. Please try again.");
                </script>';
            echo ("<script>location.href='transf_anyone_bank.php'</script>");
                 }

               
                else
                  {

              echo '<script type="text/javascript">alert("Chech your mail for i_code");
                </script>';
                  echo ("<script>location.href='transf_anyone_bank.php?i_code_one'</script>");

                          }  


                      } // end of result



                   else
                     { 
                      exit;
                       }



               } // end of else for connect



            } // end of if for calss exists


       // } // end of if isset get i_code


    } // end of else session login

?>
