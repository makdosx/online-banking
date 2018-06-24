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


require('fpdf/fpdf.php');
$pdf = new FPDF();
//$pdf->AddPage();
$pdf->addPage("P", "A3");
$pdf->GetPageWidth();  // Width of Current Page
$pdf->GetPageHeight(); // Height of Current Page


$image="logo_pdf.jpg";
$pdf-> Image('images/'.$image,10,5,60,50);
$pdf->SetFont('Arial','',20);
$pdf->Cell(280,12,"Easy Bank: https://easybank.com",0,0,TRUE);
$pdf->Ln();
$pdf->Cell(280,12,"Country: Greece",0,0,TRUE);
$pdf->Ln();
$pdf->Cell(280,12,"Location: Mesolongi",0,0,TRUE);
$pdf->Ln();
$pdf->Cell(280,12,"Phone number: 6976829275",0,0,TRUE);
$pdf->Ln(5);


$pdf->SetFont('Arial','B',10);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('times','B',10);
$pdf->SetFillColor(230,230,230); // edw kathorizeis to xrwma
$pdf->Cell(280,12,"All Transactions From Anyone Bank",1,0,'C',TRUE);
$pdf->Ln(); // afhnei mia grammh keno kai paei apo katw
// edw vazeis platos,upsos,onoma,border w,0h,kai true gia na parei to xrwma



$pdf->Cell(35,15,"Date Transfer",1,0,'C',TRUE); 
$pdf->Cell(40,15,"From Customer",1,0,'C',TRUE);
$pdf->Cell(53,15,"From Customer IBAN",1,0,'C',TRUE);
$pdf->Cell(40,15,"To Customer",1,0,'C',TRUE);
$pdf->Cell(53,15,"To Customer IBAN",1,0,'C',TRUE);
$pdf->Cell(35,15,"Transaction Number",1,0,'C',TRUE);
$pdf->Cell(24,15,"Amount",1,0,'C',TRUE);
$pdf->Ln();




        //$email = $_SESSION['login'];

        
         $sql = "select IBAN from accounts where email = '".$_SESSION['login']."'";
         $result = $conn->query($sql); 
         $row = $result->fetch_assoc();
          
         $IBAN       = $row['IBAN'];


         $sql2 = "select date_transfer, _from_customer_lastname, _from_customer_firstname, 
                  _from_customer_IBAN, _to_customer_lastname, _to_customer_firstname,
                  _to_customer_IBAN, transaction_number, amount                 
                  from transactions_anyone_bank 
                  where  _from_customer_IBAN = '$IBAN' 
                  order by date_transfer desc";
         $result2 = $conn->query($sql2);


        while($row2=$result2->fetch_assoc())
            {



            $nbsp = "&nbsp;";
            $euro = "&euro;";
            $date_transfer = $row2['date_transfer'];
            $_from_customer_lastname = $row2['_from_customer_lastname'];
            $_from_customer_firstname = $row2['_from_customer_firstname']; 
            $_from_customer_all_name = $_from_customer_lastname .$_from_customer_firstname;
            $_from_customer_iban = $row2['_from_customer_IBAN'];
            $_to_customer_lastname = $row2['_to_customer_lastname'];
            $_to_customer_firstname = $row2['_to_customer_firstname'];
            $_to_customer_all_name = $_to_customer_lastname .$_to_customer_firstname;
            $_to_customer_iban = $row2['_to_customer_IBAN'];
            $transaction_number = $row2['transaction_number'];
            $amount = $row2['amount'];

 
            $pdf->Cell(35,10,$date_transfer,1);
            $pdf->Cell(40,10,$_from_customer_all_name,1);
            $pdf->Cell(53,10,$_from_customer_iban,1); 
            $pdf->Cell(40,10,$_to_customer_all_name,1);
            $pdf->Cell(53,10,$_to_customer_iban,1); 
            $pdf->Cell(35,10,$transaction_number,1);
            $pdf->Cell(24,10,$amount,1); 
            $pdf->Ln();
     
        }

   $pdf->Output(); 
  



   /*
    duo eidh eksodou pdf

   $pdf->Output('D','all_transactions.pdf'); //eksodos kateutheian me onoma

  $pdf->Output(); // edw anoigo vlewpw kai meta katevazw kai allazw onoma 

   */


   } // end of else connect


   $conn->close();


   } // end of id class exists


 } // end of else session


?>
