<?php
   // define database related variables
   $database = 'epiz_20062280_login';
   $host = 'sql304.epizy.com';
   $user = 'epiz_20062280';
   $pass = '4htbcx37';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

   if(!$dbh){

      echo "unable to connect to database";
   }
   
?>