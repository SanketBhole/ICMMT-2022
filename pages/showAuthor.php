<?php
// (A) START SESSION
session_start();
 
// (B) LOGOUT REQUEST
if (isset($_POST["logout"])) { unset($_SESSION["user"]); }
 
// (C) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
if (!isset($_SESSION["user"])) {
  header("Location: 1a-login.php");
  exit();
}
?>
<?php
            $server = "localhost";
            $username = "root";
            $password = "";

            // Create a database connection
            $con = mysqli_connect($server, $username, $password,"icmmt");

            // Check for connection success
            if(!$con){
                die("connection to this database failed due to" . mysqli_connect_error());
            }
            $query="Select * From author"; 
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
?>
<!DOCTYPE html> 
<html> 
	<head> 
    <!-- Meta Tag -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Fontawesome Icons CSS Link -->
   <link rel="stylesheet" type="text/css" href="fa-icon_v6_pro/css/all.css">

   <!-- Site Logo -->
	<link rel="icon" type="image/png" href="/images/BGI.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>    
    <title>ICMMT 2022</title>
        <style>
            body{
                background-color: #40d0c636;
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
            a{
			text-decoration: none;
			color: black;
            }
            .img-responsive{
                max-width: 100%;
                height: auto;
            }
            a:hover{
			text-decoration: none;
                color:blue;
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
	<div class="container-fluid">
        <section class="p-3 mb-3 mt-3" style="background-color: white; box-sizing: border-box;">
        <div class="row p-3 justify-content-end" style="position:relative;">
            <button type="button" class="btn btn-primary" onclick="location.href='showAuthor.php'" style="background-color:#40d0c6; border:none; position:absolute; left:1.5%;">Refresh</button>
            <br>
            <input class="form-control" type="text" id="myInput" name="" placeholder="Search" onkeyup="searchfun()" style="width:200px;" >
            </div>    
            <table class="table-bordered table-striped" id="authorTable" style="width: 100%;"> 
            <tr> 
                <th colspan="15" class="pl-2 pt-2 pb-2"><h3>Uploaded Author Records</h3></th> 
                </tr> 
                    <!-- Author Details Table -->
                    <th class="pl-2 pt-2 pb-2">Paper Id</th>	
                    <th class="pl-2 pt-2 pb-2">Paper Title</th>	
                    <th class="pl-2 pt-2 pb-2">First Name</th>	
                    <th class="pl-2 pt-2 pb-2">Middle Name</th>	
                    <th class="pl-2 pt-2 pb-2">Last Name</th>	
                    <th class="pl-2 pt-2 pb-2">Affiliation</th>	
                    <th class="pl-2 pt-2 pb-2">Designation</th>	
                    <th class="pl-2 pt-2 pb-2">AmountType</th>	
                    <th class="pl-2 pt-2 pb-2">Amount</th>	
                    <th class="pl-2 pt-2 pb-2">Payment</th>	
                    <th class="pl-2 pt-2 pb-2">Country</th>	
                    <th class="pl-2 pt-2 pb-2">State</th>	
                    <th class="pl-2 pt-2 pb-2">UTR</th>	
                    <th class="pl-2 pt-2 pb-2">Email</th>	
                    <th class="pl-2 pt-2 pb-2">Mobile</th>	
                </tr> 
		
            <?php 
            if($total !=0 ){
            while($rows = mysqli_fetch_assoc($data)) 
            { 
            ?> 
            <tr>
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['PaperId']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['PaperTitle']; ?></td>
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['FName']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['MName']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['LName']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['Affiliation']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['Designation']; ?></td>
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['AmountType']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['Amount']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['Payment']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['Country']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['State']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['UTR']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['Email']; ?></td>	
                <td class="pl-2 pt-2 pb-2"><?php echo $rows['Mobile']; ?></td>	

            </tr> 
            <?php 
                } 
            }
            ?> 
            <script>
            function searchfun() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("authorTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
            }
            </script>
	    </table>
        <br>
        <button class="btn btn-primary" style="background-color:#40d0c6; border:none;" onclick="ExportToExcel('xlsx')">
            Download Table
        </button>
        <div class="row justify-content-center">
				<form method="post">
					<input type="hidden" name="logout" value="1"/>
					<button type="submit" class="btn btn-primary" style="background-color:#40d0c6; border:none;">Logout</button>
				</form>
            </div>
    </section>
</div> 
<script>
    function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('authorTable');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('Author_Details.' + (type || 'xlsx')));
    }
</script> 


	</body> 
	</html>