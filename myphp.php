<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newDB";

$name = $_REQUEST["name"];
$regno = $_REQUEST["regno"];
$dept = $_REQUEST["dept"];
$email = $_REQUEST["email"];
$pass = $_REQUEST["psw"];

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error)
{
	die("connection failed");
}

$sql = "CREATE DATABASE newDB";

if(mysqli_query($con,$sql))
{
	echo '<script>console.log("Databse created successfully")</script>';

}
else
{
	echo '<script>console.log("Error creating database")</script>';
}

$sql = "CREATE TABLE users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
NAME VARCHAR(30) NOT NULL,
REG VARCHAR(30) NOT NULL,
EMAIL VARCHAR(30) NOT NULL,
DEPT VARCHAR(15) NOT NULL,
PASSWORD VARCHAR(30) NOT NULL,
REG_DATE TIMESTAMP)";

if($con->query($sql) == TRUE) {
	echo '<script>console.log("Table created successfully")</script>';
}
else {
	echo '<script>console.log("Error creating table")</script>';
}

$sql = "INSERT INTO users (NAME,REG,EMAIL,DEPT,PASSWORD) VALUES ('$name','$regno','$email','$dept','$pass')";

if($con->query($sql) == TRUE) {
	echo '<script>console.log("New Record inserted successfully")</script>';
}
else {
	echo '<script>console.log("Error inserting table")</script>';
}

mysqli_close($con);

echo '<script>console.log("success")</script>';
?>

<html>
<head>
 <title>Success</title>
 <link rel="stylesheet" type="text/css" href="myphp.css" />
</head>
<body>
   <div id="particles-js">
	<div >
		<h1 class="ribbon">
		<strong class="ribbon-content">Thank You For Registering   </strong>
		<a href = "./log.php">Login</a>
		</h1>
</div>
</div>


<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<script>
particlesJS.load('particles-js',
'particle.json',function(){
	console.log("Particles Loaded");
});
</script>
</body>
</html>