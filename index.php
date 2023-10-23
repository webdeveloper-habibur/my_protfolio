

<?php
require 'db.php';
// logo
$select_logo="SELECT * FROM logos WHERE id=2";
$select_logo_res=mysqli_query($db_connect,$select_logo);
$afrer_assoc_logo=mysqli_fetch_assoc($select_logo_res);
//ABIUT
$select_about="SELECT * FROM abouts WHERE id=1";
$select_about_res=mysqli_query($db_connect,$select_about);
$afrer_assoc_about=mysqli_fetch_assoc($select_about_res);
//EXPERTISES
$select_expertise="SELECT * FROM expertises WHERE status=1 ";
$select_expertise_res=mysqli_query($db_connect,$select_expertise);
//Services

$select_service="SELECT * FROM services WHERE status=1 ";
$select_servece_res=mysqli_query($db_connect,$select_service);
//portfolio
$select_portfolio="SELECT * FROM portfolios WHERE status=1 ";
$select_portfolio_res=mysqli_query($db_connect,$select_portfolio);

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="portfolio,creative,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themeturn.com">

  <title>Ratsaan| Creative portfolio template</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Themeify Icon Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- owl carousel -->
  <link rel="stylesheet" href="plugins/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="plugins/owl/assets/owl.theme.default.min.css" >
  <!-- Slick slider CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="portfolio" id="top">


<!-- Navigation start -->
<!-- Header Start --> 

<nav class="navbar navbar-expand-lg bg-transprent py-4 fixed-top navigation" id="navbar">
	<div class="container">
	  <a class="navbar-brand" href="index.html">
	  <img width="100" src="uploads/logo/<?=$afrer_assoc_logo['header_logo']?>" alt="">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
		<span class="ti-view-list"></span>
	  </button>
  
	  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			   <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#skillbar">Expertise</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#service">Services</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#portfolio">Portfolio</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#testimonial">Testimonial</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#contact">Contact</a></li>
			</ul>
	  </div>
	</div>
</nav>


<!-- Navigation End -->

<!-- Banner start -->

<!-- Slider Start -->
<section class="slider py-7 ">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-sm-12 col-12 col-md-5">
				<div class="slider-img position-relative">
					<img src="uploads//about/<?= $afrer_assoc_about['image']?>" alt="" class="img-fluid w-100">
				</div>
			</div>

			<div class="col-lg-6 col-12 col-md-7">
				<div class="ml-5 position-relative mt-5 mt-lg-0">
					<span class="head-trans"><?= $afrer_assoc_about['nick_name']?></span>
					<h1 class="font-weight-normal text-color text-md"><i class="ti-minus mr-2"></i><?= $afrer_assoc_about['Designation']?></h1>
					<h2 class="mt-3 text-lg mb-3 text-capitalize"><?= $afrer_assoc_about['name']?></h2>
					<p class="animated fadeInUp lead mt-4 mb-5 text-white-50 lh-35"><?= $afrer_assoc_about['short_description']?></p>
					<a href="#about" class="btn btn-solid-border">About Me</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->

