<!DOCTYPE html>
<html>
<title>E-Voting</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type=text/css>
	@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
	background-image: url("http://localhost/Project/bg.jpg");
	background-repeat:no-repeat;
	background-size:1500px,1000px;
}
td{
	color:white;
	text-align: center;

}
table{
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: rgba(0,0.8,0,0.6);
    width:400px;
    height:450px;
    border-radius: 7%;
    padding: 25px;
    color: white;
}
input[type=text]{
  color: black;
}
input[type=email]{
  color: black;
}
input[type=num]{
  color: black;
}
input[type=password]{
  color: black;
}

.bt{

  width: 100%;
  background: none;
  border-radius: 15px;
  border: 3px solid olive;
  color: black;
  padding: 2px;
  font-size: 30px;
  cursor: pointer;
  margin: 9px 0;
}
.bt:hover {
  background-color: lightblue;
  transition: 0.8s;
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
      <li><a href="logina.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<br><br><br>
<form action="" method="post">
<table>
<tr>
	<td colspan=2 align="center"><b>Registration Form<br><br></b></td>
</tr>
<tr>
	<td><i class="fas fa-user-circle"></i>Name:</td>
	<td><input type="text" name="name" placeholder="Enter your name"  pattern="[a-zA-Z]+" required/>
</tr>
<tr>
	<td><i class="fa fa-id-card">Id:</td>
	<td><input type="text" name="id" placeholder="Enter your id" required/>
</tr>
<tr>
	<td><i class="fas fa-envelope">E-mail id:</td>
	<td><input type="email" name="email" placeholder="Enter your email id"/>
</tr>
<tr>
	<td><i class="fas fa-phone">Phone number:</td>
	<td><input type="num" name="ph_no" placeholder="Enter your Phone no" pattern="^[789]\d{9}$" required/>
</tr>
<tr>
	<td><i class="fas fa-lock">Password:</td>
	<td><input type="password" name="password" placeholder="Enter your Password" title="Password is not strong" required/>
</tr>
<tr>
	<td><i class="fas fa-key">Confirm Password:</td>
	<td><input type="password" name="cpassword" placeholder="Re-enter your Password" required/>
</tr>
<tr>
	<td colspan=2><input type="submit" class="bt" name="signin" value="Register"/></td>
</tr>
</table>
</body>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","Project") or die (mysql_error());
if(isset($_POST["signin"]))
{
	$name= $_POST['name'];
	$id= $_POST['id'];
	$email= $_POST['email'];
	$ph_no= $_POST['ph_no'];
	$password= $_POST['password'];
	$cpass= $_POST['cpassword'];
	
	if(!empty($name) && !empty($id) && !empty($ph_no) && !empty($password) && !empty($cpass)){
		if($password==$cpass){
			$create="CREATE TABLE IF NOT EXISTS Project.adminSignup ( name VARCHAR(50) NOT NULL , id VARCHAR(20) NOT NULL , email VARCHAR(30) NULL , ph_no BIGINT(15) NOT NULL , password VARCHAR(15) NOT NULL , cpassword VARCHAR(15) NOT NULL,status INT(11) NULL)";
			mysqli_query($conn,$create);
			$s= "select * from Project.adminSignup where id ='$id'";
			$result=mysqli_query($conn,$s);
			if(mysqli_num_rows($result) == 1){
				echo '<script>alert("Already Registered!!")</script>';
			}
			else{
				$insert="insert into Project.adminSignup (name,id,email,ph_no,password,cpassword) values('$name','$id','$email','$ph_no','$password', '$cpass')";
			if(mysqli_query($conn,$insert)){
				echo '<script>alert("Registered Successfully")</script>';
			}
			else{
				echo "Error is:" . mysqli_error($conn);
			}
		}
		}
		else{
			echo '<script>alert("Passwords are not matching.Please enter correct password")</script>';
		}
	}
}
?>
