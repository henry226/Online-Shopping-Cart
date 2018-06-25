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

    // if get pass1 and pass2 
    if(isset($_POST['resetPass1']) && isset($_POST['resetPass2'])){
            $resetPass1 = $_POST['resetPass1'];
            $resetPass2 = $_POST['resetPass2'];
        
        // if pass1 equals to pass 2, reset the password from database
        if($resetPass1 == $resetPass2){
            $sql = "UPDATE user SET password='$resetPass1' WHERE email = 'henry5581984@gmail.com'";
            if ($connect->query($sql) === TRUE) {
                echo "<script type='text/javascript'>alert('Record updated successfully');</script>";
                echo "Record updated successfully";
            } else {
                echo "<script type='text/javascript'>alert('Error updating record.');</script>";
                echo "Error updating record: " . $connect->error;
            }
            header( "refresh:3;url=../login/index.php" );
        }
        else {
            echo "Error updating record.";
            echo "<script type='text/javascript'>alert('Error updating record.');</script>";
            header( "refresh:3;url=../login/index.php" );
        }
            //echo $resetPass1 . "<br>". $resetPass2;
    }
    $connect->close();
?>