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
	if(!isset($_COOKIE["cookie_set"])){

		$subject_name=$_POST["subject_name"];
		$topic_name=$_POST["topic_name"];
		$topic_description=$_POST["topic_description"];
		$page_count=$_POST["page_count"];
		$word_count=$_POST["word_count"];
		$deadline_date=$_POST["deadline_date"];
		$deadline_time=$_POST["deadline_time"];
	}
	else{
		$subject_name=$_COOKIE["subject_name"];
		$topic_name=$_COOKIE["topic_name"];
		$topic_description=$_COOKIE["topic_description"];
		$page_count=$_COOKIE["page_count"];
		$word_count=$_COOKIE["word_count"];
		$deadline_date=$_COOKIE["deadline_date"];
		$deadline_time=$_COOKIE["deadline_time"];
		$_COOKIE["cookie_set"]=false;

		setcookie("subject_name","",time() - 3600);
		setcookie("topic_name","",time() - 3600);
		setcookie("topic_description","",time() - 3600);
		setcookie("word_count","",time() - 3600);
		setcookie("page_count","",time() - 3600);
		setcookie("deadline_date","",time() - 3600);
		setcookie("deadline_time","",time() - 3600);
		setcookie("cookie_set","",time() - 3600);

	}

	
	if ( $subject_name==NULL ||  $topic_name==NULL ||  $deadline_date==NULL  )
	{
		$fill="Please fill up ";
		if($subject_name==NULL)
		{
			$fill="$fill"."Subject Name,";
		}
		if($topic_name==NULL)
		{
			$fill="$fill"."Topic Name,";
		}
		if($deadline_date==NULL)
		{
			$fill="$fill"."Deadline Date,";
		}		
		$len=strlen($fill);
		$fill[($len-1)]=".";
		$response["sucess"]=false;
		$response["message"]=$fill;
		echo json_encode($response);
		exit();

	}


	if ((!isset($_SESSION["id"])) || (!$_SESSION["id"])) {
		
		setcookie("subject_name",$subject_name,time() + 3600);
		setcookie("topic_name",$topic_name,time() + 3600);
		setcookie("topic_description",$topic_description,time() + 3600);
		setcookie("word_count",$word_count,time() + 3600);
		setcookie("page_count",$page_count,time() + 3600);
		setcookie("deadline_date",$deadline_date,time() + 3600);
		setcookie("deadline_time",$deadline_time,time() + 3600);
		$cookie_set=true;
		setcookie("cookie_set",$cookie_set,time() + 3600);

		$response["sucess"]=false;
		$response["cookie_set"]=$cookie_set;
		echo json_encode($response);
		exit();
	}


	$user_id=$_SESSION["id"];

	$sql="INSERT INTO assignment_details(topic,subject,description,words,pages,deadline_date,deadline_time,user_id) VALUES('$topic_name','$subject_name','$topic_description','$word_count','$page_count','$deadline_date','$deadline_time','$user_id')";

	$result=mysqli_query($conn,$sql);

	if(!$result){
		$response["success"]=false;
		$response["message"]="Error: ".mysqli_error($conn);
		echo json_encode($response);
		exit();
	}
	else
	{
		$response["success"]=true;
		$response["message"]="Assignment Details Submitted Successfully";
		echo json_encode($response);
	}
	mysqli_close($conn);

?>