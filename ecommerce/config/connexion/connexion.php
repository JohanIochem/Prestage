<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=authentification","user","password");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }

?>