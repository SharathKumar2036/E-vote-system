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
      <li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="loginv.php"> Voter<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="castVote.php">Cast Vote</a></li>
          <li><a href="viewResultsv.php">View Results</a></li>
        </ul>
      </li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="registerv.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
    </ul>
  </div>
</nav>
<br><br><br>
<form action="" method="post">
<table>
<tr>
	<td colspan=2 align="center"><b>Login<br><br></b></td>
</tr>
<tr>
	<td><i class="fas fa-user-circle">User Id:</td>
	<td><input type="text" name="id" placeholder="Enter your Id" required>
</tr>
<tr>
	<td><i class="fas fa-lock">Password:</td>
	<td><input type="password" name="password" placeholder="Enter your Password" required>
</tr>
<tr>
	<td colspan=2 align="center"><input type="submit" class="bt" name="login" value="Login">
</tr>
<tr><td colspan=2 align=right>If not registered!<a href="registerv.php">  Sign Up  </a></td></tr>
</table>
</body>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","Project") or die (mysql_error());
if(isset($_POST["login"])){
	$id=$_POST['id'];
	$password=$_POST['password'];

	if(!empty($id) && !empty($password)){
		$query="select * from voterSignup where id='$id' and password='$password'";
		$res=mysqli_query($conn,$query);
		$count=mysqli_num_rows($res);
		if($count!=0){
			$_SESSION['id']=$id;
			header('location:castVote.php');
		}
		else{
			echo '<script>alert("Incorrect id or password")</script>';
		}
	}
else{
	echo "Please enter required fields";	
}
}
?>
