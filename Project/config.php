<?php
$host = 'localhost';
$dbname = 'visaprocess';
$user = 'root';
$pass = '';
try {
	# MySQL with PDO_MYSQL to connect to the database
	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	

}
catch(PDOException $e) {
echo $e->getMessage();
echo "I'm sorry. I'm afraid I can't do that.";
}
?>

