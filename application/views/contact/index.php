<!DOCTYPE HTML>
<html>
	<?php $this->load->view("template/header.php") ?>
	<?php echo $script_captcha; // javascript recaptcha ?>
	<body>
		<style>
			.ck-editor__editable {
				min-height: 250px !important;
			}
		</style>
	<div class="fh5co-loader"></div>
	<div id="page">	
    <?php $this->load->view("template/navbar.php") ?>


	<div id="fh5co-consult">
		<div class="video fh5co-video" style="background-image: url(assets/images/cover_bg_1.jpg);">
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
            <h2>Contact Me !</h2>
            <p>If you like my work and have some cool project to work on, just send me direct message or contact me through social sites listed below.</p>
            <p>
				<ul class="fh5co-social-icons">
                    <li><a href="mailto: stefanjivalino@gmail.com" target="_blank"><i class="icon-mail"></i></a></li>
					<li><a href="https://www.linkedin.com/in/stefan-jivalino/" target="_blank"><i class="icon-linkedin2"></i></a></li>
				    <li><a href="https://www.instagram.com/stefanjivalino3/" target="_blank"><i class="icon-instagram"></i></a></li>
					<li><a href="https://github.com/stefanjivalino3" target="_blank"><i class="icon-github2"></i></a></li>
				</ul>
			</p>
			<form action="<?php base_url() ?>contact/send" method="post">
				<div class="row form-group">
					<div class="col-md-6">
						<input name="fname" type="text" id="fname" class="form-control" placeholder="Your firstname">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<input name="lname" type="text" id="lname" class="form-control" placeholder="Your lastname">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input name="email" type="text" id="email" class="form-control" placeholder="Your email address">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input name="subject" type="text" id="subject" class="form-control" placeholder="Your subject of this message">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea name="isi" id="editor" cols="30" rows="10" style="height:300px"></textarea>
						
						<!-- <textarea id="isi" class="form-control" cols="30" rows="10" id="ckeditor" name="isi" style="height: 400px;" placeholder="Say something about us"></textarea> -->
						<!-- <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea> -->
					</div>
				</div>
				<div class="container row form-group">
					<?php echo $captcha // tampilkan recaptcha ?>
				</div>
				<div class="form-group">
					<input type="submit" value="Send Message" class="btn btn-primary">
				</div>

			</form>	
		</div>
	</div>
	</div>
	
	<?php $this->load->view("template/footer.php") ?>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<?php $this->load->view("template/script.php") ?>
	<script>
        ClassicEditor
		.create( document.querySelector( '#editor' ), {
			placeholder: 'Type the message here!'
		} )
		.then( editor => {
			console.log( editor );
		} )
		.catch( error => {
			console.error( error );
		} );
    </script>
	<!-- <script>
		var ckeditor = CKEDITOR.replace('isi',{
			placeholder: 'Test'
					// height:'300px'
		});

		CKEDITOR.disableAutoInline = true;
		CKEDITOR.inline('editable');

		ClassicEditor
		.create( document.querySelector( '#isi' ), {
			placeholder: 'Type the content here!'
		} )
		.then( editor => {
			console.log( editor );
		} )
		.catch( error => {
			console.error( error );
		} );
	</script> -->
	

	</body>
</html>

