<html>
<title>EVoting</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type=text/css>
	@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
	background-image: url("http://localhost/evoting/bg.jpg");
	background-repeat:no-repeat;
	background-size:1500px,1000px;
}

</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-Voting</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="logina.php"> Admin<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addCandidate.php">Add Candidate</a></li>
          <li><a href="removeCandidate.php">Remove Candidate</a></li>
          <li><a href="viewResultsa.php">View Results</a></li>
        </ul>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="loginv.php"> Voter<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="castVote.php">Cast Vote</a></li>
          <li><a href="viewResultsv.php">View Results</a></li>
        </ul>
      </li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="registera.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
      <li><a href="logina.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<br><br><br>
<marquee style="color: white; font-size: 40px;"> Welcome to E-Voting System</marquee>
</body>
</html>



