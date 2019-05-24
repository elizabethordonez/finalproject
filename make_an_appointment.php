<?php
/** 
 * @author Mariocoski
 * @email mariuszrajczakowski@gmail.com 
 * @github https://github.com/mariocoski/Bootstrap-calendar
 * Copyright (c) 2015 Mariocoski
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
?>
<!DOCTYPE html>
<?php
  //path to config file
  //REMEMBER: set the correct path to init.php 
  require 'config/init.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Bootstrap Calendar by Mariocoski">
    <meta name="author" content="Mariocoski">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!--  jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
	<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
	
    <title>Mariocoski Bootstrap Calendar</title>

    <!-- Bootstrap core CSS -->
    <link href='<?php echo BOOTSTRAP_CSS; ?>bootstrap.css' rel='stylesheet'>
    <link href='<?php echo CSS; ?>calendar.css' rel='stylesheet'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
       <div class="container">
		<div class="row">
			<div class="col-md-12">

				 <div class="navbar-default">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						<a href class="navbar-left"><img class="small" src="logo.png" ></a>
				 </div>

                <div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navfont navbar-right">
						<li class="active text-body"><a href="http://www.cic.gc.ca/english/helpcentre/results-by-topic.asp?top=29">Express Entry</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Visa Type<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/visit-canada/about-visitor-visa.html">Visit</a></li>
								<li><a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/work-canada.html">Work</a></li>
								<li><a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/study-canada/study-permit/apply.html">Study</a></li>
							</ul>
						</li>
						<li><a href="http://www.cic.gc.ca/english/helpcentre/results-by-topic.asp?st=6.3">Business</a></li>
						<li><a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/family-sponsorship.html">Sponsorship</a></li>
					</ul>
                </div>

            </div>
 		</div>
	</div>
	<hr>
    <div class="container">
      <div class="row marg-top">  
       <?php 
       $timestamp = (isset($_GET['timestamp']) && is_numeric($_GET['timestamp']))? (int)$_GET['timestamp'] : "0";
       $calendar_id = (isset($_GET['calendar_id']) && is_numeric($_GET['calendar_id']))? (int)$_GET['calendar_id'] : "0";
       try{
         $db = new DB();
         $query_calendar = "SELECT * FROM `mariocoski_calendar` WHERE calendar_id=:calendar_id";
         $run_calendar = $db->prepare($query_calendar);
         $run_calendar->execute(array(":calendar_id"=>$calendar_id));
         $calendar_details = $run_calendar->fetchAll(PDO::FETCH_ASSOC); 
         
          $company_name = (isset($calendar_details[0]['company_name']))?  $calendar_details[0]['company_name']:"Company Name";
          $company_address = (isset($calendar_details[0]['address']))?  $calendar_details[0]['address']:"Street Name";
          $company_postcode = (isset($calendar_details[0]['postcode']))?  $calendar_details[0]['postcode']:"Postcode";
          $company_city = (isset($calendar_details[0]['city']))?  $calendar_details[0]['city']:"City";
          $company_country = (isset($calendar_details[0]['country']))?  $calendar_details[0]['country']:"Country";
          $company_website = (isset($calendar_details[0]['website']))?  $calendar_details[0]['website']:"www.example.com";
        
          
        }catch(PDOException $e){
         
       }catch(Exception $e){
       
       }
       ?>
      <div class="col-sm-4"> 
        <div class="panel panel-default panel-address panel-appointment-height">
              <div class="company-tag label label-primary">Appointment details</div>
            <div class='panel-body'>
              <h3>Appointment details</h3>
              <h4><?php echo Helper::sanitize($company_name); ?></h4>
              <p>Date: <?php echo date("m/d/Y",$timestamp); ?> </p>
              <p>Time: <?php echo date("H:i",$timestamp); ?> </p>
              <h4>Location </h4>  
              <iframe class="company-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10005.987536989032!2d-0.17200722065429716!3d51.17306419433358!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875f009c1687cbd%3A0x9eff037ed990331d!2s60+Hevers+Ave%2C+Horley%2C+Surrey+RH6!5e0!3m2!1sen!2suk!4v1424272017224"></iframe>
              <h4>Address</h4>
              <p><?php echo Helper::sanitize($company_address); ?></p>
                  <p><?php echo Helper::sanitize($company_postcode)." ".Helper::sanitize($company_city); ?></p>
                  <p><?php echo Helper::sanitize($company_country); ?></p>
                  <p><a href='#'><?php echo Helper::sanitize($company_website); ?></a><p>
            </div><!--end of panel-body-->        
          </div><!--end of panel-->   
      </div>    
      
      <div class="col-sm-8">    
          <h3><span class="glyphicon glyphicon-calendar"></span> Make your appointment</h3>  
        <form class='modal-form' id='modal_form_<?php $timestamp ;?>'>
        <div class='form-group'>
          <div><label for='firstname_$timestamp_to_compare' class=' control-label'>First name:</label></div>
          <div><input type='text' class='form-control' id='firstname_<?php $timestamp ;?>' placeholder='John'></div>
        </div>
        <div class='form-group'>
          <div><label for='lastname_$timestamp_to_compare' class=' control-label'>Last name:</label></div>
          <div><input type='text' class='form-control' id='lastname_<?php $timestamp ;?>' placeholder='Doe'></div>
        </div>                              
        <div class='form-group'>
          <div><label for='email_$timestamp_to_compare' class=' control-label'>E-mail address:</label></div>
          <div><input type='text' class='form-control' id='email_<?php $timestamp ;?>' placeholder='johndoe@gmail.com'></div>
        </div>
        <div class='form-group'>
          <div><label for='mobile_$timestamp_to_compare' class=' control-label'>Phone:</label></div>
          <div><input type='text' class='form-control' id='mobile_<?php $timestamp ;?>' placeholder='44 1122334455'></div>
        </div>
            <div><a class="btn btn-link" href="calendar.php">Return to calendar<a> &nbsp; 
			<a class="btn btn-primary" href="http://localhost/finalproject/underconstruction.php">Next step</a></div>    
      </form>
      </div><!--end of col-sm-6-->
          
      </div><!--end of row-->
      </div><!-- /.container -->
      
    <div class="container-fluid container-footer">
      <div class="container">
      <div class="row">
       
        <div class="col-sm-6">
            <h6>Copyright &copy; <?php echo date("Y"); ?> Mariocoski</h6>  
        </div>  
        <div class="col-sm-6">
            <h6>Coded with <span class="glyphicon glyphicon-heart"></span> by Mariocoski</h6>
			<h6>Adapted to the project Visaprocess by Elizabeth Fernandez - Carolina Cadena - Eduardo Amador</h6>			
        </div>
            
      </div><!--end of row-->
      </div>
    </div><!--end of container-footer-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script  src='<?php echo JS; ?>jquery.js'></script>
    <script src='<?php echo BOOSTRAP_JS; ?>bootstrap.js'></script>
    <script type="text/javascript">
     $("#next_step").click(function(){
      alert("You have to validate your data here and create next step of booking system i.e. sms-code authentication");
     });
    </script> 
  </body>
  
</html>
