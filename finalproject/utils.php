<?php 
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
?>

 <?php
  function calc_age($dateOfBirth){
	$today = date("Y-m-d");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    return($diff->format('%y'));
 }	
 ?>
