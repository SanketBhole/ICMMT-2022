<?php
// (A) LOGIN CHECKS
require "login.php";
?> 
<!-- // (B) LOGIN PAGE HTML -->
<?php if (isset($failed)) { ?>
<div id="bad-login">Invalid user or password.</div>
<?php } ?>

<!--  
<form id="login-form" method="post" target="_self">
  <h1>PLEASE SIGN IN</h1>
  <label for="user">User</label>
  <input type="text" name="user" required/>
  <label for="password">Password</label>
  <input type="password" name="password" required/>
  <input type="submit" value="Sign In"/>
</form> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Fontawesome Icons CSS Link -->
   <link rel="stylesheet" type="text/css" href="/fa-icon_v6_pro/css/all.css">

   <!-- Site Logo -->
	<link rel="icon" type="image/png" href="/images/BGI.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ICMMT 2022</title>
	<style>
		body{
			background-color:#40d0c636;
			box-sizing: border-box;
		}
		*{
			box-sizing: border-box;
		}
		.header{
			color: white;
			font-family: 'Century';
			font-weight: 500;
			background-color: #40d0c6;
		}
		@media screen and (max-width: 767.20px) {
			div.logo{
			margin-left:70px;
			}
			div.title{
			text-align:center;
			margin-top:-20px;
			
			}
		}
		.navbar{
			background-color: #40d0c6;
		}
		.navbar a{
			text-decoration: none;
			color: white;
			font-size: 18px;
			font-weight: 500;
		}
		nav ul li:hover{
			background-color: #00bdb0;
		}
		.img-responsive{
			max-width: 100%;
			height: auto;
		}
		.gmorph{
			background-color: #ffffff10;
			backdrop-filter: blur(12px);
			border-radius: 12px;
			text-shadow: 0 0 20px #40d0c6;
		}
		.sidebar .heading{
			color: white;
			
			background: #40d0c6 url(/images/boxtitle.png) no-repeat left center;
		}
		.sidebar ul li{
			padding: 2%;
			font-size: 16px;
			color:#40d0c6;
		}
		.sidebar ul li a{
			color:black;
			text-decoration: none;
		}
		.sidebar ul li a:hover{
			color:rgb(0, 132, 255);
		}
		.sidebar .content p{
			font-size: 15px;
		}
		.sidebar .content img{
			border: 10px solid #DFDDE2;
		}
		.sidebar .content i{
			color: #40d0c6;
			font-size: 20px;
		}
		.footer{
			background-color:rgb(0, 0, 0);
		}
		.style4{
			color: white;
		}
		.style5{
			color: white;
		}
		.style6 ul li{
			color: white;
		}
		.style6 ul li a{
			text-decoration: none;
			color: white;
		}
		.style6 ul li a:hover{
			color:rgb(0, 132, 255);
		}
		#copyright{
			color: #40d0c6;
		}
		</style>
</head>
<body>

	<!-- Header Section -->
	<section class="container-fluid header">
		<div class="row">
			<div class="col-md-2 offset-md-2 text-center pt-3 pb-4">
				<img src="/images/bansal.png" class="img-responsive" alt="logo" width="250" height="100">
			</div>
			<div class="col-md-8 pt-3 pb-3 title">
				<h1>ICMMT 2022</h1>
				<h5>International Conference on Material Science, Mechanics and Technology</h5>	
			</div>
		</div>	
	</section>
	<!-- Header Section End -->

	<!-- Container Section -->
	<div class="container">
		<!-- Nav Bar Section -->
		<section class="mt-3 mb-3">
			<nav class="navbar navbar-expand-lg">
			
				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon">
					<i class="fa fa-bars" style="color: white;font-size: 30px;"></i>
				</span>
				</button>
			
				<!-- Navbar links -->
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item p-2 ">
                            <a class="nav-link" href="/index.php">Home</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/pages/callForPaper.html">Call for papers</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/pages/committee.html">Committee</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/pages/keyNote.html">Keynote Speakers</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/pages/registrationFee.html">Registration Fee</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/pages/publication.html">Publication</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/pages/organizer.html">Organizers</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="/pages/contacts.html">Contact Us</a>
                        </li>
                    </ul>
				</div>
			</nav>
		</section>
		<!-- Navbar Section End -->

        <!-- Body Section  -->
        <section class="container"  style="background-color:white; height: 400px;">
            <div>
                <h4>&nbsp;</h4>
                <h4 class="style1 text-center"><font color="#40d0c6" font-weight:bold>ADMIN LOGIN</font></h4>
				<h4>&nbsp;</h4>
            </div>
			<div>
            <form class="text-center" method="post" target="_self">
                <div class="row justify-content-center">
                    <div class="col-sm-5">
                        <input type="text" class="form-control text-center" id="email" placeholder="Enter User Id" name="user">
                    </div>
                </div>
                <br>
                <div class="row  justify-content-center">
                    <div class="col-sm-5">
                        <input type="password" class="form-control text-center" placeholder="Enter Password" name="password">
                    </div>
                </div>
				<br>	
                <button type="submit" class="btn btn-primary" style="background-color:#40d0c6; border:none;">Log In</button>
            </form>
            <br>
            </div>
        </section>
		
    </div>
    <!-- Container Section End -->
<script src="js/wow.js"></script>
<script>
   wow = new WOW({}).init();
</script>	
</body>
</html>