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
	$key = $_POST['key'];
	$query= "DELETE FROM `addCandidate` WHERE `addCandidate`.`id`=$key";
	mysqli_query($conn,$query);
	header('location:removeCandidate.php');
}
?>

<!DOCTYPE html>
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
	color: white;
	text-align: center;

}
th{
	color: white;
	text-align: center;
	font-size: 15px;

}
table{
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: rgba(0,0.8,0,0.6);
    width:400px;
    height:550px;
    border-radius: 7%;
    padding: 25px;
    color: white;
    text-align: center;
}
.bt{
  background: none;
  border-radius: 15px;
  border: 3px solid;
  color: white;
  padding: 2px;
  font-size: 15px;
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


<form action="removeCandidate.php" method="post" enctype="multipart/form-data" role="form">
<table>
<thead>
<tr>
	<th colspan=2>
	</br>
	<center>Remove Candidates</center>
	</br>
	</th>
</tr>
</thead>
<thead>
<tr>
	<th>Name</th>
	<th>Info</th>
	<th>Image</th>
	<th>Choose</th>
</tr>
</thead>
<?php
	$conn=mysqli_connect("localhost","root","","Project") or die (mysql_error());
	$select='SELECT * FROM addCandidate';
	$result=mysqli_query($conn,$select);
	
	while($row = mysqli_fetch_array($result)){
		?>
		<tr><td><?php echo $row['name'];?></td>
		<td><?php echo $row['info'];?></td>
		<td><img src="image/<?php echo $row['image'];?>"width=100 height=100></td>
		<td><input type="checkbox" name="key" value="<?php echo $row['id'];?>" ></td>
		<td><input type="submit" class="bt" name="submit" value="Delete"></td>
</tr>
	<?php
	}
?>	
</table>
</body>
