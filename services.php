<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<title>Services</title>
	<!-- CSS File -->
	<link rel="stylesheet" type="text/css" href="assets/css/services.css">

	<!-- Tittle icon -->
  	<link rel="icon" href="assets/img/icon.png">

	<!-- Bootsrap 4.5 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <!--Animate on scroll Py For Animation-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<!-- Font Awesome CDN -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Prociono&display=swap" rel="stylesheet">
  
</head>
<body onload="myfunction()">
	
	<!-- Preloader -->

    <div id="loader">
      
    </div>

		<!-- Navbar Start -->

	<div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
  <a class="navbar-brand font-weight-bold ml-4" id="logo" href="index.php">TheComputersDr.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto font-weight-bold">
      <li class="nav-item active"s>
        <a class="nav-link text-uppercase ml-4" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-uppercase ml-4" id="menu" href="about.php">About</a>
      </li>
      <li class="nav-item" id="active_page">
        <a class="nav-link text-uppercase ml-4" id="menu" href="services.php">Services</a>
      </li>      
      <li class="nav-item ml-4">
        <a class="nav-link text-uppercase" id="menu" href="contact.php">Contact</a>
      </li>
      <li class="nav-item ml-4 text-success">
      <a class="nav-link text-uppercase" title="Need Help? Whatsapp us" target="_blank"  href="https://api.whatsapp.com/send?phone=9012267671&amp;text=Hello,%20I%20am%20Interested%20in%20a%20Your%20Computers%20Repairing%20Services.%20I%20need%20more%20Details.%20Please%20connect%20with%20us%20Whatsapp.%20"><img src="assets/img/whatsapp.png" height="20" width="20"> +91 9012267671</a>
      </li>
    </ul>
  </div>
</nav> 
  </div>
	<!--  Background Section Start Here  -->
	<div class="service_bg">
		<img src="assets/img/service-bg.jpg" height="500" width="100%" alt="Service image loading...">
	</div>

	<!-- Watsapp icon -->
  	<a href="https://wa.me/message/6745N3S74AADC1" target="_blank" title="Need help? Whatsapp us" style="position:fixed; bottom: 48px; right: 26px;"><img src="assets/img/whatsapp1.png" height="50" width="50"></a>

	<br>
	<!--  Body Section Start Here  -->
	<div class="service_body py-5">
		<div class="text-center">
			<h1 class="text-uppercase">Our services</h1>
			<hr class="mt-3 mx-auto bg-primary" />
		</div>
		<br><br>
		<div class="services">
			<div class="row my-5">
				<div class="col-md-4 col-12">
					<img src="assets/img/service1.jpg" height="200" width="100%" alt="Desktop & Laptop image loading..">
					<div class="background">
						<h5 class="bottom-left py-2 px-2">Desktop & Laptop</h5>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<img src="assets/img/service2.jpg" height="200" width="100%" alt="Hardware & Software image loading..">
					<div class="background">
						<h5 class="bottom-left py-2 px-2">Hardware & Software</h5>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<img src="assets/img/coding.png" height="200" width="100%" alt="Web Development image loading..">
					<div class="background">
						<h5 class="bottom-big py-2 px-3 ">Web Designing & Development</h5>
					</div>
				</div>
			</div>
			
			<div class="row ">
				<div class="col-md-4 col-12">
					<img src="assets/img/service4.jpg" height="200" width="100%" alt="Annual Maintenance image loading..">
					<div class="background">
						<h5 class="bottom-left py-2 px-2">Annual Maintenance</h5>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<img src="assets/img/service5.jpg" height="200" width="100%" alt="Network Support image loading..">
					<div class="background">
						<h5 class="bottom-right py-2 px-2">Network Design & Support</h5>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<img src="assets/img/service6.jpg" height="200" width="100%" alt="Data Recovery image loading..">
					<div class="background">
						<h5 class="bottom-right py-2 px-2">Data Backup & Recovery</h5>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-4 col-12">
					<img src="assets/img/service7.jpg" height="200" width="100%" alt="Virus Problem image loading..">
					<div class="background">
						<h5 class="bottom-right py-2 px-2">Virus Problem</h5>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<img src="assets/img/service8.jpg" height="200" width="100%" alt="Printer & Catridge image loading..">
					<div class="background">
						<h5 class="bottom-right py-2 px-2">Printer & Catridge</h5>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<img src="assets/img/service9.jpg" height="200" width="100%" alt="On Home Service image loading..">
					<div class="background">
						<h5 class="bottom-right py-2 px-2">On Side Service</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>

	<!-- Footer Section Start Here -->

    <footer>
    	<div class="footer bg-dark">
    		<div class="row">
    			
    			<div class="col-lg-4 col-md-4 col-12 pl-4  location text-white">
    				<h4 class="py-3">Get in touch with us : </h4>
    				<address>
	                  	<i class="fa fa-home"></i>
	                     Head Office : U-149 Laxmi <br>	                     
	                     <div class="pl-3">Nagar New Delhi 110092 </div><br>
	                     <i class="fa fa-home"></i> 
	                     Primary Branch: Thakurdwara<br>
	                     <div class="pl-3"> Moradabad UP 244601 India</div><br>
	                     <i class="fa fa-home"></i> 
	                     Secondary Branch: Chandausi<br>
	                     <div class="pl-3"> Sambhal UP 244012 India</div>                                    
                	</address>
    			</div>
    			<div class="col-lg-1 col-md-1"></div>
    			<div class="col-lg-3 col-md-3 col-12 pl-4  contact text-white">
    				<h4 class="py-3">Contact Info :</h4>
    				<p>
	                  <i class="fa fa-phone pb-2"></i> (+91) 9012267671 <br>
	                  <i class="fa fa-phone"></i> (+91) 9897584992 <br>
	                  <div class="mail my-4">
	                    <i class="fa fa-envelope py-2"></i> support@thecomputersdr.com
	                  <br>
	                  <i class="fa fa-envelope"></i> info@thecomputersdr.com
	                  </div>
                	</p>
    			</div>
    			<div class="col-lg-1 col-md-1"></div>
    			<div class="col-lg-3 col-md-3 col-12 pl-4 social  text-white">
    				<h4 class="text-white py-3 ">Social Network: </h4>
	                <div class="pl-2">
	                	<a href="https://facebook.com/kapilsagarjet1/" class="mr-4 text-white" title="Facebook" target="_blank"><span class='fa fa-facebook-square fa-2x'  ></span></a>
		                <a href="https://www.instagram.com/disismrsingh" class="mr-4 text-white" title="Instagram" target="_blank"><span class='fa fa-instagram fa-2x' ></span></a>
		                <a href="https://twitter.com/disismrsingh" class="mr-4 text-white" title="Twitter" target="_blank"><span class='fa fa-twitter fa-2x pb-4' ></span></a>
	                </div>           
    			</div>
    			
    		</div>
    	</div>
    	<div class="bg-primary text-white text-center py-4" width="100%" >
            <center>copyright <i class='fa fa-copyright'></i> 2020 Thecomputersdr.com  Design By Aman Sagar</center>
        </div>
    </footer>

<script>
  
  var preloader = document.getElementById('loader');

  function myfunction(){
    preloader.style.display = 'none';
  }

</script>
<script>

// Animate on Scrollpy for animation

   <script>
   AOS.init();

</script>

</body>

<script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
  $('#example').tooltip(options)
  $('#example').tooltip({ boundary: 'window' })
  $('#element').tooltip('enable')
})
</script>

</html>