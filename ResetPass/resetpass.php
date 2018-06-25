<?php
    $remail = base64_decode($_GET['remail']); 
    $time = $_GET['time'];
    //echo $remail. "<br>". $time;
?>

<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Chin-Shen / Wofoil</title>
    <link href="../css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="row animate" style="margin-top: 23px; text-align: center; margin-bottom: 17px">
		<p style="font-size:35px; color:black"><img src="../images/cswofoil_logo.png" alt="Company Logo"/> Chin-Shen / Wofoil Enterprise Co., Ltd</p>
    </div>
    
    <?php 
    $n=time();
    $expires = ($n-$time)/60;
    //echo $expires;
    if($expires < 1){
        echo "<hgroup>";
        echo '<h1 style="color:black">Please Enter Your New Password</h1>';
        echo '</hgroup>';
        echo '<form action="reset.php" method="POST">';
        echo '<div class="group"><input type="password" name="resetPass1" id="txtNewPassword"><span class="highlight"></span><span class="bar"></span><label>Password</label></div>';
        echo '<div class="group"><input type="password" name="resetPass2" id="txtConfirmPassword" onChange="checkPasswordMatch();"><span class="highlight"></span><span class="bar"></span><label>Re-Password</label></div>';
        echo '<div class="registrationFormAlert" id="divCheckPasswordMatch"></div>';
        echo '<button type="submit" class="button buttonBlue">Reset Password<div class="ripples buttonRipples"><span class="ripplesCircle"></span></div></button>';
        echo "<form>";
    }
    else {
        echo"<hgroup>";
        echo '<h1 style="color:black">Link Expired. Please Request A New Link.</h1>';
        echo "</hgroup>";
    }
    /*<hgroup>
        <h1 style="color:black">Please Enter Your New Password</h1>
    </hgroup>
    <form action="index.php" method="POST">
        <div class="group">
            <input type="text" name="resetPass1"><span class="highlight"></span><span class="bar"></span>
            <label>Password</label>
        </div>
        <div class="group">
            <input type="text" name="resetPass2"><span class="highlight"></span><span class="bar"></span>
            <label>Re-Password</label>
        </div>

        <button type="submit" class="button buttonBlue">Reset Password
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
    </form>*/
    ?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>
<script>
function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("<b><span style='color:red'>Passwords do not match!</span></b>");
    else
        $("#divCheckPasswordMatch").html("<b><span style='color: green'>Passwords match.</span></b>");
}

$(document).ready(function () {
   $("#txtNewPassword, #txtConfirmPassword").keyup(checkPasswordMatch);
});
</script>
</body>
</html>
