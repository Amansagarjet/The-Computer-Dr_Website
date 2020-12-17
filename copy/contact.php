<?php 

   // Mail Send code
    
        
		
		$result="";
		if(isset($_POST['submit_btn'])){
			require 'phpmailer/PHPMailerAutoload.php';
			$mail = new PHPMailer;
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls';
			$mail->Username = 'support@thecomputersdr.com';
			$mail->Password = 'support@122';

			$mail->setFrom($_POST['email'],$_POST['name']);
			$mail->addAddress('info@thecomputersdr.com');
			$mail->addReplyTo($_POST['email'],$_POST['name']);

			$mail->isHTML(true);
			$mail->Subject = 'Regarding: ' .$_POST['service'];
			$mail->Body='<h2 align=left>Name: '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Contact: '.$_POST['contact'].'<br>City: '.$_POST['city'].'<br>Service: '.$_POST['service'].' <br>Message: '.$_POST['message'].'</h2>';

			if(!$mail->send()){
				$result="Something went wrong. please try again.";
		
			}else{
				$result="Thanks " . $_POST['name'] . " for contacting us we will get back to you soon";

			}
			
			    include'includes/init.php';
              if(isset($_POST['submit_btn'])){
              $name = $_POST['name'];
              $email = $_POST['email'];
              $contact = $_POST['contact'];
              $city = $_POST['city'];
              $service = $_POST['service'];
              $message = $_POST['message'];
              $qry = "INSERT INTO users (name,email,contact,city,service,message) VALUES ('$name','$email','$contact','$city','$service','$message')";
              $res = mysqli_query($con,$qry);
            }
			
		}

 ?>
 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact us</title>

	<!-- CSS File -->
	<link rel="stylesheet" type="text/css" href="assets/css/contact.css">

	<!-- Tittle icon -->
  	<link rel="icon" href="assets/img/icon.png">

	<!-- Bootsrap 4.5 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

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
		
		<div class ="alert alert-success text-center">
		    <?php echo $result; ?>
		</div>

	<div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
  <a class="navbar-brand font-weight-bold ml-4" id="logo" href="index.php">TheComputersDr.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto font-weight-bold">
      <li class="nav-item activ">
        <a class="nav-link text-uppercase ml-4" id="menu" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-uppercase ml-4" id="menu" href="about.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-uppercase ml-4" id="menu" href="services.php">Services</a>
      </li>
      <li class="nav-item ml-4" id="active_page">
        <a class="nav-link text-uppercase"  href="contact.php">Contact</a>
      </li>
      <li class="nav-item" id="appoint">
        <a class="nav-link text-uppercase ml-4" data-toggle="tooltip" data-placement="right" title="Great choice" href="contact.php?#appointment">Make Appointment</a>
      </li>
    </ul>
  </div>
