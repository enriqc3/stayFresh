<?php
session_start();
function get_connection(){
   static $connection;

   if (!isset($connection)){
      $connection=mysqli_connect('localhost', 'userName', 'Password', 'databaseName') or die(mysqli_connect_error());
   }
   if ($connection === false){
      $_SESSION["error"] "Unable to connect to database:"mysqli_connect_error();
   }
   return $connection;
}
?>