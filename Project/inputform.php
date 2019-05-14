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
						  <label for="inputFirstName">First Name</label>
						  <input type="text" class="form-control" maxlength="30" id="inputFirstName" placeholder="First Name">
						</div>
						<div class="form-group col-xs-4">
						  <label for="inputLastName">Last Name</label>
						  <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
						</div>
						<div class="form-group col-md-4">
							<label for="inputState">Gender</label>
							<select id="inputState" class="form-control">
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
					</div>
				
					<div class="form-row">
						<div class="form-group col-xs-3">
						  <label for="dateBirth">Date of Birth</label>
						  <input type="text" class="form-control" id="inputDateBirth" placeholder="Date of Birth">
						</div>
						<div class="form-group col-md-6">
							<label for="inputEmai">Email</label>
							<input type="email" class="form-control" maxlength="50" id="inputEmai" placeholder="Email">
						</div>
						<div class="form-group col-xs-3">
						  <label for="inputPhone">Phone number</label>
						  <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
						 </div>
					</div>
					
					


					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputCitizen">Country of citizenship</label>
								<select name="countryName" class="form-control">
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
							<label for="inputResidence">Country of residence</label>
								<select name="countryName" class="form-control">
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
							<label for="inputLanguage">First language</label>
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
							<label for="inputCivil">Civil status</label>
								<select name="civilStatus" class="form-control">
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
							<label for="inputCivil">Highest level of education</label>
								<select name="levelEducation" class="form-control">
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
							<label for="inputIelts">Do you have an IELTS 6.5</label>
							<select id="inputIelts" class="form-control">
								<option>Y</option>
								<option>N</option>
							</select>
						</div>
						<div class="form-group col-md-4">
							<label for="inputCivil">Annual budget to come to Canada</label>
								<select name="levelMoney" class="form-control">
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

				  <button type="submit" class="btn btn-primary">Summit</button>
			</form>
		</div>
		</div>
	</div>

	
  </body>
</html>
