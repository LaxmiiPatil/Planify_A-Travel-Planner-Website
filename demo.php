<?php
if(isset($_POST['btn']))
{
    $nm=$_POST['nm'];
    $pass=$_POST['pass'];
    if($nm=="admin" && $pass=="admin123"){
        header('location:admin.php');
    }else{
        echo "<script>alert('Invalid Username or Password')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <style>
        /* Increase font size and make text bold */
h3, label {
    font-size: 22px; /* Increase font size */
    font-weight: bold; /* Make text bold */
    color: black; /* Set text color to black */
}

/* Increase input field font size and change border to black */
.form-control {
    font-size: 18px; /* Increase input text size */
    border: 2px solid black; /* Change border color to black */
    padding: 10px; /* Add some padding for a better look */
    border-radius: 5px; /* Optional: Rounds the corners */
}

/* Increase button font size */
button {
    font-size: 18px;
    font-weight: bold;
    padding: 12px;
    background-color: black; /* Black button */
    color: white; /* White text */
    border: 2px solid black; /* Black border */
    border-radius: 5px;
}

/* Change button color on hover */
button:hover {
    background-color: white;
    color: black;
    border: 2px solid black;
    transition: 0.3s;
}

    </style>
	</head>
	<body>
    < <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Planify</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
           
        </nav>
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Admin Login</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
		<div class="wrapper" style="background-image: url('img/bckg2.jpg');">
            
			<div class="inner">
				<form action="" method="post" enctype="multipart/form-data">
					<h3>Admin Login</h3>
					
						<div class="form-wrapper">
							<label for="">Username</label>
							<input type="text" name="nm" class="form-control">
						</div>
						<div class="form-wrapper">
							<label for="">Password</label>
							<input type="password" name="pass" class="form-control">
						</div>
                       
					<button name="btn" type="submit">Login</button>
				</form>
                
			</div>
		</div>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

