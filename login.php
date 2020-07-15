<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newDB";

$email = $_REQUEST["email"];
$pass = $_REQUEST["psw"];

$con = new mysqli($servername,$username,$password,$dbname);


$sql_query = "select count(*) as user from users where email='".$email."' and password='".$pass."'";
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);

$count = $row['user'];

if($count > 0){
    if (isset($_POST['remuser'])){
setcookie("email",$email,time()+60*60*24);
setcookie("psw",$pass,time()+60*60*24);
}
else
{
setcookie("email","",time()-5);
setcookie("psw","",time()-5);
}
}
        
if($count > 0){
     header("Location: search.html");
    }
else{
  header("Location: signin.html");
    }

?>
 