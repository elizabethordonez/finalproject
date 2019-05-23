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
						<option value="">Gender</option>
						<option value="Male" <?php if($gender=="Male") echo(" selected");?>>Male</option>
						<option value="Female" <?php if($gender=="Female") echo(" selected");?>>Female</option>
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
					<input type="text" class="form-control" id="" name="date_of_birth" placeholder="MM/DD/YYYY" readonly="readonly" value="<?php echo $date_of_birth; ?>">
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
						    <select class="form-control" id="citizenship" name="citizenship">
								<option value="">Citizenship</option>
									<?php
										$row;
										$STH = $DBH->query('SELECT country_name,country_id FROM country;');
										$rows = $STH -> fetchAll();
										foreach ($rows as $row){ 
									?> 
										<option value="<?php echo $row['country_id'];?>"<?php if($row['country_id']==$citizenship){echo 'selected';} ?>><?php echo $row['country_name']; ?></option>
									<?php }; ?>
							</select>
							<span class="help-block" style="color:red"><?php echo $citizenship_err;?></span>
				</div>
				<div class="form-group col-md-4">
					<label for="country_of_residence">Country of residence</label>
						    <select class="form-control" id="country_of_residence" name="country_of_residence">
								<option value="">Residence</option>
									<?php
										$row;
										$STH = $DBH->query('SELECT country_name,country_id FROM country;');
										$rows = $STH -> fetchAll();
										foreach ($rows as $row){ 
									?> 
										<option value="<?php echo $row['country_id'];?>"<?php if($row['country_id']==$country_of_residence){echo 'selected';} ?>><?php echo $row['country_name']; ?></option>
									<?php }; ?>
							</select>
							<span class="help-block" style="color:red"><?php echo $ctyofres_err;?></span>
				</div>
				<div class="form-group col-md-4">
					<label for="language">First language</label>
						<select name="language" class="form-control" id="language">
								<option value="">Language</option>
									<?php
										$row;
										$STH = $DBH->query('SELECT language_name,language_id FROM language;');
										$rows = $STH -> fetchAll();
										foreach ($rows as $row){ 
									?> 
										<option value="<?php echo $row['language_id'];?>"<?php if($row['language_id']==$language){echo 'selected';} ?>><?php echo $row['language_name']; ?></option>
									<?php }; ?>
						</select>
						<span class="help-block" style="color:red"><?php echo $lang_err;?></span>
				</div>
			</div>	
		</div>
		<div class="container-fluid">
			<div class="form-row">
				<div class="form-group col-md-4">
					<label for="civil_status">Civil status</label>
					<select name="civil_status" class="form-control" id="civil_status">
						<option value="">Civil status</option>
							<?php
								$row;
								$STH = $DBH->query('SELECT civil_status_desc,civil_status_id FROM civil_status;');
								$rows = $STH -> fetchAll();
								foreach ($rows as $row){ 
							?> 
								<option value="<?php echo $row['civil_status_id'];?>"<?php if($row['civil_status_id']==$civil_status){echo 'selected';} ?>><?php echo $row['civil_status_desc']; ?></option>
							<?php }; ?>
					</select>
					<span class="help-block" style="color:red"><?php echo $civilstat_err;?></span>
				</div> 
				<div class="form-group col-md-4">
					<label for="education">Highest level of education</label>
					<select name="education" class="form-control" id="education">
						<option value="">Education</option>
							<?php
								$row;
								$STH = $DBH->query('SELECT education_level_desc,education_id FROM education_level;');
								$rows = $STH -> fetchAll();
								foreach ($rows as $row){ 
							?> 
								<option value="<?php echo $row['education_id'];?>"<?php if($row['education_id']==$education){echo 'selected';} ?>><?php echo $row['education_level_desc']; ?></option>
							<?php }; ?>
					</select>
					<span class="help-block" style="color:red"><?php echo $educ_err;?></span>
				</div>
				<div class="form-group col-md-4">
					<label for="ielts_65">Do you have an IELTS 6.5?</label>
					<select id="ielts_65" class="form-control" name="ielts_65">
						<option value="">IELTS 6.5</option>
						<option value="N" <?php if($ielts_65=="N") echo(" selected");?>> N</option>
						<option value="Y" <?php if($ielts_65=="Y") echo(" selected");?>> Y</option>
					</select>
					<span class="help-block" style="color:red"><?php echo $ielts_err;?></span>
				</div>						
			</div>
		</div>
		<div class="container-fluid">
			<div class="form-group col-md-4">
				<label for="money_scale">Annual budget to come to Canada</label>
					<select name="money_scale" class="form-control" id="money_scale">
						<option value="">Annual budged</option>
							<?php
								$row;
								$STH = $DBH->query('SELECT minimum_quantity, maximum_quantity,money_scale_id FROM money_scale;');
								$rows = $STH -> fetchAll();
								foreach ($rows as $row){ 
							?> 
								<option value="<?php echo $row['money_scale_id'];?>"<?php if($row['money_scale_id']==$money_scale){echo 'selected';} ?>><?php echo 'CAD$ '.$row['minimum_quantity'] . ' - ' .$row['maximum_quantity'] ; ?></option>
							<?php }; ?>
					</select>
					<span class="help-block" style="color:red"><?php echo $money_err;?></span>
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