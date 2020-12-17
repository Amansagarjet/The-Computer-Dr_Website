<!DOCTYPE html>
<html>
<head>
	<title>TheComputerDr | Desktop & Laptop Repairing | Network Support | Web Desging & Development | Hardware & Software </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tittle icon -->
  <link rel="icon" href="assets/img/icon.png">

	<!-- Bootsrap 4.5 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- CSS File  -->
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">

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
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
  <a class="navbar-brand font-weight-bold ml-4" id="logo" href="index.php">TheComputersDr.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto font-weight-bold">
      <li class="nav-item active" id="active_page">
        <a class="nav-link text-uppercase ml-4" href="index.php"  style="color: #D401F5;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-uppercase ml-4" id="menu" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-uppercase ml-4" id="menu" href="services.php">services</a>
      </li>      
      <li class="nav-item ml-4" >
        <a class="nav-link text-uppercase" id="menu" href="contact.php">Contact</a>
      </li>
      <li class="nav-item" id="appoint">
        <a class="nav-link text-uppercase ml-4" href="contact.php?#appointment" data-toggle="tooltip" data-placement="right" title="Great choice">Make Appointment</a>
      </li>
    </ul>
  </div>
</nav> 
  </div>

  <!-- Carousel Start  -->

    <div class="carousel">
      <div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" data-toggle="tooltip" data-placement="top" title="Computer services"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" data-toggle="tooltip" data-placement="top" title="Easy To Use & Customize"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" data-toggle="tooltip" data-placement="top" title="Perfectly Responsive"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="100">      
        <img src="assets/img/carousel1.jpg" height="500" class="d-block w-100 " alt="First Slide" >
        <div class="carousel-caption ">
        <div class="row">
       
        <div class="col-md-12 col-sm-10  slide-2 ">
          <h1 class="font-weight-bold">24/7 HOME SERVICES PROVIDER</h1>
          <h4>Our Experts Diagnosis and Provides Solutions With in 24 Hours!</h4>
          <br><br>
          <a href="contact.php?#appointment"><button class="btn btn-primary rounded-0 btn-lg text-white carousel-button" data-toggle="tooltip" data-placemenet="top" title="That's Great">Make An Appointment</button></a>
        </div>
      </div>
      </div>
    </div>
    <div class="carousel-item" data-interval="100">
      <img src="assets/img/carousel2.jpg" height="500" class="d-block w-100" alt="Second Slide" >
       <div class="carousel-caption">
        <div class="row">
       
        <div class="col-md-12 col-sm-10 slide-2 text-white">
          <h1 class="font-weight-bold ">24/7 HOME SERVICES PROVIDER</h1>
          <h4>Fast Affordable And Same Day!</h4>
          <br><br>
          <a href="contact.php?#appointment"><button class="tn btn-primary rounded-0 btn-lg text-whit carousel-button" data-toggle="tooltip" data-placemenet="top" title="That's Great">Make An Appointment</button></a>
        </div>
        </div>
      </div>
    </div>
    <div class="carousel-item" data-interval=100>
      <img src="assets/img/carousel3.jpg" height="500" class="d-block w-100" alt="Third Slide" >
      <div class="carousel-caption">
        <div class="row">
       
        <div class="col-md-12 col-sm-10 slide-2">
          <h1 class="font-weight-bold ">24/7 HOME SERVICES PROVIDER</h1>
          <h4>Fast And Reliable Computer Services</h4>
          <br><br>
          <a href="contact.php?#appointment"><button class="tn btn-primary rounded-0 btn-lg text-white carousel-button" data-toggle="tooltip" data-placemenet="top" title="That's Great">Make An Appointment</button></a>
        </div>
        </div>
      </div>
  </div>
  
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>

    <br><br><br>
    <!-- Body Start Here -->

    <div class="choose text-center my-5 container-fluid">
        <h1 class="text-uppercase">Why Choose us</h1>        
        <hr class=" mx-auto bg-primary ">

        <br><br>

        <div class="container">
            <div class="row my-5 ">
              <div class="col-md-3 col-sm-10">
                <img src="assets/img/choose1.png" height="100" alt="Computer Repair image loading..">
                <h4 class="my-5">Computer Repair</h4>
                <p>We Fix Warranty and out-of warranty Computer hardware Repairs on Dell,Hp. & Lenovo, Think and Branded Computers .</p>
              </div>
              <div class="col-md-3 col-sm-10">
                <img src="assets/img/choose2.png" height="100" alt="Data Recovery image loading..">
                <h4 class="my-5">Data Recovery</h4>
                <p>We Recover Your Lost or deleted important Data From all Storage Media Safe & Secure Recover Like Hard disk, Pen drives Etc.</p>
              </div>
              <div class="col-md-3 col-sm-10">
                <img src="assets/img/choose3.png" height="100" alt="Web Designing image loading..">
                <h4 class="my-5">Hardware Parts</h4>
                <p>Computer Hardware physical part of Computer Such as The Case (C.P.U) processor Monitor, Mouse, Keyboard, Data store , Graphics Card , Sound Card ,Motherboard Also Available</p>
              </div>
              <div class="col-md-3 col-sm-10">
                <img src="assets/img/choose4.png" height="100" alt="Network Solution image loading..">
                <h4 class="my-5">Network Solutions</h4>
                <p>We Have provide Network Solution Like Investigate , Testing , Troubleshooting , and  evaluate present network systems, such as local area network (LAN), wide area network (WAN), and internet with a wide ranged network system.</p>
              </div>
            </div>
        </div>
    </div>

    <!-- Service Process Start Here -->

    <div class="fast_service">
      <br><br>
      <div class="Service_heading text-center container-fluid">
        <h1 class="mt-5">SERVICES PROCESS</h1>
        <hr class="bg-primary mx-auto">
      </div>

      <div class="row my-5">
        <div class="col-md-4 col-sm-10 text-center my-5">
          <img src="assets/img/feature1.png" height="100" alt="First Service image loading..">
          <h2 class="my-4">Fast Services</h2>
          <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
        </div>
        <div class="col-md-4 col-sm-10 text-center my-5">
          <img src="assets/img/feature2.png" height="100" alt="Second Service image loading..">
          <h2 class="my-4">Secure payments</h2>
          <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
        </div>
        <div class="col-md-4 col-sm-10 text-center my-5">
          <img src="assets/img/feature3.png" height="100" alt="Third Service image loading..">
          <h2 class="my-4">Expert team</h2>
          <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
        </div>
        <div class="col-md-4 col-sm-10 text-center my-5">
          <img src="assets/img/feature4.png" height="100" alt="Fourth Service image loading..">
          <h2 class="my-4">Affordable services</h2>
          <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
        </div>
        <div class="col-md-4 col-sm-10 text-center my-5">
          <img src="assets/img/feature5.png" height="100" alt="Fifth Service image loading..">
          <h2 class="my-4">Parts Warranty </h2>
          <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
        </div>
        <div class="col-md-4 col-sm-10 text-center my-5">
          <img src="assets/img/feature6.png" height="100" alt="Six Service image loading..">
          <h2 class="my-4">Award winning</h2>
          <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
        </div>
      </div>
      <br> 
    </div>

    <!-- Repair And Support All -->

    <div class="support" >
      <div class="support-text text-white ">
        <h1 class="  ml-2">Repair And All Support </h1>
        <hr class="w-25 bg-primary mx-2" />
        <h5 class="ml-2 my-4"><i>Windows/Linux PC And Service Computers.</i></h5>
        <a href="contact.php?#appointment"><button type="button" class="btn btn-outline-primary rounded-0 btn-lg ml-2" data-toggle="tooltip"
        data-placement="bottom" title="Amazing Choice">REQUEST AN ASSISTANCE</button></a>
      </div>
    </div>
  
 
    <!-- Feedback Section Start Here -->

    <div class="feedback">
      <br><br><br><br><br>
      <div class="feedback-tittle text-center">
        <h1 class="font-weight-bold">OUR FEEDBACK</h1>
        <hr class="bg-primary mx-auto" />
      </div>
      <br>
      <div class="row text-center my-5">
        <div class="col-md-3 col-sm-10">   
          <i class="fa fa-smile-o fa-5x text-primary" aria-hidden="true"></i>
          <h4 class="pt-4">Happy Customers</h4>
          <h1 class="font-weight-bold">372</h1>
        </div>
        <div class="col-md-3 col-sm-10">
          <i class="fa fa-laptop fa-5x text-primary" aria-hidden="true"></i>
          <h4 class="pt-4">Laptop Repaired</h4>
          <h1 class="font-weight-bold">197</h1>
        </div>
        <div class="col-md-3 col-sm-10">
          <i class="fa fa-desktop fa-5x text-primary" aria-hidden="true"></i>
          <h4 class="pt-4">Computer Repaired</h4>
          <h1 class="font-weight-bold">348</h1>
        </div>
        <div class="col-md-3 col-sm-10">
          <i class="fa fa-windows fa-5x text-primary" aria-hidden="true"></i>
          <h4 class="pt-4">OS installed</h4>
          <h1 class="font-weight-bold">502</h1>
        </div>
      </div>
      <br><br>
    </div>
    
    <!-- What Our Customer Say -->

    <div class="customer-say py-4">
      <br><br>
      <h1 class="text-center font-weight-bold">WHAT OUR CUSTOMER SAY</h1>
      <br><br>
      <div class="row py-3  ">          
          
            <div class="col-md-2 col-10 text-center">
              <br>
              <img src="assets/img/client1.jpg" height="255" class="py-5 cust-img" alt="Client image loading..">
            </div>            
            <div class="col-md-4 col-10 container-fluid">
              <i class="fa fa-quote-right fa-3x text-primary container-fluid" aria-hidden="true"></i>
              <h4 class="py-3 container-fluid">Exellent service promt response. Keep it up Sai computer team. Any one can trust on sai computer for any queries related to IT Hardware & Software maintenance without any question.</h4>
              <h3 class="container-fluid">Aditya Sharma</h3>
            </div>
         <div class="col-md-2 col-10 text-center">
          <br>
              <img src="assets/img/client2.jpg" class="py-5 cust-img" alt=" Client image loading..">
            </div>            
            <div class="col-md-4 col-10 container-fluid">
              <i class="fa fa-quote-right fa-3x text-primary " aria-hidden="true"></i>
              <h4 class=" py-3 ">So far the best laptop repairing services I have been through...They know the value of your time & money and will deliver the best services possible at a reasonable question.</h4>
              <h3 class="">Vipul Chauhan</h3>
            </div>

      </div>
    </div>

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
                    <i class="fa fa-phone"></i> (+91) 7037323632 <br>
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