</nav> 
  </div>
	
	<!--  Background Section Start Here  -->
	<div class="contact_bg">
		
	</div>
  
	<br>
	
		<div class="">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9747354807355!2d77.27512521440715!3d28.63051929092426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfcad2277af7d%3A0xe68dd5cbcfe7d692!2sLaxmi%20Nagar%20Metro%20Station!5e0!3m2!1sen!2sin!4v1593460016089!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>

	<br><br  id="appointment"><br><br>
		<!--  Body Section Start Here  -->
	<div class="contact_body ">
		<div class="text-center ">
			<h1 class="text-uppercase">Contact us</h1>
			<hr class="mt-3 mx-auto bg-primary" />
		</div>
		<br>

		<div class="row py-5">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-5 col-sm-12 get-in-touch-with-us ">
                <h3 class=" text-uppercase pl-2">Get in touch with us :</h3>
                <address class="pl-2">
                  <i class="fa fa-home fa-2x my-3 mr-4"></i>
                    Head Office U-149 Laxmi Nagar 
                    <div class="address-right">New Delhi 110092 </div>
                  <i class="fa fa-home fa-2x my-3 mr-4"></i>
                    Primary Branch: Thakurdwara 
                    <div class="address-right">Moradabad UP 244601 India</div>
                    <i class="fa fa-home fa-2x my-3 mr-4"></i>
                    Secondary Branch: Chandausi 
                    <div class="address-right">Sambhal UP 244412 India</div>                  
                <p>
                  <br>
                  <i class="fa fa-phone fa-2x  pr-4"></i> (+91) 8279416143 <br>
                  <i class="fa fa-phone fa-2x pb-4 pr-4"></i> (+91) 7037323632 <br>
                  <i class="fa fa-envelope fa-2x  pr-4"></i> support@thecomputersdr.com
                  <br>
                  <i class="fa fa-envelope fa-2x pr-4 mb-4"></i> info@thecomputersdr.com
                </p>
               </address>
			</div>
			
			<div class="col-md-6 col-sm-12 ">
				<h3 class="text-uppercase pl-2">Request Call Back</h3>


				<form action="contact.php" method="POST" onsubmit=" return validation()" class=" form-group my-5" autocomplete="off">

          <div class="form-group">
            <input type="text"  class="form-control" id="username" name="name" placeholder="Your Name">
            <span id="name_msg" class="text-danger"></span>
          </div>

					<div class="form-group">
            <input type="text" class="form-control my-4" id="useremail" name="email" placeholder="Your E-mail">
            <span id="email_msg" class="text-danger"></span>
          </div>

					<div class="form-group">
            <input type="phone" class="form-control" id="usercontact" name="contact" placeholder="Your Contact">
            <span id="contact_msg" class="text-danger"></span>
          </div>

          <div class="form-group">
            <input type="text" class="form-control mt-4" id="usercity" name="city" placeholder="Your Locality">
            <span id="city_msg" class="text-danger"></span>
          </div>

					<div class="form-group">
            <select class="form-control my-4" id="userservice" name="service">
            <option>Select Service</option>
            <option>Desktop & Laptop</option>
            <option>Hardware & Software</option>
            <option>Windows installation</option>
            <option>Web designing & Development</option>
            <option>Annual Maintenance</option>
            <option>Network Support</option>
            <option>Data Recovery</option>
            <option>Virus Problem</option>
            <option>Printer & Catridge</option>
          </select>
          <span id="service_msg" class="text-danger"></span>
          </div>

           <div class="form-group">
             <textarea class="form-control" id="usermessage" name="message" placeholder="Write your message" rows="4"></textarea>
             <span id="message_msg" class="text-danger"></span>
           </div>         
					
					<br>
					<button type="submit" class="btn rounded-0 text-white" id="submit-button" name="submit_btn">SEND</button>
				</form>
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

  // Form Validation Scripts in Javascript.

  function validation(){

    var name = document.getElementById('username').value;
    var email = document.getElementById('useremail').value;
    var contact = document.getElementById('usercontact').value;
    var city = document.getElementById('usercity').value;
    var service = document.getElementById('userservice').value;
    var msg = document.getElementById('usermessage').value;

    // Validation For User name

    if(name == ""){
      document.getElementById('name_msg').innerHTML = "Please fill your name";
      return false;
    }

    if((name.length <= 2 || name.length > 20 )){
      document.getElementById('name_msg').innerHTML = "Minimum 2 and Maximum 20 characters are allowed";
      return false;
    }

    if(!isNaN(name)){
      document.getElementById('name_msg').innerHTML = "Only characters are allowed";
      return false;
    }

    // Validation for User E-mail

    if(email == ""){
      document.getElementById('email_msg').innerHTML = "Please fill your email";
      return false;
    }

    if(email.indexOf('@') <= 0){
      document.getElementById('email_msg').innerHTML = "invalid email";
      return false;
    }

    if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
      document.getElementById('email_msg').innerHTML = "invalid email";
      return false;
    }

    // Validation for User Contact Number

    if(contact == "" ){
      document.getElementById('contact_msg').innerHTML = "Please fill your contact number";
      return false;
    }

    if(isNaN(contact)){
      document.getElementById('contact_msg').innerHTML = "Only digits are allowed";
      return false;
    }

    if(contact.length!=10){
      document.getElementById('contact_msg').innerHTML = "Only 10 digits are allowed";
      return false;
    }


    // Validation for User City

    if(city == ""){
      document.getElementById('city_msg').innerHTML = "Please fill your city";
      return false;
    }

    if(!isNaN(city)){
      document.getElementById('city_msg').innerHTML = "Only characters are allowed";
      return false;
    }

    if((city.length <= 4 || city.length > 25)){
      document.getElementById('city_msg').innerHTML = "Minimum 4 and maximum 25 characters are allowed";
      return false;
    }

    // Validation for Services

    if(service == ""){
      document.getElementById('service_msg').innerHTML = "Please select your service";
      return false;
    }

    // Validation for Messages

    if(msg == ""){
      document.getElementById('message_msg').innerHTML = "Please fill your message";
      return false;
    }

    if(!isNaN(msg)){
      document.getElementById('message_msg').innerHTML = "Only characters are allowed";
      return false;
    }

    if((msg.length <= 4 || msg.length > 100)){
      document.getElementById('message_msg').innerHTML = "Minimum 4 and maximum 100 characters are allowed";
      return false;
    }
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