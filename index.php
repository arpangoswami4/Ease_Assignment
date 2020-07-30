<!DOCTYPE html>
<html>
	<head>
		<title>Ease Assigment</title>
		<link rel="stylesheet" href="css/homepage.css">
		<script src="https://kit.fontawesome.com/620d7991d4.js" crossorigin="anonymous"></script>
		<link rel="shortcut icon" type="text/png" href="img/prime_icon.png">
	</head>
	<body>
		<div class="r1">
			<div class="r1r1">
				<div class="r1r1c1">
					<a href="#">
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
						else
						{
						$session_set=false;	
					?>
					<a href="login.html" >
						<div class="login">
							Login	
						</div>
					</a>
					<a href="registration.html">
						<div class="signup">
							New Here,Sign Up! 	
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
					<a href="#"><div class="r2r1c1c1"> HOME</div></a>
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
			<div class="r3c1">
				<div class="r3c1c1">
					<div class="form_heading">
					</div>
					<form method="post" autocomplete="off" action="assignment_submit.php" class="assignment_form">
						<div class="r3c1c1r2cr1">
							<div class="subject">
								<div class="small_headings">Subject Name</div>
								<input type="text" name="subject_name" placeholder="Subject Name" class="inputs_row1">
							</div>
							<div class="topic">
								<div class="small_headings">Topic Of The Assignment</div>
								<input type="text" name="topic_name" placeholder="Topic Name" class="inputs_row1">
							</div>
						</div>
						<div class="r3c1c1r2cr2">
							<div class="description">
								<div class="small_headings">Description Of Assignment(optional)<span class="red">*</span></div>
								<textarea type="text area" name="topic_description" class="description_input" placeholder="Description Of The Assignment"></textarea>
							</div>
							<div class="r3c1c1r2cr2c2">
								<div class="words_pages">
									<div class="small_headings">No. Of Pages/Words</div>
									<div class="word_count">
										<button type="button" class="minus_button" onclick="decrement_page()">
											<div class="minus_symbol">-</div>
										</button>			
										<div id="pages_text">1 Page(s)</div>
										<button type="button" class="plus_button" onclick="increment_page()">
											<div class="plus_symbol">+</div>
										</button>
										<div id="words_text">250 Words</div>
									</div>						
								</div>
								<div class="deadline">
									<div class="small_headings">Choose Assignment Deadline</div>
									<div class="date_time_ui">
										<div class="deadline_date_div"><input type="text" name="deadline_date" class="deadline_date_input" placeholder="Deadline Date"></div>
										<div class="deadline_time_div"><select name="deadline_time" class="deadline_date_input">
											<option value="2:00AM">
											 2:00 AM</option>
											<option value="4:00AM">
											 4:00 AM</option>
											<option value="6:00AM">
											 6:00 AM</option>
											<option value="8:00AM">
											 8:00 AM</option>
											<option value="10:00AM">
											10:00 AM</option>
											<option value="12:00PM">12:00 PM</option>
											<option value="2:00PM">
											 2:00 PM</option>
											<option value="4:00PM">
											 4:00 PM</option>
											<option value="6:00PM">
											 6:00 PM</option>
											<option value="8:00PM">
											 8:00 PM</option>
											<option value="10:00PM">
											10:00 PM</option>
											<option value="11:59PM">11:59 PM</option>
										</select></div>
									</div>
								</div>
							</div>
						</div>
						<div class="r3c1c1r2cr3">
							<input type="submit" name="submit" value="Submit" class="submit_button">
						</div>		
					</form>
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
		<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript">
			var session_set= <?php echo json_encode($session_set); ?>;
		</script>

		<script type="text/javascript" src="js/homepage.js"></script>		
	</body>
</html>