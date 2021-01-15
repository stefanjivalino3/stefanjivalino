<header data-stellar-background-ratio="0.5" style="background-color: #2B2E4A ;">
	<div class="container">
		<nav class="navbar navbar-default mynavbar1">
			<div class="container-fluid">
				<div class="navbar-header" style="padding-bottom: 20px;">
					<button style="background-color:none !transparent;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a style="color:white; font-family:khumbsans; font-size:25px" class="navbar-brand" href="<?php echo base_url() ?>">Stefan<br>Jivalino</a>
				</div>
				
				<div style="border-top: 0px solid #2B2E4A !important;" class="bar-align collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a class="<?php if($this->uri->segment(1)=="") echo "bar-active" ?>" href="<?php echo base_url() ?>">Home</a></li>
						<li><a class="<?php if($this->uri->segment(1)=="portfolio") echo "bar-active" ?>" href="<?php echo base_url() ?>portfolio">Portfolio</a></li>
						<li><a class="<?php if($this->uri->segment(1)=="achievement") echo "bar-active" ?>" href="<?php echo base_url() ?>achievement">Achievement</a></li>
						<li><a class="<?php if($this->uri->segment(1)=="contact") echo "bar-active" ?>" href="<?php echo base_url() ?>contact">Contact</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
    
</header>