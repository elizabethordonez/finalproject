<?php
include("config.php");
include("utils.php");

$first_name = $last_name = $date_of_birth = $email = $phone = $citizenship = $gender = $country_of_residence = $language = $civil_status = $education = $ielts_65 = $money_scale = "";
$name_err = $lname_err = $bdate_err = $email_err = $phone_err = $citizenship_err = $gender_err = $ctyofres_err = $lang_err = $civilstat_err = $educ_err = $ielts_err = $money_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	//Validate first name
	if (empty($_POST["first_name"])){
		$name_err = "Please enter your first name";
	} else {
		$first_name = test_input($_POST["first_name"]);
		if (!preg_match("/^[a-zA-Z]*$/",$first_name)){
			$name_err = "Please enter a valid name.";
		}
	  }
	  
	//Validate last name
	if (empty($_POST["last_name"])){
		$lname_err = "Please enter your last name";
	} else {
		$last_name = test_input($_POST["last_name"]);
		if (!preg_match("/^[a-zA-Z]*$/",$last_name)){
			$lname_err = "Please enter a valid last name.";
		}
	  }
	  
	
	//Validate gender
	if (empty($_POST["gender"])){
        $gender_err = "Please choose your gender";
	}else {
		$gender = ($_POST["gender"]);
	}
	
	//Validate User pick a date
    if (empty($_POST["date_of_birth"])){
        $bdate_err = "Please your your date of birth";
	}else {
		$date_of_birth = ($_POST["date_of_birth"]);
	}
	
	//Validate email
    if (empty($_POST["email"])) {
        $email_err = "Email is required";
    }else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format"; 
        }else {
			$sql = "SELECT * FROM applicant WHERE email= '".$email."' AND first_name= '".$first_name."' AND last_name='".$last_name."'";
			$result = $DBH ->query($sql);
			if($result->rowCount() > 0){
				$email_err = "You have a previous evaluation, please enter a new email"; 
			}
			
		}
    }

	//Validate user enter a phone number
	$input_phone = trim($_POST["phone"]);
    if (empty($input_phone)){
        $phone_err = "Please enter your phone number";
	} else{
        $phone = $input_phone;
    }	
	
	//Validate citizenship
	if (empty($_POST["citizenship"])){
        $citizenship_err = "Please choose your citizenship";
	}else {
		$citizenship = ($_POST["citizenship"]);
	}
	
	//Validate country of residence
	if (empty($_POST["country_of_residence"])){
        $ctyofres_err = "Please choose your country of residence";
	}else {
		$country_of_residence = ($_POST["country_of_residence"]);
	}
	
	//Validate language
	if (empty($_POST["language"])){
        $lang_err = "Please choose your first language ";
	}else {
		$language = ($_POST["language"]);
	}	

	//Validate civil status
	if (empty($_POST["civil_status"])){
        $civilstat_err = "Please choose your civil status ";
	}else {
		$civil_status = ($_POST["civil_status"]);
	}

	//Validate level of education 
	if (empty($_POST["education"])){
        $educ_err = "Please choose your level of education ";
	}else {
		$education = ($_POST["education"]);
	}
	
	//Validate IELTS_65 
	if (empty($_POST["ielts_65"])){
        $ielts_err = "Please make a selection";
	}else {
		$ielts_65 = ($_POST["ielts_65"]);
	}	
	
	//Validate money scale 
	if (empty($_POST["money_scale"])){
        $money_err = "Please choose your annual budget";
	}else {
		$money_scale = ($_POST["money_scale"]);
	}

// = $citizenship_err = $gender_err = $ctyofres_err = $lang_err = $civilstat_err = $educ_err = $ielts_err = $money_err	

	if(empty($name_err) && empty($lname_err) && empty($bdate_err) && empty($email_err) && empty($phone_err) &&
	   empty($citizenship_err) && empty($gender_err) && empty($ctyofres_err) && empty($lang_err) && empty($civilstat_err) &&
		empty ($educ_err) && empty($ielts_err) && empty($money_err)){
		try{
			// Prepare an insert statement
			//(first_name, last_name, gender, date_of_birth, email, phone, citizenship, country_of_residence,  language_id, civil_status_id, education_id, ielts_65, money_scale_id) 
			//(:first_name, :last_name,:gender,:date_of_birth,:email, :phone, :citizenship, :country_of_residence, :language, :civil_status_id, :education_id, :ielts_65, :money_scale_id)";
		 
			
			$sql = "INSERT INTO applicant
					(first_name, last_name, gender, date_of_birth, email,phone,citizenship,country_of_residence,language,civil_status,education,ielts_65,money_scale) 
					VALUES 
					(:first_name,:last_name,:gender,str_to_date(:date_of_birth, '%m/%d/%Y'),:email,:phone,:citizenship,:country_of_residence,:language,:civil_status,:education,:ielts_65,:money_scale)";
			$stmt = $DBH->prepare($sql);
			
			// Bind parameters to statement
			$stmt->bindParam(':first_name', $_REQUEST['first_name'], PDO::PARAM_STR);
			$stmt->bindParam(':last_name', $_REQUEST['last_name'], PDO::PARAM_STR);
			$stmt->bindParam(':gender', $_REQUEST['gender'], PDO::PARAM_STR);
			$stmt->bindParam(':date_of_birth', $_REQUEST['date_of_birth'], PDO::PARAM_STR);
			$stmt->bindParam(':email', $_REQUEST['email'], PDO::PARAM_STR);
			$stmt->bindParam(':phone', $_REQUEST['phone'], PDO::PARAM_STR);
			$stmt->bindParam(':citizenship', $_REQUEST['citizenship'], PDO::PARAM_STR);
			$stmt->bindParam(':country_of_residence', $_REQUEST['country_of_residence'], PDO::PARAM_STR);
			$stmt->bindParam(':language', $_REQUEST['language'], PDO::PARAM_STR);
			$stmt->bindParam(':civil_status', $_REQUEST['civil_status'], PDO::PARAM_STR);
			$stmt->bindParam(':education', $_REQUEST['education'], PDO::PARAM_STR);
			$stmt->bindParam(':ielts_65', $_REQUEST['ielts_65'], PDO::PARAM_STR);
			$stmt->bindParam(':money_scale', $_REQUEST['money_scale'], PDO::PARAM_STR);
			
			
			// Execute the prepared statement
			if ($stmt->execute()){
				$applicant_id = $DBH->lastInsertId();
				echo ("Applicant ID: " . $applicant_id);
				header("location:answer.php?applicant_id=$applicant_id");
				exit();
			} else{
				echo "Something went wrong. Please try again later.";
			}
		} catch(PDOException $e){
			die("ERROR: Could not prepare/execute query: $sql. " . $e->getMessage());
		}
	}
		// Close statement
		unset($stmt);
}

 ?>