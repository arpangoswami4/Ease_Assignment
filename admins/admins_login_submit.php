<?php
    session_start();
    $hostname="127.0.0.1";
    $username="root";
    $db_password="123456";
    $db_name="ease_assignment";
    
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM admins where email='$email'";
    $result=mysqli_query($conn,$sql);

    if(!$result){
        echo "Error: " . mysqli_error($conn);
        exit();
    }
    $row=mysqli_fetch_array($result);
    if ($row["password"]==$password) {
        $_SESSION['id']=$row['id'];
        $_SESSION["email"]=$row["email"];
    }
    header('Location:admins_assigment_list.php');
    mysqli_close($conn);
?>


    
    