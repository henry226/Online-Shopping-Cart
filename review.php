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

    // Update Database Query
    if(isset($_POST['user_email']) && isset($_POST['user_phone']) &&  isset($_POST['user_name']) && isset($_POST['user_message'])){
        $user_email = $_POST['user_email'];
        $user_phone = $_POST['user_phone'];
        $user_name = $_POST['user_name'];
        $user_message = $_POST['user_message'];

        $sql = "INSERT INTO reviews (email, name, phone, message) VALUES ('$user_email', '$user_name', '$user_phone', '$user_message');";  
        if ($connect->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            //echo "Error: " . $sql . "<br>" . $connect->error;
        }

    }
?>

<!DOCTYPE html>
<html lang="en" >

<head>
<head>
<meta charset="utf-8">
<title>Chin-Shen / Wofoil</title>
<link href="css/parallax.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
</head>
<!-- This review page output the data from database -->
<body style="background-color: #e6e6e6;">
    <div class="container-fluid">
        <div class="row animate" style="margin-top: 23px; text-align: center; margin-bottom: 17px">
            <p style="font-size:35px; color:black"><img src="./images/cswofoil_logo.png" alt="Company Logo"/> Chin-Shen / Wofoil Enterprise Co., Ltd</p>
        </div>

        <h1 style="text-align:center">Customer Reviews</h1>

        <div class="row" style="margin-top: 50px;">
            <?php 
            $sql = "SELECT * FROM reviews";
            $result = $connect->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-xs-4" style="text-align:; border-style: solid; padding:20px">';
                    echo '<h3 style="text-align:center; margin:0px">' . $row["name"]. '</h3>';
                    echo '<p style="margin-top:20px; background-color: white"><span class="glyphicon glyphicon-comment"></span> Comment: ' . $row["message"]. '</p>';
                    echo '<p style="margin-top:20px; background-color: white"><span class="glyphicon glyphicon-envelope"></span> Email: ' . $row["email"]. '</p>';
                    echo '<p style="margin-top:20px; background-color: white"><span class="glyphicon glyphicon-earphone"></span> phone: ' . $row["phone"]. '</p>';
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }
            $connect->close();
            ?>
        </div>
        
        <div style="text-align: center; margin: 50px;">
            <a href="index.php"><button type="button" class="btn btn-default btn-lg">HomePgae</button></a>
        </div>
    </div>

    
</body>

</html>