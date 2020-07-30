<!DOCTYPE html>
<html>
	<head>
		<title>My Orders</title>
		<link rel="stylesheet" href="css/my_profile.css">
		<script src="https://kit.fontawesome.com/620d7991d4.js" crossorigin="anonymous"></script>
		<link rel="shortcut icon" type="text/png" href="img/prime_icon.png">
	</head>
	<body>
		<div class="r1">
			<div class="r1r1">
				<div class="r1r1c1">
					<a href="index.php">
						<div class="main_heading">
							<img src="img/prime_icon.png" class="prime_icon"/>
							<div class="prime_heading">
								<div class="first">EASE</div>
								<div class="second">ASSIGNMENT</div>
							</div>
						</div>	
					</a>
				</div>
				<div class="r1r1c2">
					<?php
						session_start();
						if(isset($_SESSION["id"]) && $_SESSION["id"]){
					?>
						<div class="user_options">
							<div class="user_name">
							 	<?php
							 	$session_set=true;
							 	$user_name=$_SESSION["name"];
								$i=0;
								$length=strlen($user_name);
								$first_name="";
								while (($user_name[$i]!=" ") && ( $i<$length))
								{
									$first_name = $first_name . $user_name[$i];
									$i=$i+1;
								}
								echo $first_name;
								?>
							</div>
							<ul>
							 	<a href="my_profile.php"><li id="first">My Profile</li></a>
							 	<a href="edit_profile.php"><li id="second">Edit Profile</li></a>
								<a href="logout.php"><li id="third">Logout</li></a>
							</ul>
							
						</div> 
						<a href="user_orders.php">
							<div class="user_orders">
								My Orders
							</div>
						</a>
						<?php
						}
						?>
				</div>
			</div>
		</div>
		<div class=r2>
			<div class="r2r1">
				<div class="r2r1c1">
					<a href="index.php"><div class="r2r1c1c1"> HOME</div></a>
					<a href="#"><div class="r2r1c1c2">SERVICES</div></a>
					<a href="#"><div class="r2r1c1c3">
						<div class="subjects_heading"> SUBJECTS</div>
						<ul>
							<a href="#"><li id="first"> Biology</li></a>
							<a href="#"><li id="second"> Math</li></a>
							<a href="#"><li id="third"> Chemistry</li></a>
						</ul>
					</div></a>
					<a href="#"><div class="r2r1c1c4">SAMPLES</div></a>
					<a href="#"><div class="r2r1c1c5">ABOUT</div>
					</a>
					<a href="#"><div class="r2r1c1c6">CONTACT US</div>
					</a>					
				</div>
				<div class="r2r1c2">
					<div class="mail">
						<i class="far fa-envelope"></i>
						easeassignment2@gmai.com
					</div>
					<div class="ph">
						<i class="fas fa-phone"></i>
						0000000000						
					</div>
				</div>
			</div>
		</div>

		<div class="r3">
            <div class="r3r1">
                <div class="r3r1c1">
                    <div class="r3r1c1r1">
                        <div class="r3r1c1r1c1">                            
                            <div class="exist">
                                <a href="my_profile.php">
                                    <span class="black"><u>My Profile</u></span>
                                </a>
                            </div>                            
                            <div class="new">
                                <a href="edit_profile.php">
                                    <span class="create"><u>Edit Profile</u></span>
                                </a>
                            </div>                            
                        </div>
                    </div>
                    <?php
						$user_id=$_SESSION["id"];
						$hostname="127.0.0.1";
						$sql_username="root";
						$db_name="ease_assignment";
						$db_password="123456";
						$conn=mysqli_connect($hostname,$sql_username,$db_password,$db_name);
						if(!$conn){
							die("Connection failed: ". mysqli_connect_error());
						}
						$sql="SELECT * FROM users WHERE id='$user_id'";
						$result=mysqli_query($conn,$sql);

					    if(!$result){
					        echo "Error: " . mysqli_error($conn);
					        exit();
					    }
					    $row=mysqli_fetch_array($result);
						
                    ?>
                    <div class="r3r1c1r2">
                            <div class="r3r1c1r2c1">                            
                                <div class="r3r1c1r2c1r1">
                                    Your Profile
                                </div>
                                <div class="r3r1c1r2c1r2">
                                    Full Name:<br/> <div class="name_input"><?php echo $row["name"]; ?> </div>                                 
                                </div>
                                <div class="r3r1c1r2c1r3">
                                    Email:<br/> <div class="email_input"><?php echo $row["email"]; ?></div>                                 
                                </div>
                                <div class="r3r1c1r2c1r4">
                                    Phone Number:<br/> <div class="phno_input" ><?php echo $row["phno"]; ?></div>                                 
                                </div>                                
                                                                    
                                <div class="r3r1c1r2c1r7">
                                    Country Of Origin:
                                    <div class="country_input">
                                    	<?php echo $row["country"];?>
                                    </div>
                                </div>
                         		<div class="r3r1c1r2c1r9">
                        			
                        		</div>
	                            <div class="r3r1c1r2c1r10">
	                                <a href="deactivate.php">
	                                    <span class="create"><u>
	                                    	Deactivate Account
	                                    </u></span>
	                                </a>                            
	                            </div>
                        	</div>
                    </div>
                </div>					
			</div>
		</div>


		<div class="r4">
			<div class="r4c1">
				<div class="r4c1c1">
					<div class="r4headings">Useful Links</div>
					<div class="r4c1c1r2">
						<div class="r4subheadings"><a href="#"> >> Home</a></div>
						<div class="r4subheadings"><a href="#"> >> Services</a></div>
						<div class="r4subheadings"><a href="#"> >> Samples</a></div>
						<div class="r4subheadings"><a href="#"> >> About</a></div>
						<div class="r4subheadings"><a href="#"> >> Contact Us</a></div>
						<div class="r4subheadings"></div>
					</div>
				</div>
				<div class="r4c1c2">
					<div class="r4headings">Subjects</div>
					<div class="r4c1c2r2">
						<div class="r4c1c1r2c">
							<div class="r4subheadings"><a href="#"> >> Home</a></div>
							<div class="r4subheadings"><a href="#"> >> Services</a></div>
							<div class="r4subheadings"><a href="#"> >> Samples</a></div>
							<div class="r4subheadings"><a href="#"> >> About</a></div>
							<div class="r4subheadings"><a href="#"> >> Contact Us</a></div>
							<div class="r4subheadings"></div>
						</div>
						<div class="r4c1c1r2c">
							<div class="r4subheadings"><a href="#"> >> Home</a></div>
							<div class="r4subheadings"><a href="#"> >> Services</a></div>
							<div class="r4subheadings"><a href="#"> >> Samples</a></div>
							<div class="r4subheadings"><a href="#"> >> About</a></div>
							<div class="r4subheadings"><a href="#"> >> Contact Us</a></div>
							<div class="r4subheadings"></div>
						</div>
						<div class="r4c1c1r2c"></div>
					</div>
				</div>
				<div class="r4c1c3">
					<div class="r4headings">Get In Touch With Us</div>
					<div class="r4c1c3r2">
						<div class="r4c1c3r2r1">
							<div class="r4location">
								<i class="fas fa-map-marker-alt"></i>
								Kolkata,West Bengal,India
							</div>
							<div class="r4mail">
								<i class="far fa-envelope"></i>
									easeassignment2@gmai.com
							</div>
							<div class="r4ph">
								<i class="fas fa-phone"></i>
								0000000000
							</div>
						</div>
						<div class="r4c1c3r2r2">
							<div class="social_heading">Social Share</div>
							<div class="r4c1c3r2r2r2">
								<div class="social_icons">
									<a href="https://www.facebook.com/">
										<i class="fab fa-facebook-f"></i>
									</a>
								</div>
								<div class="social_icons">
									<a href="#">
										<i class="fab fa-instagram"></i>
									</a>
								</div>
								<div class="social_icons">
									<a href="#">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</div>
								<div class="social_icons">
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</div>
								<div class="social_icons"></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="r5">
			<div class="r5c1"></div>
		</div>

		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/my_profile.js"></script>
	</body>
</html>
