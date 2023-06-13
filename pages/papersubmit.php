<?php
        if(isset($_POST['submit'])){
            
            $file_name = $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];
            $file_size = $_FILES['file']['size'];
            $file_tem = $_FILES['file']['tmp_name'];

            move_uploaded_file($file_tem,"upfiles/".$file_name);

            // Set connection variables
            // $server = "sql204.unaux.com";
            // $username = "unaux_31272816";
            // $password = "unauxSanket";

            // Set connection variables
            $server = "localhost";
            $username = "root";
            $password = "";

            // Create a database connection
            $con = mysqli_connect($server, $username, $password);

            // Check for connection success
            if(!$con){
                die("connection to this database failed due to" . mysqli_connect_error());
            }

            // Collect post variables
            $title = $_POST['title'];

            $sql1 = "INSERT INTO `icmmt`.`files`(`PaperTitle`,`File`) VALUES ('$title','$file_name')";
            
            // Execute the query
            if(mysqli_query($con, $sql1)){
                // Flag for successful insertion
                // Collect post variables
                // $title = $_POST['title'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
               
                
                foreach($name as $key => $value){
                    $sql2 = "INSERT INTO `icmmt`.`paper`(`PaperTitle`,`AuthorName`, `Email`, `Mobile`) VALUES ('".$title."','".$name[$key]."','".$email[$key]."','".$mobile[$key]."')";
                    $insert = mysqli_query($con,$sql2);
                }
                // echo $sql;

                // Execute the query
                if($insert == true){
                    echo '<script>alert("Thankyou For Submission!");</script>';
                    echo '<script>window.location="papersubmit.php"</script>';
                }
                else{
                    echo "ERROR: $sql <br> $con->error";
                }
            }
            else{
                echo "ERROR: $sql <br> $con->error";
            }

            // Close the database connection
            $con->close();
        }
?>

<!-- http://icmmt.unaux.com/pages/papersubmit.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Animate CSS Link -->
   <link rel="stylesheet" type="text/css" href="/css/animate.css">

   <!-- Hover CSS Link -->
   <link rel="stylesheet" type="text/css" href="/css/hover.css">

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
        <section class="container mt-3 mb-3 pt-4 pb-4"  style="background-color:white; ">
            <div>
                <label for="text" style="font-size: 25px; color:#40d0c6; font-weight: bold;">Authors Information</label>
                <h6>&nbsp;</h6>
            </div>
			<form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                                <label class="col-md-2" for="text" style="font-size: 17px; font-weight: bold;">Paper Title</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="title" placeholder="Paper Title*" required>
                                                </div>
                                            </div><h6>&nbsp;</h6>
                                        <div class="form-group table-responsive">
                                            <table class="table-bordered" style="width: 100%;" id="table_field">
                                                <tr style="background-color: rgba(0,0,0,.05);">
                                                    <th class="p-3">Author Name</th>
                                                    <th class="p-3">Email</th>
                                                    <th class="p-3">Mobile</th>
                                                    <th class="p-3">Add/Remove</th>
                                                </tr>
                                                <tr>
                                                    <td class="p-3"><input class="form-control" type="text" name="name[]" placeholder="Name*"required></td>
                                                    <td class="p-3"><input class="form-control" type="email" name="email[]" placeholder="Email*" required></td>
                                                    <td class="p-3"><input class="form-control" type="number" name="mobile[]" placeholder="Mobile*" required></td>
                                                    <td class="p-3"><button class="btn" type="button" id="add" name="add" style="background-color: #40d0c6; color: white; font-weight: bold;">Add Author</button></td>
                                                </tr>
                                            </table>
                                        </div>    
                                        <div class="row">
                                            <label class="col-md-2" for="text" style="font-size: 17px; font-weight: bold;">Upload File</label>
                                            <div class="col-md-10">
                                                <input type="file" name="file" required>
                                            </div>
                                        </div>    
                                        <h6>&nbsp;</h6>
                                        <div class="row justify-content-center">
                                            <button class="btn" type="submit" name="submit" style="background-color: #40d0c6; color: white; font-weight: bold;">SUBMIT</button>
                                        </div>
                                    </form>		
            <h6>&nbsp;</h6>
            <div class="row justify-content-center">
                <a href="/pages/registrationFee.html" style="text-decoration: none; font-weight: bolder;"> Go Back</a>
            </div>
        </section>
		
    </div>
    <!-- Container Section End -->
<script type="text/javascript">
    $(document).ready(function(){
        var html = '<tr><td class="p-3"><input class="form-control" type="text" name="name[]" placeholder="Name*" required></td><td class="p-3"><input class="form-control" type="email" name="email[]" placeholder="Email"></td><td class="p-3"><input class="form-control" type="number" name="mobile[]" placeholder="Mobile"></td><td class="p-3"><button class="btn btn-danger" type="submit" name="remove" id="remove" style="color: white; font-weight: bold;">Remove Author</button></td></tr>';
        
        var max =3;
        var x= 1;

        $("#add").click(function(){
            if(x <= max){
                $("#table_field").append(html);
                x++;
            }
        });
        $("#table_field").on('click','#remove',function(){
                $(this).closest('tr').remove();
                x--;
        });

    });
</script>
<script src="js/wow.js"></script>
<script>
   wow = new WOW({}).init();
</script>	
</body>
</html>