<?php
// $today = date("d/m/Y"); 
// $today_2 = date("F j, Y, g:i a"); 
// echo $today;
// echo '<br>';
// echo $today_2;

// set Session and Get Session
// Starting session 
session_start(); 
// Storing session data 	
$_SESSION["firstname"] = "Peter"; 	
$_SESSION["lastname"] = "Parker";

echo "firstname " . $_SESSION["firstname"] . ".<br>";
echo "lastname " . $_SESSION["lastname"] . ".";

?>