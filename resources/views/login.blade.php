<!DOCTYPE html>
<html>
<head>
  <title>Login iDestinasi</title>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/login.css" />
</head>
<?php
  if (isset($_POST['login'])) {
    // Get the user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Define the valid email and password
    $valid_email = "example@example.com";
    $valid_password = "password";

    // Validate the user input
    if ($email == $valid_email && $password == $valid_password) {
      // Set the session variables
      session_start();
      $_SESSION['email'] = $email;

      // Redirect the user to the dashboard page
      header("Location: dashboard.php");
    } else {
      // Display an error message
      echo "<div class='error-message'>"
           . "Login failed. Please check your email and password."
           . "</div>";
    }
  }
  ?>
<body>
	<div class="container">
		<div class="img">
			<img src="asset/81f32e54615ba4c21b72403afd2d672c81f32e54615ba4c21b72403afd2d672c.png" width="1000" height="900">
              <div class="logo">
                <img src="asset/logoIDestinasi.png" alt="logoIDestinasi.png">
                <h4>iDestinasi</h4>
              </div>
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="img/avatar.svg">
				<h2 class="title">Selamat Datang <span>👋</span></h2>
				<h3>Lanjutkan dengan Google atau Masukkan Detail Login</h3>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Alamat</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Kata Sandi</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Masuk">
				<small>Belum punya akun? <a href="#">Buat Akun</a></small>
				<button class="btn btn-lg btn-light w-100 fs-6"><img src="asset/google.png" style="width:20px" class="me-2"><small>Lanjutkan dengan Google</small></button>
            </form>
        </div>
    </div>  
    <script>
      
    </script>
</body>

</html>