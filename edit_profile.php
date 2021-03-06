<!DOCTYPE html>
<html>
	<head>
		<title>My Orders</title>
		<link rel="stylesheet" href="css/edit_profile.css">
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
                        <form class="edit_form" autocomplete="off" action="edit_submit.php" method="post">
                            <div class="r3r1c1r2c1">                            
                                <div class="r3r1c1r2c1r1">
                                    Edit Profile 
                                </div>
                                <div class="r3r1c1r2c1r2">
                                    New Name <br/> <input class="name_input" type="text"  name="name" value="<?php echo $row["name"];?>" />                                 
                                </div>
                                <div class="r3r1c1r2c1r3">
                                    New Email<br/> <input class="email_input" type="text" name="email" value="<?php echo $row["email"];?>"/>                                 
                                </div>
                                <div class="r3r1c1r2c1r4">
                                    New Phone Number<br/> <input class="phno_input"  type="text" name="phno" value="<?php echo $row["phno"];?>"/>                                 
                                </div>

                                <div class="r3r1c1r2c1r5">
                                    New Password(If Any or Old One)<br/> <input class="email_input" type="password" placeholder="Password" name="password"/>                                  
                                </div>
                                <div class="r3r1c1r2c1r6">
                                    Confirm Password<br/> <input class="email_input" type="password" placeholder="Confirm Password" name="confirm_password"/>
                                </div>                                                                
                                                                    
                                <div class="r3r1c1r2c1r7">
                                    Select Country Of Origin
                                    <select class="country_input" name="country">
                                    	<option value="<?php echo $row["country"];?>"><?php echo $row["country"];?></option>	
                                       <option value="Afganistan">Afghanistan</option>
                                       <option value="Albania">Albania</option>
                                       <option value="Algeria">Algeria</option>
                                       <option value="American Samoa">American Samoa</option>
                                       <option value="Andorra">Andorra</option>
                                       <option value="Angola">Angola</option>
                                       <option value="Anguilla">Anguilla</option>
                                       <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                       <option value="Argentina">Argentina</option>
                                       <option value="Armenia">Armenia</option>
                                       <option value="Aruba">Aruba</option>
                                       <option value="Australia">Australia</option>
                                       <option value="Austria">Austria</option>
                                       <option value="Azerbaijan">Azerbaijan</option>
                                       <option value="Bahamas">Bahamas</option>
                                       <option value="Bahrain">Bahrain</option>
                                       <option value="Bangladesh">Bangladesh</option>
                                       <option value="Barbados">Barbados</option>
                                       <option value="Belarus">Belarus</option>
                                       <option value="Belgium">Belgium</option>
                                       <option value="Belize">Belize</option>
                                       <option value="Benin">Benin</option>
                                       <option value="Bermuda">Bermuda</option>
                                       <option value="Bhutan">Bhutan</option>
                                       <option value="Bolivia">Bolivia</option>
                                       <option value="Bonaire">Bonaire</option>
                                       <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                       <option value="Botswana">Botswana</option>
                                       <option value="Brazil">Brazil</option>
                                       <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                       <option value="Brunei">Brunei</option>
                                       <option value="Bulgaria">Bulgaria</option>
                                       <option value="Burkina Faso">Burkina Faso</option>
                                       <option value="Burundi">Burundi</option>
                                       <option value="Cambodia">Cambodia</option>
                                       <option value="Cameroon">Cameroon</option>
                                       <option value="Canada">Canada</option>
                                       <option value="Canary Islands">Canary Islands</option>
                                       <option value="Cape Verde">Cape Verde</option>
                                       <option value="Cayman Islands">Cayman Islands</option>
                                       <option value="Central African Republic">Central African Republic</option>
                                       <option value="Chad">Chad</option>
                                       <option value="Channel Islands">Channel Islands</option>
                                       <option value="Chile">Chile</option>
                                       <option value="China">China</option>
                                       <option value="Christmas Island">Christmas Island</option>
                                       <option value="Cocos Island">Cocos Island</option>
                                       <option value="Colombia">Colombia</option>
                                       <option value="Comoros">Comoros</option>
                                       <option value="Congo">Congo</option>
                                       <option value="Cook Islands">Cook Islands</option>
                                       <option value="Costa Rica">Costa Rica</option>
                                       <option value="Cote DIvoire">Cote DIvoire</option>
                                       <option value="Croatia">Croatia</option>
                                       <option value="Cuba">Cuba</option>
                                       <option value="Curaco">Curacao</option>
                                       <option value="Cyprus">Cyprus</option>
                                       <option value="Czech Republic">Czech Republic</option>
                                       <option value="Denmark">Denmark</option>
                                       <option value="Djibouti">Djibouti</option>
                                       <option value="Dominica">Dominica</option>
                                       <option value="Dominican Republic">Dominican Republic</option>
                                       <option value="East Timor">East Timor</option>
                                       <option value="Ecuador">Ecuador</option>
                                       <option value="Egypt">Egypt</option>
                                       <option value="El Salvador">El Salvador</option>
                                       <option value="Equatorial Guinea">Equatorial Guinea</option>
                                       <option value="Eritrea">Eritrea</option>
                                       <option value="Estonia">Estonia</option>
                                       <option value="Ethiopia">Ethiopia</option>
                                       <option value="Falkland Islands">Falkland Islands</option>
                                       <option value="Faroe Islands">Faroe Islands</option>
                                       <option value="Fiji">Fiji</option>
                                       <option value="Finland">Finland</option>
                                       <option value="France">France</option>
                                       <option value="French Guiana">French Guiana</option>
                                       <option value="French Polynesia">French Polynesia</option>
                                       <option value="French Southern Ter">French Southern Ter</option>
                                       <option value="Gabon">Gabon</option>
                                       <option value="Gambia">Gambia</option>
                                       <option value="Georgia">Georgia</option>
                                       <option value="Germany">Germany</option>
                                       <option value="Ghana">Ghana</option>
                                       <option value="Gibraltar">Gibraltar</option>
                                       <option value="Great Britain">Great Britain</option>
                                       <option value="Greece">Greece</option>
                                       <option value="Greenland">Greenland</option>
                                       <option value="Grenada">Grenada</option>
                                       <option value="Guadeloupe">Guadeloupe</option>
                                       <option value="Guam">Guam</option>
                                       <option value="Guatemala">Guatemala</option>
                                       <option value="Guinea">Guinea</option>
                                       <option value="Guyana">Guyana</option>
                                       <option value="Haiti">Haiti</option>
                                       <option value="Hawaii">Hawaii</option>
                                       <option value="Honduras">Honduras</option>
                                       <option value="Hong Kong">Hong Kong</option>
                                       <option value="Hungary">Hungary</option>
                                       <option value="Iceland">Iceland</option>
                                       <option value="India">India</option> 
                                       <option value="Indonesia">Indonesia</option>
                                       <option value="Iran">Iran</option>
                                       <option value="Iraq">Iraq</option>
                                       <option value="Ireland">Ireland</option>
                                       <option value="Isle of Man">Isle of Man</option>
                                       <option value="Israel">Israel</option>
                                       <option value="Italy">Italy</option>
                                       <option value="Jamaica">Jamaica</option>
                                       <option value="Japan">Japan</option>
                                       <option value="Jordan">Jordan</option>
                                       <option value="Kazakhstan">Kazakhstan</option>
                                       <option value="Kenya">Kenya</option>
                                       <option value="Kiribati">Kiribati</option>
                                       <option value="Korea North">Korea North</option>
                                       <option value="Korea Sout">Korea South</option>
                                       <option value="Kuwait">Kuwait</option>
                                       <option value="Kyrgyzstan">Kyrgyzstan</option>
                                       <option value="Laos">Laos</option>
                                       <option value="Latvia">Latvia</option>
                                       <option value="Lebanon">Lebanon</option>
                                       <option value="Lesotho">Lesotho</option>
                                       <option value="Liberia">Liberia</option>
                                       <option value="Libya">Libya</option>
                                       <option value="Liechtenstein">Liechtenstein</option>
                                       <option value="Lithuania">Lithuania</option>
                                       <option value="Luxembourg">Luxembourg</option>
                                       <option value="Macau">Macau</option>
                                       <option value="Macedonia">Macedonia</option>
                                       <option value="Madagascar">Madagascar</option>
                                       <option value="Malaysia">Malaysia</option>
                                       <option value="Malawi">Malawi</option>
                                       <option value="Maldives">Maldives</option>
                                       <option value="Mali">Mali</option>
                                       <option value="Malta">Malta</option>
                                       <option value="Marshall Islands">Marshall Islands</option>
                                       <option value="Martinique">Martinique</option>
                                       <option value="Mauritania">Mauritania</option>
                                       <option value="Mauritius">Mauritius</option>
                                       <option value="Mayotte">Mayotte</option>
                                       <option value="Mexico">Mexico</option>
                                       <option value="Midway Islands">Midway Islands</option>
                                       <option value="Moldova">Moldova</option>
                                       <option value="Monaco">Monaco</option>
                                       <option value="Mongolia">Mongolia</option>
                                       <option value="Montserrat">Montserrat</option>
                                       <option value="Morocco">Morocco</option>
                                       <option value="Mozambique">Mozambique</option>
                                       <option value="Myanmar">Myanmar</option>
                                       <option value="Nambia">Nambia</option>
                                       <option value="Nauru">Nauru</option>
                                       <option value="Nepal">Nepal</option>
                                       <option value="Netherland Antilles">Netherland Antilles</option>
                                       <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                       <option value="Nevis">Nevis</option>
                                       <option value="New Caledonia">New Caledonia</option>
                                       <option value="New Zealand">New Zealand</option>
                                       <option value="Nicaragua">Nicaragua</option>
                                       <option value="Niger">Niger</option>
                                       <option value="Nigeria">Nigeria</option>
                                       <option value="Niue">Niue</option>
                                       <option value="Norfolk Island">Norfolk Island</option>
                                       <option value="Norway">Norway</option>
                                       <option value="Oman">Oman</option>
                                       <option value="Pakistan">Pakistan</option>
                                       <option value="Palau Island">Palau Island</option>
                                       <option value="Palestine">Palestine</option>
                                       <option value="Panama">Panama</option>
                                       <option value="Papua New Guinea">Papua New Guinea</option>
                                       <option value="Paraguay">Paraguay</option>
                                       <option value="Peru">Peru</option>
                                       <option value="Phillipines">Philippines</option>
                                       <option value="Pitcairn Island">Pitcairn Island</option>
                                       <option value="Poland">Poland</option>
                                       <option value="Portugal">Portugal</option>
                                       <option value="Puerto Rico">Puerto Rico</option>
                                       <option value="Qatar">Qatar</option>
                                       <option value="Republic of Montenegro">Republic of Montenegro</option>
                                       <option value="Republic of Serbia">Republic of Serbia</option>
                                       <option value="Reunion">Reunion</option>
                                       <option value="Romania">Romania</option>
                                       <option value="Russia">Russia</option>
                                       <option value="Rwanda">Rwanda</option>
                                       <option value="St Barthelemy">St Barthelemy</option>
                                       <option value="St Eustatius">St Eustatius</option>
                                       <option value="St Helena">St Helena</option>
                                       <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                       <option value="St Lucia">St Lucia</option>
                                       <option value="St Maarten">St Maarten</option>
                                       <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                       <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                       <option value="Saipan">Saipan</option>
                                       <option value="Samoa">Samoa</option>
                                       <option value="Samoa American">Samoa American</option>
                                       <option value="San Marino">San Marino</option>
                                       <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                       <option value="Saudi Arabia">Saudi Arabia</option>
                                       <option value="Senegal">Senegal</option>
                                       <option value="Seychelles">Seychelles</option>
                                       <option value="Sierra Leone">Sierra Leone</option>
                                       <option value="Singapore">Singapore</option>
                                       <option value="Slovakia">Slovakia</option>
                                       <option value="Slovenia">Slovenia</option>
                                       <option value="Solomon Islands">Solomon Islands</option>
                                       <option value="Somalia">Somalia</option>
                                       <option value="South Africa">South Africa</option>
                                       <option value="Spain">Spain</option>
                                       <option value="Sri Lanka">Sri Lanka</option>
                                       <option value="Sudan">Sudan</option>
                                       <option value="Suriname">Suriname</option>
                                       <option value="Swaziland">Swaziland</option>
                                       <option value="Sweden">Sweden</option>
                                       <option value="Switzerland">Switzerland</option>
                                       <option value="Syria">Syria</option>
                                       <option value="Tahiti">Tahiti</option>
                                       <option value="Taiwan">Taiwan</option>
                                       <option value="Tajikistan">Tajikistan</option>
                                       <option value="Tanzania">Tanzania</option>
                                       <option value="Thailand">Thailand</option>
                                       <option value="Togo">Togo</option>
                                       <option value="Tokelau">Tokelau</option>
                                       <option value="Tonga">Tonga</option>
                                       <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                       <option value="Tunisia">Tunisia</option>
                                       <option value="Turkey">Turkey</option>
                                       <option value="Turkmenistan">Turkmenistan</option>
                                       <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                       <option value="Tuvalu">Tuvalu</option>
                                       <option value="Uganda">Uganda</option>
                                       <option value="United Kingdom">United Kingdom</option>
                                       <option value="Ukraine">Ukraine</option>
                                       <option value="United Arab Erimates">United Arab Emirates</option>
                                       <option value="United States of America">United States of America</option>
                                       <option value="Uraguay">Uruguay</option>
                                       <option value="Uzbekistan">Uzbekistan</option>
                                       <option value="Vanuatu">Vanuatu</option>
                                       <option value="Vatican City State">Vatican City State</option>
                                       <option value="Venezuela">Venezuela</option>
                                       <option value="Vietnam">Vietnam</option>
                                       <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                       <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                       <option value="Wake Island">Wake Island</option>
                                       <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                       <option value="Yemen">Yemen</option>
                                       <option value="Zaire">Zaire</option>
                                       <option value="Zambia">Zambia</option>
                                       <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div>
                                    <input type="submit" value="Submit" name="log-in" class="r3r1c1r2c1r8"/>                           
                                </div>
                        </form>
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
		<script type="text/javascript" src="js/edit_profile.js"></script>
	</body>
</html>
