<!DOCTYPE html>
<html>

<head>
  <title>IMDb</title>
  <script>
    function validateForm() {
      var y = document.forms["login"]["email"].value;
      if (y == "") {
        alert("Email must be filled out");
        return false;
      }
      var z = document.forms["login"]["psw"].value;
      if (z == "") {
        alert("Password must be filled out");
        return false;
      }
    }
  </script>
  <link rel="stylesheet" type="text/css" href="login.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Fresca&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" />
</head>

<body>
  <nav>
    <ul>
      <li><a class="active" href="./index.html">Home</a></li>
      <li><a href="./about.html">About</a></li>
      <div class="float-right">
        <li><a href="./signin.html">SIGN UP</a></li>
      </div>
    </ul>
  </nav>
  <div id="particles-js">

    <div id="centre">

      <form name="login" onsubmit="return validateForm()" method="post" action="login.php">
        <div class="container">
          <h1>Login In</h1>

          <hr />
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" value=<?php echo Cookie_val(1) ?>>
          <br /><br />
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" value=<?php echo Cookie_val(2) ?>>
          <br /><br />
          <input type="checkbox" name="remuser">Remember Password<br>
          <br />
          <br />

          <button type="button">Cancel</button>
          <button type="submit">Login</button>
        </div>

      </form>

    </div>
  </div>

  <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
  <script>
    particlesJS.load('particles-js',
      'particle.json', function () {
        console.log("Particles Loaded");
      });
  </script>
 <?php
 function Cookie_val($ch){

 if ($ch==1) {
       if (isset($_COOKIE['email']))
       {
             return $_COOKIE['email'];
       }
       else 
             return;
 }
 if($ch==2)
 {
       if (isset($_COOKIE['psw']))
       {
             return $_COOKIE['psw'];
       }
       else 
             return;
 }
 }
?>

</body>
</html>
