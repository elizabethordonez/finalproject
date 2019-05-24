<?php

include "config.php";
include ("utils.php");
	
// Prepare a select statement
$sql = "SELECT * FROM applicant WHERE applicant_id = :applicant_id";
    
	if($stmt = $DBH->prepare($sql)){
		$stmt->bindParam(":applicant_id", $param_id);
        $param_id = trim($_GET["applicant_id"]);
        if($stmt->execute()){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $date_of_birth = $row["date_of_birth"];
			$ielts_65 = $row["ielts_65"];
			$money_scale = $row["money_scale"];
			$age = calc_age($date_of_birth);
			if (($age < 38) && ($money_scale > 1) && ($ielts_65 ='Y')){
				$visa='Student';
			}else {
				$visa='Tourist';
			}
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    unset($stmt);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Answer for Visaprocess</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>
<body>
  <body>
	<div class="container-fluid">
		<div class="jumbotron">
			<image src="logo.png" class="img-fluid" alt="Responsive image">
				<br><br><br>
				<h2> Dear Mr./Mrs. <?php echo $row["first_name"] . ' ' . $row["last_name"]; ?> </h2>
				<br><br>
				
				<p> Thank you for contact us</p> 
				<br>
				<p> After carefully reviewing your assessment form, you qualified to obtain the <?php echo $visa; ?> visa.</p> 
				
 				<p>If you would like to know how we can help you to make this possible, please book an online consultation </p>
				
				
				<br><br><br>
				
				<div class="col-md-8 text-right"><a href="http://localhost/finalproject/index.php" class="btn btn-primary btn-lg active" role="button">Home</a></div>
				<div class="col-md-4 text-right"><a href="http://localhost/finalproject/calendar.php" class="btn btn-primary btn-lg active" role="button">Book your appointment</a></div>
		</div>
	</div>
	

	
  </body>
</html>				





