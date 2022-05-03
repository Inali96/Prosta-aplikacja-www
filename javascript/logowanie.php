<?php

   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $login = mysqli_real_escape_string($db,$_POST['login']);
      $haslo = mysqli_real_escape_string($db,$_POST['haslo']); 
      
      $sql = "SELECT id FROM uzytkownicy WHERE login = '$login' and haslo = '$haslo'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);


		
      if($count == 1) {
         $_SESSION['login']= $login;
      
         
         header("location: zalogowano.html");
      }else {
          header("location: error.php");

      }
   }