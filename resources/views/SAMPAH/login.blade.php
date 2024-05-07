<!DOCTYPE html>
<html>
<head>
  <title>Login iDestinasi</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
			<img src="./asset/81f32e54615ba4c21b72403afd2d672c81f32e54615ba4c21b72403afd2d672c.png" width="1000" height="900">
              <div class="logo">
                <img src="./asset/logoIDestinasi.png" alt="idestinasi" />
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
				<button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Lanjutkan dengan Google</small></button>
            </form>
        </div>
    </div>
  <style>
    *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body{
    font-family: 'DM Sans', sans-serif;
    overflow: hidden;
}

.container{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap :7rem;
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.login-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.img img{
	width: 500px;
}

form{
	width: 360px;
}

.login-content img{
    height: 100px;
}

.login-content h2{
	margin: 15px 0;
	color: #333;
	text-transform: uppercase;
	font-size: 2.9rem;
}

.login-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.login-content .input-div.one{
	margin-top: 0;
}

.i{
	color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
}

.i i{
	transition: .3s;
}

.input-div > div{
    position: relative;
	height: 45px;
}

.input-div > div > h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-size: 18px;
	transition: .3s;
}

.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #38d39f;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus > div > h5{
	top: -5px;
	font-size: 15px;
}

.input-div.focus > .i > i{
	color: #38d39f;
}

.input-div > div > input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.5rem 0.7rem;
	font-size: 1.2rem;
	color: #555;
	font-family: 'poppins', sans-serif;
}

.input-div.pass{
	margin-bottom: 4px;
}


.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}


@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
		width: 290px;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 900px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}

	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.login-content{
		justify-content: center;
	}
}
    </style>
    <script>
      
    </script>
</body>

</html>