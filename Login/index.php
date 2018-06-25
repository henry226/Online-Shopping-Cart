<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cs602";

    // Create connection
    $connect = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    } 
    //echo "Database Connected successfully<br>";

    if(isset($_POST["email"]) && isset($_POST["pass"])){
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        //echo $email. "<br>";
        $sql = "SELECT * FROM user where email = '$email' and password = '$pass'";
        $result = $connect->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            /*while($row = $result->fetch_assoc()) {
                echo $row['date']. "<br>";
            }*/
            $_SESSION["login"] = "true";
            $_SESSION["email"] = $email;
            header("Location: ../index.php");
            die();
        } else {
            //echo "0 results";
            $_SESSION["login"] = "false";
            echo "<script type='text/javascript'>alert('Email or Password not match.');</script>";
        }
        $connect->close();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chin-Shen / Wofoil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--===============================================================================================-->
    <style>
        a {
            color:black;    
        }
    </style>
</head>
<body style="background-color: #e6e6e6;">
	<div class="row animate" style="margin-top: 23px; text-align: center; margin-bottom: 17px">
		<div class="col-md-12">
			<p style="font-size:35px; color:black"><img src="../images/cswofoil_logo.png" alt="Company Logo"/> Chin-Shen / Wofoil Enterprise Co., Ltd</p>
		</div>
	</div>

	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100 p-t-90 p-b-30" style="margin:0; padding:0">
				<form class="login100-form validate-form" action="index.php" method="POST">
						<!--<h1 style="text-align: center;">Login With Email</h1>-->
					<span class="login100-form-title p-b-40">
						Login
					</span>

					<div>
						<a href="#" class="btn-login-with bg1 m-b-10">
							<i class="fa fa-facebook-official"></i>
							Login with Facebook
						</a>

						<a href="#" class="btn-login-with bg2">
							<i class="fa fa-twitter"></i>
							Login with Twitter
						</a>
					</div>

					<div class="text-center p-t-55 p-b-30">
						<span class="txt1">
							Login with email
						</span>
					
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
                    </div>
                    
                    <div class="flex-col-c p-t-224" style="margin:50px; padding:0">
                        <a href="#" onclick="document.getElementById('id01').style.display='block'" >Forget Password?</a>
                    </div>
                    
                    
					
					<div class="flex-col-c p-t-224" style="margin:50px; padding:0">
						<a href="../index.php" class="txt3 bo1 hov1">Back to Home</a>
					</div>
					
                </form>
			</div>
        </div>
        
    <div class="w3-container">
            <div id="id01" class="w3-modal">
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                    <form class="w3-container" action="./email.php" methold="GET">
                        <div class="w3-section">
                            <label><b>Please Enter Your Email:</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email" name="remail" required>
                            <p style="color:black">*Note: We will send a recovery passowrd link to your email.<br>Please check your email as soon as possible!</p>
                            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Sent Recovery Mail</button>
                        </div>
                    </form>

                    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
                    </div>
                </div>
            </div>
        </div>
	</div>	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>