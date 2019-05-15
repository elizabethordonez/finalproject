<?php
	include("config.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Input form Visaprocess</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!--  jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

	<!-- Bootstrap Date-Picker Plugin -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
	<div class="container">
		<div class="jumbotron">
			<image src="logo.png" class="img-fluid" alt="Responsive image">
				<br><br><br>
				<form>
					<div class="form-row">
						<div class="form-group col-xs-4">
						  <label for="first_name">First Name</label>
						  <input type="text" name="first_name" class="form-control" maxlength="30" id="first_name" placeholder="First Name">
						</div>
						<div class="form-group col-xs-4">
						  <label for="last_name">Last Name</label>
						  <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
						</div>
						<div class="form-group col-md-4">
							<label for="gender">Gender</label>
							<select id="gender" class="form-control">
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
					</div>
				
					<div class="form-row">
						<div class="form-group col-xs-2">
						  <label for="date_of_birth">Date of Birth</label>
							<script>
								$(document).ready(function(){
								  var date_input=$('input[name="date_of_birth"]'); //our date input has the name "inputDateBirth"
								  // var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
								  var options={
									format: 'dd/mm/yyyy',
									// container: container,
									todayHighlight: true,
									autoclose: true,
								  };
								  date_input.datepicker(options);
								})
							</script>
							
						  <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="DD/MM/YYYY">
						</div>
						<div class="form-group col-md-6">
							<label for="inputEmail4">Email</label>
							<input type="email" class="form-control" maxlength="50" id="inputEmail4" placeholder="Email">
						</div>

						<div class="form-group col-xs-4">
						  <label for="phone">Phone number</label>
						  <input type="text" name="phone" class="form-control" id="ghone" placeholder="Phone">
						 </div>
					</div>
					
					


					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="citizenship">Country of citizenship</label>
								<select name="citizenship" class="form-control">
									<?php
										$row;
										$STH = $DBH->query('SELECT country_name FROM country;');
										$rows = $STH -> fetchAll();
										foreach ($rows as $row) {
										echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
									}
									?>
								</select>
						</div>
						<div class="form-group col-md-4">
							<label for="residence">Country of residence</label>
								<select name="residence" class="form-control">
									<?php
										$row;
										$STH = $DBH->query('SELECT country_name FROM country;');
										$rows = $STH -> fetchAll();
										foreach ($rows as $row) {
										echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
										}
									?>
								</select>
						</div>
						<div class="form-group col-md-4">
							<label for="language">First language</label>
								<select name="language" class="form-control">
									<?php
										$row;
										$STH = $DBH->query('SELECT language_name FROM language;');
										$rows = $STH -> fetchAll();									
										foreach ($rows as $row) {
										echo '<option value="'.$row['language_id'].'">'.$row['language_name'].'</option>';
										}
									?>
								</select>
						</div>
					</div>
  					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="civil_status">Civil status</label>
								<select name="civil_status" class="form-control">
									<?php
										$row;
										$STH = $DBH->query('SELECT civil_status_desc FROM civil_status;');
										$rows = $STH -> fetchAll();									
										foreach ($rows as $row) {
										echo '<option value="'.$row['civil_status_id'].'">'.$row['civil_status_desc'].'</option>';
										}
									?>
								</select>
						</div> 
						<div class="form-group col-md-4">
							<label for="education">Highest level of education</label>
								<select name="education" class="form-control">
									<?php
										$row;
										$STH = $DBH->query('SELECT education_level_desc FROM education_level;');
										$rows = $STH -> fetchAll();									
										foreach ($rows as $row) {
										echo '<option value="'.$row['education_id'].'">'.$row['education_level_desc'].'</option>';
										}
									?>
								</select>
						</div> 
					</div>
  					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="ielts_65">Do you have an IELTS 6.5?</label>
							<select id="ielts_65" class="form-control">
								<option>Y</option>
								<option>N</option>
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="money_scale">Annual budget to come to Canada</label>
								<select name="money_scale" class="form-control">
									<?php
										$row;
										$STH = $DBH->query('SELECT minimum_quantity, maximum_quantity FROM money_scale;');
										$rows = $STH -> fetchAll();									
										foreach ($rows as $row) {
										echo '<option value="'.$row['money_scale_id'].'">'.'CAD$ '.$row['minimum_quantity'].' - '.$row['maximum_quantity'].'</option>';
										}
									?>
								</select>
						</div>
						<div class="form-group col-md-4">
						</div>
					</div>	
					
				  
			</form>
			<button type="submit" name="submit" class="btn btn-primary">Summit</button>
		</div>
		</div>
	</div>

	
  </body>
</html>
