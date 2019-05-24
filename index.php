<?php
	include("header.php");
?>
	<br>
	<div class="container-fluid ">
		<div class="row ">
			<div class="col-md-12" >
				<div id="myCarousel" class="carousel slide" data-ride="carousel">

					  <ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					  </ol>

					<div class="carousel-inner opacity">

						<div class="item active">
							<img src="mtl.jpg" alt="Montreal" style="width:100%; align=center">
							<div class="carousel-caption">
								<h3>Montreal</h3>
								<p>Montreal is always so much fun!</p>
							</div>
						</div>

						<div class="item">
							<img src="alb.jpg" alt="ALberta" style="width:100%;">
							<div class="carousel-caption">
							<h3>Banff</h3>
							<p>Thank you, Alberta</p>
							</div>
						</div>

						<div class="item">
							<img src="ng.jpg" alt="Niagara" style="width:100%;">
							<div class="carousel-caption">
								<h3>Niagara Falls</h3>
								<p>A world marvel waiting for you</p>
							</div>
						</div>

					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid subt">
		<h1> Why Immigrative?</h1>
		<br>
		<p>We only represent clients who we identify the opportunity with regards to obtaining the immigration objective.
			On the off chance that we feel that you won’t qualify, we will be straightforward with you, and you won’t be left with
			false expectations or have burned through cash unnecessarily. You will have significant serenity knowing whether you qualify now,
			or what you should do to qualify later on.
		</p>
		<br>
		<p><b>Choose one of the following options of your preference</b></p>
		<br>

		<div class="row">
			<div class="col-sm-4"><a href="http://localhost/finalproject/inputform.php" class="btn btn-primary btn-lg active" role="button">Free Assesment Form</a></div>
			<div class="col-sm-4"><a href="https://client.canadaconsultportal.ca/Login/Login?siteId=CCP2018261&qlauncher=true" class="btn btn-primary btn-lg active" role="button">Asisted Assesment Form</a></div>
			<div class="col-sm-4"><a href="http://localhost/finalproject/calendar.php" class="btn btn-primary btn-lg active" role="button">Book your appointment</a></div>
		</div>
	</div>
	<?php
		include("footer.php");

	?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



</body>
</html>
