<!DOCTYPE HTML>
<html>
	<?php $this->load->view("template/header.php") ?>
	<body>
		
	<div class="fh5co-loader"></div>
	<div id="page">	
    <?php $this->load->view("template/navbar.php") ?>
	<div id="sections" class="animate-box">
		<div class="container">
			<div class="row">
				<div style="margin-bottom: 0em !important" class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Portfolio</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 pt-5">
					<img class="img-responsive" style="width: 100%" src="<?php echo base_url() ?>assets/images/portfolio/skins.jpg " alt="">
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-7 pt-5">
					<h3 style="margin: 0 0 5px 0 !important; ">SKINS - Skincare Analyzer</h3>
					<span>Sep 2020 - Dec 2020</span>
					<br>
					<span>iOS Application</span>
					<div style="padding-top:5px">
						<span class="a">Swift</span>
						<span class="a">PHP</span>
						<span class="a">CodeIgniter</span>
					</div>
					<div class="port-text" style="padding-top:30px">
						<p>SKINS is an app made for skin enthusiast to find the best skincare suitable for their skintype</p>
						<p class="p1">As a coder, I implement some of features in this project:</p>
						<ul>
							<li>Backend Restful API with CodeIgniter</li>
							<li>Implementation of API on the app.</li>
							<li>Some of Frontend Implementation such as Product Page, Product Detail Page, and Ingredients Detail Page</li>
						</ul>
					</div>

					<div class="pt-4"  >
						<input type="button" onClick="javascript:window.open('https://apps.apple.com/id/app/skins-skincare-analyzer/id1540533678', '_blank');" value="See Project &rarr;" class="btn btn-primary">
					</div>

				</div>


				<div class="col-md-4 pt-5">
					<img class="img-responsive" style="width: 100%" src="<?php echo base_url() ?>assets/images/portfolio/travellino.jpg " alt="">
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-7 pt-5">
					<h3 style="margin: 0 0 5px 0 !important; ">Travellino Tour & Travel</h3>
					<span>Sep 2019 - Jul 2020</span>
					<br>
					<span>Website</span>
					<div style="padding-top:5px">
						<span class="a">PHP</span>
						<span class="a">CodeIgniter</span>
					</div>
					<div class="port-text" style="padding-top:30px">
						<p>Building an information website for Travellino Tour & Travel, Travel company based in Tangerang</p>
						<p class="p1">This website contains information about:</p>
						<ul>
							<li>Company profile, vision and mission.</li>
							<li>Tailor made to create our own travel package. Customer could design their own package based on their schedule, budget, and interest.</li>
							<li>Travel package informations with various kind of tour packages and destinations.</li>
						</ul>
					</div>

					<div class="pt-4"  >
						<input type="button" onClick="javascript:window.open('http://www.travellinotour.com', '_blank');" value="See Project &rarr;" class="btn btn-primary">
					</div>

				</div>


				<div class="col-md-4 pt-5">
					<img class="img-responsive" style="width: 100%" src="<?php echo base_url() ?>assets/images/portfolio/koci.jpg " alt="">
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-7 pt-5">
					<h3 style="margin: 0 0 5px 0 !important; ">Koko Cici Jakarta</h3>
					<span>Jul 2019 - Present</span>
					<br>
					<span>Website</span>
					<div style="padding-top:5px">
						<span class="a">PHP</span>
						<span class="a">CodeIgniter</span>
					</div>
					<div class="port-text" style="padding-top:30px">
						<p>Building an official website for Koko Cici Jakarta, a non-profit organization in DKI Jakarta.</p>
						<p class="p1">This website has the following functions and uses:</p>
						<ul>
							<li>The organizations official website. This is so that the public can easily access the latest information about the organization's activities.</li>
							<li>Other function for organizational interest such as: </li>
							<ul>
								<li>Content Management System (CMS) to manage contents of each pages.</li>
								<li>Provides a registration page that will be used every year for "Pemilihan Koko Cici Jakarta" event.</li>
								<li>Online Election System for "Pemilihan Ketua Ikatan Koko Cici Jakarta" </li>
							</ul>
						</ul>
					</div>

					<div class="pt-4"  >
						<input type="button" onClick="javascript:window.open('http://www.kokocicijakarta.com', '_blank');" value="See Project &rarr;" class="btn btn-primary">
					</div>

				</div>


				<div class="col-md-4 pt-5">
					<img class="img-responsive" style="width: 100%; border: 1px solid black" src="<?php echo base_url() ?>assets/images/portfolio/bluelane.jpg " alt="">
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-7 pt-5">
					<h3 style="margin: 0 0 5px 0 !important; ">Blue Lane Coffee</h3>
					<span>Dec 2018 - Jan 2019</span>
					<br>
					<span>Website</span>
					<div style="padding-top:5px">
						<span class="a">PHP</span>
						<span class="a">CodeIgniter</span>
					</div>
					<div class="port-text" style="padding-top:30px">
						<p>Build a coffee shop website for Blue Lane Coffee, a coffee shop run by PT Prime Restaurant Indonesia (KINO)</p>
						<p class="p1">This website has the following functions and uses:</p>
						<ul>
							<li>Provide information about company and products. This is so that the public can easily access the latest information about newest product available.</li>
							<li>Content Management System (CMS) to manage contents of each pages.</li>
						</ul>
					</div>

					<div class="pt-4"  >
						<input type="button" onClick="javascript:window.open('http://www.bluelanecoffee.com', '_blank');" value="See Project &rarr;" class="btn btn-primary">
					</div>

				</div>
				
			</div>
		</div>
	</div>
	</div>

	<?php $this->load->view("template/footer.php") ?>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url(); ?>/assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url(); ?>/assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url(); ?>/assets/js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script src="<?php echo base_url(); ?>/assets/js/jquery.easypiechart.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="<?php echo base_url(); ?>/assets/js/google_map.js"></script>
	
	<!-- Main -->
	<script src="<?php echo base_url(); ?>/assets/js/main.js"></script>

	</body>
</html>

