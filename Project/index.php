<?php
session_start();
$conn=mysqli_connect("localhost","root","","Project") or die (mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		E-Voting
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

	
</head>
<body>

	<header class="fixed-top">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    				<span class="navbar-toggler-icon"></span>
  				</button>
  				<a class="navbar-brand mr-auto" href="#"><img src="ballot_box.png" alt="logo" style="width: 43px;">
  					<label class="font-weight-bold">EVoting</label></a>
  				<div class="collapse navbar-collapse" id="collapsibleNavbar">
				
				<ul class="navbar-nav ml-auto">
						<li class="active nav-item"><a href="#" class="nav-link"><span class="fas fa-home">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="logina.php">Admin</a></li>
						<li class="nav-item"><a class="nav-link" href="loginv.php">Voter</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Conatct</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
					</ul>
					</div>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="loginv.php"><button type="button" class="btn btn-success"><i class="fas fa-sign-in-alt"></i>Login</button></a></li>
						<li class="nav-item"><button type="button" class="btn btn-light"><i class="fas fa-sign-out-alt"></i>Logout</button></li>
					</ul>
				</div>
		</nav>
	</header> 
	<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5">
              <h1>online Voting Platform</h1>
              <h2>Evoting is an e-voting platform which allows you to create and manage elections</h2>
              <a href="loginv.php" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>




    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>You could not Live with your own failure ,Where did that bring you? Back to me</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="fas fa-map-marker-alt"></i>
                  <h3>Our Address</h3>
                  <p>Ongole, India</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="fas fa-envelope"></i>
                  <h3>Email Us</h3>
                  <p>evote@yahoo.com<br>suprajavinayakam@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="fas fa-phone"></i>
                  <h3>Call Us</h3>
                  <p>+91 9834561270<br>+91 7983214560</p>
                </div>
              </div>
            </div>

          </div>


    <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>EVoting<span>.</span></h3>
            <p>
              Ongole <br>
              Andhra Pradesh<br>
              India<br><br>
              <strong>Phone:</strong> +91 7095770447<br>
              <strong>Email:</strong> suprajavinayakam@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="loginv">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>EVoting</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        
      </div>
    </div>
  </footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
