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


    class SECURE_INPUT_DATA
    { 
    
      public function SECURE_DATA_ENTER($data)
        {
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = trim($data);
        $data = stripslashes($data);  
        $data = stripcslashes ($data);
          if ($data == true)
           {
          return ($data);
            }          
          else
            {
            return (!$data); //.trigger_error("Data was not be send safe");
             }
         } 

    
      } // end fo class SECURE_INPUT_DATA
      
      


  class SECURE_INPUT_DATA_AVAILABLE extends SECURE_INPUT_DATA
    { 
    
      public function SECURE_DATA_ENTER($data)
        {
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = trim($data);
        $data = stripslashes($data);  
        $data = stripcslashes ($data);
          if ($data == true)
           {
          return ($data);
            }          
          else
            {
            return (!$data); //.trigger_error("Data was not be send safe");
             }
         } 
    
      } // end fo class SECURE_INPUT_DATA_AVAILABLE


?>
