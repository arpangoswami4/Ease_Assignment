<!DOCTTYPE html>
<html>
	<head>
		<title>Assignment List</title>
		<link rel="shortcut icon" type="text/png" href="../img/prime_icon.png">
	</head>
	<body>
		<?php
		session_start();
		if(isset($_SESSION["id"]) && $_SESSION["id"])
		{
			echo $_SESSION["email"];
			?>
			</br>
			<a href="admin_logout.php">Log-out</a>
			</br></br></br>
			<?php
			$hostname="127.0.0.1";
			$sql_username="root";
			$db_name="ease_assignment";
			$db_password="123456";
			$conn=mysqli_connect($hostname,$sql_username,$db_password,$db_name);
			if(!$conn){
				die("Connection failed: ". mysqli_connect_error());
			}
			$sql="SELECT assignment_details.topic,assignment_details.subject,assignment_details.description,assignment_details.words,assignment_details.pages,assignment_details.deadline_date,assignment_details.deadline_time, users.name,users.email,users.phno,users.country FROM assignment_details INNER JOIN users on assignment_details.user_id=users.id ORDER BY assignment_details.id";

			$result=mysqli_query($conn,$sql);

		    if(!$result){
		        echo "Error: " . mysqli_error($conn);
		        exit();
		    }

		    $counter=1;
		    echo "No Topic &nbsp;&nbsp; Description* &nbsp;&nbsp; Subject &nbsp;&nbsp; Words &nbsp;&nbsp; Pages &nbsp;&nbsp; Deadline Date &nbsp;&nbsp; Deadline Time  &nbsp;&nbsp; Name &nbsp;&nbsp; Email &nbsp;&nbsp; Phno &nbsp;&nbsp; Country";
		    echo "</br></br></br>";

		    while ($row=mysqli_fetch_array($result))
		    {	

		        echo $counter . "&nbsp;&nbsp;&nbsp" . $row['topic'] ."&ensp;&nbsp;&nbsp". $row['description'] ."&nbsp;&nbsp;&nbsp;". $row["subject"] ."&nbsp;&nbsp;&nbsp;". $row["words"] ."&nbsp;&nbsp;&nbsp;". $row["pages"] ."&nbsp;&nbsp;&nbsp;". $row["deadline_date"] ."&nbsp;&nbsp;&nbsp;". $row["deadline_time"] ."&nbsp;&nbsp;&nbsp;". $row["name"] ."&nbsp;&nbsp;&nbsp;". $row["email"] ."&nbsp;&nbsp;&nbsp;". $row["phno"] ."&nbsp;&nbsp;&nbsp;". $row["country"] . "</br></br>" ;
		        


		        $counter=$counter+1;
    		}    
    		mysqli_close($conn);
	
		}
		else
		{
			echo "Wrong user name or password";
		?>
		</br><a href="index.html">Click Here To Go Back</a>

		<?php
		}
		?>
	</body>
</html>