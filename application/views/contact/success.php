<!DOCTYPE HTML>
<html>
	<?php $this->load->view("template/header.php") ?>
		<style>
			.centered {
                top: 50%;
                left: 50%;
            }
		</style>
	<div class="fh5co-loader"></div>
	<div id="page">	
    <?php $this->load->view("template/navbar.php") ?>
    <div style="min-height:600px !important;" id="sections" class="animate-box centered">
		<div class="container">
			<div class="row">
				<div style="margin-top: 8em !important" class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h3>Thank you! I have received your message.</h3>
                    <p>I will reply your message as soon as posible !</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	<?php $this->load->view("template/footer.php") ?>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<?php $this->load->view("template/script.php") ?>

	</body>
</html>

