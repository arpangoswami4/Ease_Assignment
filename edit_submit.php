<?php
	session_start();
	$hostname="127.0.0.1";
	$sql_username="root";
	$db_name="ease_assignment";
	$db_password="123456";
	$response=array();
	$conn=mysqli_connect($hostname,$sql_username,$db_password,$db_name);
	if(!$conn){
		$response["sucess"]=false;
		$response["message"]="Connection Failed: ".mysqli_connect_error();
		echo json_encode($response);
		exit();
	}

	$name=$_POST["name"];
	$email=$_POST["email"];
	$phno=$_POST["phno"];
	$password=$_POST["password"];
	$confirm_password=$_POST["confirm_password"];
	$country=$_POST["country"];
	$user_id=$_SESSION["id"];

	if ( $name==NULL ||  $email==NULL ||  $phno==NULL ||  $password==NULL  ||  $confirm_password==NULL ||  $country==NULL )
	{
		$fill="Please fill up ";
		if($name==NULL)
		{
			$fill="$fill"."NAME,";
		}
		if($email==NULL)
		{
			$fill="$fill"."Email,";
		}
		if($phno==NULL)
		{
			$fill="$fill"."Phone Number,";
		}		
		if($password==NULL)
		{
			$fill="$fill"."Password,";
		}		
		if($confirm_password==NULL)
		{
			$fill="$fill"."Confirm Password,";
		}		
		if($country==NULL)
		{
			$fill="$fill"."Country Of Origin,";
		}
		$len=strlen($fill);
		$fill[($len-1)]=".";
		$response["sucess"]=false;
		$response["message"]=$fill;
		echo json_encode($response);
		exit();

	}
	if($password!=$confirm_password){
		$response["success"]=false;
		$response["message"]="Password and Confirm Password doesn't match";
		echo json_encode($response);
		exit();

	}
	$sql="UPDATE users SET name='$name',email='$email',password='$password',phno='$phno',country='$country' WHERE id='$user_id'";

	$result=mysqli_query($conn,$sql);

	if(!$result){
		$response["success"]=false;
		$response["message"]="Error:".mysqli_error($conn);
		echo json_encode($response);
		exit();
	}

	$sql1="SELECT id,name FROM users where name='$name'";
	$result1=mysqli_query($conn, $sql1);
	if(!$result){
		$response["success"]=false;
		$response["message"]="Error:".mysqli_error($conn);
		echo json_encode($response);
		exit();
	}
	$row = mysqli_fetch_array($result1);
	$_SESSION["name"]=$row["name"];
	$response["success"]=true;
	$response["message"]="Profile Edited Successfully";
	echo json_encode($response);
	mysqli_close($conn);

?>	
