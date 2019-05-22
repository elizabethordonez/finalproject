<?php
	include("config.php");
	include("insert_applicant.php");
	include("header.php");


?>

	<div class="jumbotron">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<div class="container-fluid">
			<div class="form-row">
				<div class="form-group col-xs-4 <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" class="form-control" maxlength="30" id="first_name" placeholder="First Name" value="<?php echo $first_name; ?>">
					<span class="help-block" style="color:red"><?php echo $name_err;?></span>
				</div>
				<div class="form-group col-xs-4 <?php echo (!empty($lname_err)) ? 'has-error' : ''; ?>">
					<label for="last_name">Last Name</label>
					<input type="text" name="last_name" class="form-control" maxlength="30" id="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>">
					<span class="help-block" style="color:red"><?php echo $lname_err;?></span>
				</div>
				<div class="form-group col-md-4 <?php echo (!empty($gender_err)) ? 'has-error' : ''; ?>" >
					<label for="gender">Gender</label>
					<select id="gender" class="form-control" name="gender">
						<option value="" disabled selected>Select your option</option>
						<option>Male</option>
						<option>Female</option>
					</select>
					<span class="help-block" style="color:red"><?php echo $gender_err;?></span>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="form-row">
				<div class="form-group col-xs-2 <?php echo (!empty($bdate_err)) ? 'has-error' : ''; ?>">
					<label for="date_of_birth">Date of Birth</label>
						<script>
							$( function() {
								$( 'input[name="date_of_birth"]' ).datepicker();
							} );
						</script>
					<input type="text" class="form-control" id="" name="date_of_birth" placeholder="Please select a date" readonly="readonly" value="<?php echo $date_of_birth; ?>">
					<span class="help-block" style="color:red"><?php echo $bdate_err;?></span>
				</div>
				<div class="form-group col-md-6 <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" maxlength="50" id="email" placeholder="Email" value="<?php echo $email; ?>">
				<span class="help-block" style="color:red"><?php echo $email_err;?></span>
				</div>
				<div class="form-group col-xs-4 <?php echo (!empty($phone_err)) ? 'has-error' : ''; ?>">
					<label for="phone">Phone number</label>
					<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number" value="<?php echo $phone; ?>" >
					<span class="help-block" style="color:red"><?php echo $phone_err;?></span>
				</div>

			</div>
		</div>
		<div class="container-fluid">
			<div class="form-row">
				<div class="form-group col-md-4" <?php echo (!empty($citizenship_err)) ? 'has-error' : ''; ?> >
					<label for="citizenship">Country of citizenship</label>
						<select name="citizenship" class="form-control">
							<?php
								$row;
								$STH = $DBH->query('SELECT country_name,country_id FROM country;');
								$rows = $STH -> fetchAll();
								foreach ($rows as $row) {
									echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
								}
							?>
						</select>
						<span class="help-block" style="color:red"><?php echo $citizenship_err;?></span>
				</div>
				<div class="form-group col-md-4">
					<label for="country_of_residence">Country of residence</label>
						<select name="country_of_residence" class="form-control">
							<?php
								$row;
								$STH = $DBH->query('SELECT country_name,country_id FROM country;');
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
								$STH = $DBH->query('SELECT language_name, language_id FROM language;');
								$rows = $STH -> fetchAll();									
								foreach ($rows as $row) {
									echo '<option value="'.$row['language_id'].'">'.$row['language_name'].'</option>';
								}
							?>
						</select>
				</div>
			</div>	
		</div>
		<div class="container-fluid">
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="civil_status">Civil status</label>
					<select name="civil_status" class="form-control">
						<?php
							$row;
							$STH = $DBH->query('SELECT civil_status_desc, civil_status_id FROM civil_status;');
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
							$STH = $DBH->query('SELECT education_level_desc, education_id FROM education_level;');
							$rows = $STH -> fetchAll();									
							foreach ($rows as $row) {
								echo '<option value="'.$row['education_id'].'">'.$row['education_level_desc'].'</option>';
							}
						?>
					</select>
				</div>
				<div class="form-group col-md-4">
					<label for="ielts_65">Do you have an IELTS 6.5?</label>
					<select id="ielts_65" class="form-control" name="ielts_65">
						<option>Y</option>
						<option>N</option>
					</select>
				</div>						
			</div>
		</div>
		<div class="container-fluid">
			<div class="form-group col-md-4">
				<label for="money_scale">Annual budget to come to Canada</label>
					<select name="money_scale" class="form-control">
						<?php
							$row;
							$STH = $DBH->query('SELECT minimum_quantity, maximum_quantity,money_scale_id FROM money_scale;');
							$rows = $STH -> fetchAll();									
							foreach ($rows as $row) {
								echo '<option value="'.$row['money_scale_id'].'">'.'CAD$ '.$row['minimum_quantity'].' - '.$row['maximum_quantity'].'</option>';
							}
						?>
					</select>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10 text-right">
 					<button type="submit" name="submit" class="btn btn-primary" value="Submit">Submit</button>
				</div>
				<div class="col-md-2 text-right">
					<button type="reset" name="reset" class="btn btn-default" value="Reset">Reset</button>
				</div>
			</div>
		</div>
		
	</form>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>