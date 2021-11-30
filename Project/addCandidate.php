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
    height:350px;
    border-radius: 7%;
    padding: 25px;
    color: white;
}
input{
	margin: auto;
}
input[type=text]{
  color: black;
}
.bt{
  background: none;
  border-radius: 15px;
  border: 3px solid olive;
  color: white;
  padding: 2px;
  font-size: 20px;
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
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logina.php"> Log Out <span class="glyphicon glyphicon-log-out"></span> </a></li>
    </ul>
  </div>
</nav>
<br><br><br>

<form action="addCandidate.php" method="post" enctype="multipart/form-data">
<table>
<tr>
	<td colspan=2 align="center"><b>Add Candidate<br></b></td>
</tr>
<tr>
	<td><i class="fas fa-user-circle"></i>Name:</td>
	<td><input type="text" name="name" placeholder="Enter your name" required/></td>
</tr>
<tr>
	<td><i class="fa fa-id-card">Info:</td>
	<td><input type="text" name="info" placeholder="Enter candidate info" required/></td>
</tr>
<tr>
	<td colspan=2><input type="file" name="file" id="image"></td>
</tr>
<tr>
	<td colspan=2 ><input type="submit" value="Submit" name="submit" class="bt"></td>
</tr>
</body>
</html>

<?php
error_reporting(0);
?>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","Project") or die (mysql_error());
if(!isset($_SESSION['id'])){
	header("location:logina.php");
}
if(isset($_POST["submit"])){
	$name= $_POST['name'];
	$info= $_POST['info'];
	$image = $_FILES["file"];
	$image = $_FILES["file"]["name"];
	$tempname = $_FILES["file"]["tmp_name"];
	$folder = "image/".($image);
	$create="CREATE TABLE IF NOT EXISTS Project.addCandidate ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `info` VARCHAR(500) NOT NULL , `image` VARCHAR(200) NOT NULL , PRIMARY KEY (`id`))";
	mysqli_query($conn,$create);
	$insert="insert into addCandidate (name,info,image) values('$name','$info','$image')";
		if(mysqli_query($conn,$insert)){
			move_uploaded_file($tempname,"$folder");
			echo "<script>alert('Candidate registered successfully')</script>";
		}
		else{
			echo "Error is:" . mysqli_error($conn);
		}
}
?>