<!-- Skills start -->
<section class="section bg-gray" id="skillbar" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i>Skills Set</span>
					<h2 class="title">Expertise</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php foreach($select_expertise_res as $skill) {?>
			<div class="col-lg-6 col-md-6">
				<div class="skill-bar mb-4 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal"><?=$skill['topic_name']?></h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="<?=$skill['percentage']?>">
							<span class="percent-text"><span class="count"><?=$skill['percentage']?></span>%</span>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>		
		
		</div>
	</div>
</section>	

<!-- Skills End -->

<!-- Service start -->
<section class="section bg-gray" id="service" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i>What i do</span>
					<h2 class="title">Services</h2>
				</div>
			</div>
		</div>

		<div class="row no-gutters">
		<?php foreach($select_servece_res as $service) {?>
			<div class="col-lg-4 col-md-6">
				<div class="card p-5 rounded-0">
					<h3 class="my-4 text-capitalize"><?=$service['title']?></h3>
					<p><?=$service['short_des']?></p>
				</div>
			</div>
			<?php } ?>
		</div>

		<div class="row align-items-center mt-5" data-aos="fade-up">
			<div class="col-lg-6 mt-5">
				<h2 class="mb-5 text-lg-2 text-white-50">Let's <span class="text-white">work together</span> on your next project </h2>
			</div>
			<div class="col-lg-4 ml-auto text-right">
				<a href="#contact" class="btn btn-main text-white smoth-scroll">Hire Me</a>
			</div>
		</div>
	</div>
</section>
<!-- Service End -->

<!-- Portfolio start -->
<section class="section" id="portfolio" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus"></i>works</span>
					<h2 class="title">Portfolio</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
	
		<div class="row">
		
			<div class="post_gallery owl-carousel owl-theme">
			<?php foreach($select_portfolio_res as $portfolio) {?>
				<div class="item">
					<div class="portfolio-item position-relative">
						<img src="uploads/portfolio/<?=$portfolio['image']?>" alt="" class="img-fluid">

						<div class="portoflio-item-overlay">
							<a href="portfolio-single.html"><i class="ti-plus"></i></a>
						</div>
					</div>
					<div class="text mt-3">
						<h4 class="mb-1 text-capitalize"><?=$portfolio['title']?></h4>
						<p class="text-uppercase letter-spacing text-sm"><?=$portfolio['catagory']?></p>
					</div>
				
			</div>
			<?php } ?>
		</div>
		
	</div>
</section>
<!-- Portfolio End -->

<!-- Tetsimonial start -->
<section id="testimonial" class="section testomionial" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="section-title">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i>testimonial</span>
					<h1 class="title">What People Say About me</h1>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="testimonial-slider">
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-white-50"></i>
						<div class="testimonial-content">
							<p class="text-md mt-3">They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.</p>

							<div class="media mt-5 align-items-center">
								<img src="images/about/2.jpg" alt="" class="img-fluid  rounded-circle align-self-center mr-4">
								<div class="media-body">
									<h3 class="mb-0">John Smith</h3>
									<span class="text-muted">Creative Designer</span>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-white-50"></i>
						<div class="testimonial-content">
							<p class="text-md mt-3">They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.</p>

							<div class="media mt-5 align-items-center">
								<img src="images/about/3.jpg" alt="" class="img-fluid  rounded-circle align-self-center mr-4">
								<div class="media-body">
									<h3 class="mb-0">HR Sumon</h3>
									<span class="text-muted">Developer</span>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-white-50"></i>
						<div class="testimonial-content">
							<p class="text-md mt-3">They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.</p>

							<div class="media mt-5 align-items-center">
								<img src="images/about/3.jpg" alt="" class="img-fluid  rounded-circle align-self-center mr-4">
								<div class="media-body">
									<h3 class="mb-0">Mike jack</h3>
									<span class="text-muted">Marketer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</section>
<!-- Tetsimonial End -->

<!-- Contact start -->
<section class="section" id="contact" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i>Contact</span>
					<h1 class="title">Get in Touch</h1>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8">
					<form class="contact__form form-row contact-form" method="post" action="message.php">
					 <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
					<div class="form-group col-lg-6 mb-5">
						<input type="text" id="name" name="name" class="form-control bg-transparent" placeholder="Your Name">
					</div>
					<div class="form-group col-lg-6 mb-5">
						<input type="text" name="email" id="email" class="form-control bg-transparent" placeholder="Your Email">
					</div>
					<div class="form-group col-lg-12 mb-5">
						<input type="text" name="subject" id="subject" class="form-control bg-transparent" placeholder="Your Subject">
					</div>
					
					<div class="form-group col-lg-12 mb-5">
						<textarea id="message" name="message" cols="30" rows="6" class="form-control bg-transparent" placeholder="Your Message"></textarea>
						
						<div class="text-center">
							 <input class="btn btn-main text-white mt-5" id="submit" name="submit" type="submit" class="btn btn-hero" value="Send Message">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Contact End -->

<!-- Footer start -->
<footer class="footer border-top-1">
	<div class="container">
		<div class="row align-items-center text-center text-lg-left">
			<div class="col-lg-2">
			<img width="100" src="uploads/logo/<?=$afrer_assoc_logo['footer_logo']?>" alt="">
			</div>
			<div class="col-lg-10">
				<div class="text-right">
					<p class="lead"><span class="text-color">Dreambuzz</span> © 2019 All Right Reserved Ratsaan.</p>
					<a href="#top" class="backtop smoth-scroll"><i class="ti-angle-up"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer End -->


    <!-- 
    Essential Scripts
    =====================================-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/nav/jquery.easing.1.3.html"></script>
    
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/owl/owl.carousel.min.js"></script>
  
    <!-- Skill COunt -->
    <script src="plugins/counto/apear.js"></script>
    <script src="plugins/counto/counTo.js"></script>
    <!-- AOS Animation -->
    <script src="plugins/aos/aos.js"></script>
    
    <script src="js/script.js"></script>
    <script src="js/ajax-contact.html"></script>

  </body>
</html>
   