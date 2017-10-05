<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <meta name="keywords" content="SankarSmith Sankarsmith Sankar Smith Sankar PHP Programmer">
	<meta name="description" content="SankarSmith Computer Programmer, SankarSmith PHP Developer">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Sankar Smith</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
    <script src="assets/js/Chart.js"></script>
    <link rel="shortcut icon" href="assets/img/icons/icon_head.png" type="image/png" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <script type="application/ld+json">
	{
	  "@context": "http://schema.org",
	  "@type": "Person",
	  "name": "Sankar Smith",
	  "url": "http://www.sankar.netne.net",
	  "sameAs": [
	    "https://www.facebook.com/sankarsmith1995",
	    "http://stackoverflow.com/users/6839761/sankar-smith",
	    "https://www.linkedin.com/in/sankar-smith-860668ab",
	    "https://plus.google.com/113387707501457378771",
	    "https://twitter.com/sankarsmith1995"
	  ]
	}
	</script>
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a class="smoothScroll" href="#about" title="About"><i class="icon-user"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#resume" title="Resume"><i class="icon-file"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#work" title="Works"><i class="icon-briefcase"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#contact" title="Contact"><i class="icon-envelope"></i></a></li>
						</ul><!--/ uL#nav -->
					</div><!-- /.dropdown -->

					<div class="clear"></div>
				</div><!--/.row -->
			</div><!--/.container -->

			<div class="clear"></div>
		</div><!--/ #topbar-inner -->
	</div><!--/ #section-topbar -->
	
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1>Sankar Smith</h1>
					<h3>Computer Programmer | info.sankar1995@gmail.com</h3>
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->
	

	<section id="about" name="about"></section>
	<div id="intro">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5>ABOUT</h5>
				</div>
				<div class="col-lg-6">
					<p>I'm web & back-end developer with 1.5 years of professional experience. I'm interested in all kinds of web development, API integration & open source projects. I also have skills in other area like web security management, Ethical Hacking.</p>
				</div>
				<div class="col-lg-3">
					<p><a href="https://drive.google.com/open?id=0B7rLEjDtRUwHV2h2ZE0yMnlnblk" target="_blank"><i class="icon-file"></i></a> <sm>DOWNLOAD PDF</sm></p>
				</div>
				
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #intro -->


	<section id="resume" name="resume"></section>
	<!--EDUCATION DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Computer Science Engineering (B.E)</t><br/>
						Infant Jesus College of Engineering<br/>
						<i>4 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>APRIL 2016</sm></p>
				</div>
	
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->
	
	
	<!--WORK DESCRIPTION -->
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>WORK</h5>
				</div>
				<div class="col-lg-6">
					<p><t>PHP Programmer</t><br/>
						Sathi System Pvt Ltd Tirunelveli. <br/>
					</p>
					<p><more>Developing and Managing the Japanese Based Project with CORE PHP and also in framework.</more></p>
				</div>
				<div class="col-lg-3">
					<p><sm>MAY 2016 - CURRENT</sm></p>
				</div>
		</div><!--/.row -->
		<br>
		<hr>
	</div><!--/.container -->

	
	<!--SKILLS DESCRIPTION -->
	<div id="skillswrap">
		<div class="container">
			<div class="row">
					<div class="col-lg-2 col-lg-offset-1">
						<h5>SKILLS</h5>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="php" height="130" width="130"></canvas>
						<p>PHP</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 90,
										color:"#1abc9c"
									},
									{
										value : 10,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("php").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="bootstrap" height="130" width="130"></canvas>
						<p>Javascript</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 75,
										color:"#1abc9c"
									},
									{
										value : 25,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="wordpress" height="130" width="130"></canvas>
						<p>HTML/CSS</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					
					<div class="col-lg-3 col-lg-offset-3 centered">
						<canvas id="laravel" height="130" width="130"></canvas>
						<p>Laravel Framework</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 80,
										color:"#1abc9c"
									},
									{
										value : 20,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("laravel").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="api" height="130" width="130"></canvas>
						<p>API Integration</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 70,
										color:"#1abc9c"
									},
									{
										value : 30,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("api").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>
					<div class="col-lg-3 centered">
						<canvas id="seo" height="130" width="130"></canvas>
						<p>SEO</p>
						<br>
						<script>
							var doughnutData = [
									{
										value: 50,
										color:"#1abc9c"
									},
									{
										value : 50,
										color : "#ecf0f1"
									}
								];
								var myDoughnut = new Chart(document.getElementById("seo").getContext("2d")).Doughnut(doughnutData);
						</script>
					</div>

			</div><!--/.row -->
			<br>
		</div><!--/.container -->
	</div><!--/ #skillswrap -->



	<section id="work" name="work"></section>
	<!--PORTFOLIO DESCRIPTION -->
	<div class="container desc">
		<div class="row">
				<div class="col-lg-2 col-lg-offset-1">
					<h5>PORTFOLIO</h5>
				</div>
				<div class="col-lg-6">
					<p><img class="img-responsive" src="assets/img/port01.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
					<p>OFFICIAL Projects Site</p>
				<p><more>All official project worked under my company and here I list out all that projects in my offical blog.<br/><br/>
					<sm><i class="icon-tag"></i> Company Projects</sm> <a href="http://sankar.netne.net/#project">View Offical Blog</a></more> 
				</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><img class="img-responsive" src="assets/img/port02.jpg" alt=""></p>
				</div>
				<div class="col-lg-3">
						<p>GitHub Open Projects</p>
					<p><more>All Open Source and GitHub Projects are stacked and hosted for user demo.<br/><br/>
						<sm><i class="icon-tag"></i> Open Source</sm> <a href="javascript:;">View</a></more>
					</p>
				</div>
		</div><!--/.row -->
		<br>
		<br>
	</div><!--/.container -->
	


	<section id="contact" name="contact"></section>
	<!--FOOTER DESCRIPTION -->
	<div id="footwrap">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-2 col-lg-offset-1">
					<h5>CONTACT</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Email</t><br/>
						info.sankar1995@gmail.com <br/>
					</p>
					<p><t>Adress</t><br/>
						Tuticorin <br/>
						TAMILNADU, INDIA. <br/>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>SOCIAL LINKS</sm></p>
					<p>
						<a href="#"><i class="icon-dribbble"></i></a>
						<a href="https://www.linkedin.com/in/sankar-smith-860668ab"><i class="icon-linkedin"></i></a>
						<a href="https://www.facebook.com/sankarsmith1995"><i class="icon-facebook"></i></a>
						<a href="https://twitter.com/sankarsmith1995"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-apple"></i></a>

					</p>
				</div>
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #footer -->
	
	<div id="c">
		<div class="container">
			<p>Created by <a href="http://www.blacktie.co">Sankar Smith</a></p>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
