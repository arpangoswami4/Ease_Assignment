<?php
	session_start();
	$user_id=$_SESSION["id"];
	$hostname="127.0.0.1";
	$sql_username="root";
	$db_name="ease_assignment";
	$db_password="123456";
	$conn=mysqli_connect($hostname,$sql_username,$db_password,$db_name);
	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}

	$sql="DELETE FROM users WHERE id='$user_id'";
	$result=mysqli_query($conn,$sql);

    if(!$result){
        echo "Error: " . mysqli_error($conn);
        exit();
    }
    else
    {
    session_destroy();
	header("Location:index.php");
    }

	mysqli_close($conn);		    
?>