<html>
<title>E-voting</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
  body{
  background-image: url("http://localhost/evoting/bg.jpg");
  background-repeat:no-repeat;
  background-size:1500px,1000px;
}

.fill{
    position: absolute;
    top: 75%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: rgba(0,0.8,0,0.6);
    width:560px;
    height:650px;
    border-radius: 20px;
    padding: 50px;
    color: white;
}
 input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    color: black;
  }

  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }
  .align{
    margin-left: 240px;
  }
</style>
<body>

<form action="" method="POST">

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
      <li><a href="loginv.php"> Log Out <span class="glyphicon glyphicon-log-out"></span> </a></li>
    </ul>
  </div>
</nav>
  <b><p align="center" style="font-size:30px">Contact Us</b></p><br><br>
    <div class="fill">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name.." required="">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name.." required="">

      <label for="lname">Email</label>
      <input type="text" id="email" name="emails" placeholder="@gmail.com" required>


      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="India">INDIA</option>
      </select>

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" required placeholder="Write something.." style="height:150px"></textarea><br><br><br>

      <input type="submit" class="align" name="submit" value="Submit">

  </div>

</form>
</body>
</html>


<?php
session_start();
$conn=mysqli_connect("localhost","root","","Project") or die (mysql_error());
if(isset($_POST["submit"]))
{
	$fname= $_POST['firstname'];
	$lname= $_POST['lastname'];
	$email= $_POST['emails'];
	$country= $_POST['country'];
	$feedback= $_POST['subject'];
	$create="CREATE TABLE IF NOT EXISTS Project.feedback ( fname VARCHAR(50) NOT NULL , lname VARCHAR(50) NOT NULL , email VARCHAR(30) NOT NULL , country VARCHAR(20) , feedback VARCHAR(200) NOT NULL)";
	mysqli_query($conn,$create);
	$insert="insert into Project.feedback (fname,lname,email,country,feedback) values('$fname','$lname','$email', '$country' , '$feedback')";
	mysqli_query($conn,$insert);
}
?>
