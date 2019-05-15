<?php
class Applicant{
	public $applicant_id;
	public $first_name;
	public $last_name;
	public $date_of_birth;
	public $email;
	public $phone;
	public $citizenship;
	public $country_of_residence;
	public $gender;
	public $language_id;
	public $civil_status_id;
	public $education_id;
	public $ielts_65;
	public $money_scale_id;
	
	function _construct($applicant_id='',$first_name='',$last_name='',$date_of_birth='',
						$email='',$phone='',$citizenship='',$country_of_residence='',
						$gender='',$language_id='',$civil_status_id='',$education_id='',
						$ielts_65='',$money_scale_id=''){
							
		this-> applicant_id = $applicant_id;
		this-> first_name = $first_name;
		this-> last_name = $last_name;
		this-> date_of_birth = $date_of_birth;
		this-> email = $email;
		this-> phone = $phone;
		this-> citizenship = $citizenship;
		this-> country_of_residence = $country_of_residence;
		this-> gender = $gender;
		this-> language_id = $language_id;
		this-> civil_status_id = $civil_status_id;
		this-> education_id = $education_id;
		this-> ielts_65 = $ielts_65;
		this-> money_scale_id = $money_scale_id;

	}
}



?>