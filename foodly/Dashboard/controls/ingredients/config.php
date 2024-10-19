<?php
// set connection to dB
 // 1- define database and username and password
  define("mdb","mysql:host=localhost;dbname=foodly");
  define("username","root");
  define("pass","");
 $dbobj=new PDO(mdb,username,pass);
  
 ?>
