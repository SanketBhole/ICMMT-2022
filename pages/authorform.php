<?php
                if(isset($_POST['fname'])){
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
                // echo "Success connecting to the db";

                // Collect post variables
                $paperid = $_POST['paperid'];
                $papertitle = $_POST['papertitle'];
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
                $affiliation = $_POST['affiliation'];
                $designation = $_POST['designation'];
                $amounttype = $_POST['amounttype'];
                $amount = $_POST['amount'];
                $payment = $_POST['payment'];
                $country = $_POST['country'];
                $state = $_POST['state'];
                $UTR = $_POST['UTR'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $sql = "INSERT INTO `icmmt`.`author`(`PaperId`,`PaperTitle`,`FName`, `MName`, `LName`, `Affiliation`, `Designation`, `AmountType`, `Amount`, `Payment`, `Country`, `State`, `UTR`, `Email`, `Mobile`) VALUES ('$paperid','$papertitle','$fname','$mname','$lname','$affiliation','$designation','$amounttype','$amount','$payment','$country','$state','$UTR','$email','$mobile');";
                // echo $sql;

                // Execute the query
                if(mysqli_query($con, $sql)){
                    // echo "Successfully inserted";

                    // Flag for successful insertion
                        if($insert = true){
                            echo '<script>alert("Thankyou For Submission!");</script>';
                            echo '<script>window.location="authorform.php"</script>';
                        }
                    }
                else{
                        echo "ERROR: $sql <br> $con->error";
                    }
                                
                // Close the database connection
                $con->close();
                }
            ?>

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
                            <a class="nav-link" href="/index.html">Home</a>
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
                <h4 class="style1"><font color="#40d0c6" font-weight:bold>Author Information</font></h4>
                <h4>&nbsp;</h4>
            </div>
			<form method="post">
                <div class="form-group"><label for="text">Paper ID</label>
                    <input class="form-control" type="text" name="paperid" placeholder="Paper ID" required>
                </div>
                <div class="form-group"><label for="text">Paper Title</label>
                    <textarea class="form-control" type="text" name="papertitle" placeholder="Paper Title" required></textarea>
                </div>
                <div class="form-group"><label for="text">Participant's Name</label>
                    <div class="row">
                        <div class="col">
                            <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" name="mname" placeholder="Middle Name">
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                <div class="form-group"><label for="text">Affiliation (University/College/Industry etc.)</label>
                    <input class="form-control" type="text" name="affiliation" placeholder="Affiliation (University/College/Industry etc.)" required>
                </div>
                <div class="form-group"><label for="text">Designation</label>
                    <select class="form-control" name="designation" id="">
                        <option value="prof">Professor</option>
                        <option value="assoprof">Associate Professor</option>
                        <option value="assiprof">Assistant Professor</option>
                        <option value="lecturer">Lecturer</option>
                        <option value="student">Student</option>
                        <option value="other">Others</option>
                    </select>
				</div>
                <div class="form-group"><label>Amount Type</label>
                    <select class="form-control" name="amounttype" id="">
                        <option value="author">USD</option>
                        <option value="guest">Rupee</option>
                    </select>
				</div>
                <div class="form-group"><label for="number">Amount</label>
                    <input class="form-control" type="number" name="amount" placeholder="Amount" required>
                </div>
                <div class="form-group"><label for="text">Payment Type</label>
                    <select class="form-control" name="payment" id="">
                        <option value="patym">Patym</option>
                        <option value="phonepe">Phonepe</option>
                        <option value="gpay">Gpay</option>
                        <option value="amazonpay">Amazon Pay</option>
                        <option value="bhim">BHIM</option>
                        <option value="neft">NEFT</option>
                        <option value="dedraft">Demanf Draft</option>
                        <option value="otherpay">Others</option>
                    </select>
				</div>
                <div class="form-group"><label for="text">Country</label>
                    <select class="form-control" name="country" id="">
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
				</div>
                <div class="form-group"><label for="text">State</label>
                    <input class="form-control" type="text" name="state" placeholder="State" required>
                </div>
                <div class="form-group"><label for="text">UTR/Transaction Number</label>
                    <input class="form-control" type="text" name="UTR" placeholder="UTR/Transaction No." required>
                </div>
                <div class="form-group"><label for="email">E-mail</label>
                    <input class="form-control" type="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group"><label for="text">Mobile No.(WhatsApp)</label>
                    <input class="form-control" type="number" name="mobile" placeholder="Mobile No." required>
                </div>
				<div class="row justify-content-center">
					<button class="btn" type="submit" style="background-color: #40d0c6; color: white; font-weight: bold;">SUBMIT</button>
				</div>
			</form>	
            <h6>&nbsp;</h6>
            <div class="row justify-content-center">
                <a href="/pages/ptype.html" style="text-decoration: none; font-weight: bolder;"> Go Back</a>
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