	<html>
	<title>E-Voting</title>
	<head>
	<link rel="stylesheet" href="">
	</head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	body{
		background-image: url("http://localhost/evoting/bg.jpg");
		background-repeat:no-repeat;
		background-size:1500px,1200px;
	}
	table{
	    position: absolute;
	    top: 55%;
	    left: 10%;
	    transform: translate(-20%,-50%);
	    background: #C0C0C0;
	     height:90px;
	    width:550px;
	    border-radius: 10px;
	    padding: 28px;
	    color: solid black;
	    text-align: center;
	   
	}
	table.t1{
	    position: absolute;
	    top: 55%;
	    left: 60%;
	    transform: translate(-20%,-50%);
	    background: #C0C0C0;
	     height:380px;
	    width:550px;
	    border-radius: 10px;
	    padding: 10px;
	    color: solid black;

	}
	table.t2{
	     height:250px;
	    width:450px;

	}
	.center{
	 
	  width: 30%;
	  height: 20%;
	  margin-right: -1%;
	  border-radius: 2px; 
	}
	.center1{
	 
	  width: 30%;
	  height: 20%;
	  margin-left: 4%;
	  border-radius: 2px; 
	}
	.center2{
	 
	  width: 30%;
	  height: 20%;
	  margin-left:3%;
	  border-radius: 2px; 
	}


		@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
	</style>
	<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-Voting</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
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
     <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<br><br><br>
	<table class=t2>
		<tr>
			<td colspan="0">This is Online Voting System.This project was made during 3rdyear of B.tech(CSE).
				This can be used to caste a vote from anywhere without going to any physical polling station.And this is less time taking process,also provides integrity of your vote by preventing voters from being able to vote multiple times<br><br><br>
	<b>FRONTEND:</b>HTML,CSS,BootStrap<br><br><b>BACKEND:</b>PHP, MYSQL, phpMyAdmin, XAMPP</tr>
<table class="t1"><td>
		<b><p align="center" style="font-size:25px"> Team of Project</b> </p>Our team who build E-Vote System website to run secure votes and cast your vote in elections online with better frontend and backend skills.<br><br>
		<p>MITHUN CHAKRAVARTHY : FrontEnd</p>
		<p>RASHEEDHA : Frontend</p>
		<p>SANTHOSH : FrontEnd</p>
		<p>SUPRAJA : BackEnd</p>
		<p>SHARATH KUMAR : BackEnd</p>

	</table> 
	</table>
	</body>
	</html>
