<?php

$imie=$_POST["imie"];
$login = $_POST["login"];
$haslo = $_POST["haslo"];

include("db.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO uzytkownicy (imie, login, haslo) VALUES ('".$imie."','".$login."','".$haslo."')";
if(mysqli_query($conn,$sql)){
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
header("Location: zarejestrowano.html");
mysqli_close($conn);

?>
