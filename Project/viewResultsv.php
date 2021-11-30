<?php
$conn=mysqli_connect("localhost","root","","Project") or die (mysql_error());
$query = "SELECT name,count FROM `addCandidate`";
$result = mysqli_query($conn , $query);

$resultCount=$result->num_rows;

$color = ['#dc7877','#9cbb73','#9ee2d9','#9f9ee2','#e29eba'];
$name = array();
$count = array();

foreach ($result as $row) {
    $name[] = $row['name'];
    $count[] = $row['count'];
}

?>

<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawBarBasic);

    function drawBarBasic() {

      var data = new google.visualization.arrayToDataTable([
         ['Candidates', 'Votes', { role: 'style' }, { role: 'annotation' }],
        <?php
        for($i=0;$i<$resultCount;$i++){
          ?>[<?php echo "'".$name[$i]."', ".$count[$i].", '".$color[$i]."' , "."'".$count[$i]."'" ?>],
        <?php } 
        ?>
        ]);

      var options = {
    	    title: "Votes rewarded to candidate",
        chartArea: {width: '100%'},
        chartArea: {height: '75%'},
        hAxis: {
          title: 'Total Votes',
          minValue: 10
        },
        vAxis: {
          title: 'Candidate'
        },
        legend: { position: "none" }
      };

      var chart = new google.visualization.BarChart(document.getElementById('bar-chart'));
      chart.draw(data, options);
    }
  </script>
<style>
body{
	background-image: url("http://localhost/Project/bg.jpg");
	background-repeat:no-repeat;
	background-size:1500px,1000px;
	color: white;
}
.fill{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: rgba(0,0.8,0,0.6);
    width:700px;
    height:300px;
    border-radius: 20px;
    padding: 50px;
    color: white;
}
.heading{
	text-align: center;
	font-size: 40px;
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
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="loginv.php"> Voter<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="castVote.php">Cast Vote</a></li>
          <li><a href="viewResults.php">View Results</a></li>
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
    <div class="fill" id="chart_container">
      <div id="bar-chart" class="chart-div"></div>
  </div>
    <div>
	<div class="heading"> Results of the Election </div> 
    <div>
  </body>
</html>


