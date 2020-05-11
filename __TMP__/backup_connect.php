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

 class DATABASE_CONNECT_BACKUP
 {

 public $connect = array();
 public $connect_db1 = array();
 public $connect_db2 = array();

 public function __construct()
 {

  $this->connect[0] = "localhost";
  $this->connect[1] = "easybank";
  $this->connect[2] = "easybank";

  $this->connect_db1[0] = "localhost";
  $this->connect_db1[1] = "easybank";
  $this->connect_db1[2] = "easybank";
  $this->connect_db1[3] = "easybank";

  $this->connect_db2[0] = "localhost";
  $this->connect_db2[1] = "easybank";
  $this->connect_db2[2] = "easybank";
  $this->connect_db2[3] = "easybank_2";
  
  }



public function __destruct()
  {

  $this->connect[0] = null;
  $this->connect[1] = null;
  $this->connect[2] = null;

  $this->connect_db1[0] = null;
  $this->connect_db1[1] = null;
  $this->connect_db1[2] = null;
  $this->connect_db1[3] = null;

  $this->connect_db2[0] = null;
  $this->connect_db2[1] = null;
  $this->connect_db2[2] = null;
  $this->connect_db2[3] = null;

   }


  }

?>

