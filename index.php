<?php require_once('inc/connection.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>LMS@NSBM</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">  
		<link src="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<script>
		.mySlides{display:none;}
	</script>

</head>


<body bgcolor="#eee" >

<div class="wrapper">
	<div class="top-bar clearfix">
		<div class="top-bar-links">
			 <ul>
			 	<li><a href="register.php"><strong>SignUp</strong></a></li>
			 	<li><a href="login2.php"><strong>Login</strong></a></li>
			 </ul>
		</div>
	</div>

	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Lectures</a></li>
				<!--<div
					<ul>
						<li><a href="">School Of Computing </a></li>
						<li><a href="">School Of Business </a></li>
						<li><a href="">School Of Engineering </a></li>
					</ul>
				</div> -->
			<li><a href="#">Things To Do</a></li>
			<!--
				<div class="dropdowncontent">

				</div>	
				<ul>
					<li><a href="#">Clubs</a></li>
						<ul>
							<li><a href="#">Foss</a></li>
							<li><a href="#">Deveops</a></li>
							<li><a href="#">Robotics</a></li>
							<li><a href="#">Debet</a></li>
							<li><a href="#">Aviation</a></li>
						</ul>
					<li><a href="#">Events</a></li>
						<ul>
							<li><a href="#">Events by SOC</a></li>
							<li><a href="#">Events by SOB</a></li>
							<li><a href="#">Events by SOE</a></li>
						</ul>
					<li><a href="#">Activities</a></li>
						<ul>
							<li><a href="#">Sports</a></li>
								<ul>
									<li><a href="#">Swimming</a></li>
									<li><a href="#">Cricket</a></li>
									<li><a href="#">Archey</a></li>
								</ul>
							<li><a href="#">Entertainment</a></li>
						</ul>
				</ul>-->
			<li><a href="#">Universities</a></li>
			<!--	<ul>
					<li><a href="#">NSBM offered Degrees</a></li>
					<li><a href="#">University College of Dublin</a></li>
					<li><a href="#">Plymouth University</a></li>
					<li><a href="#">Limcokwing University</a></li>
				</ul> -->








				 <div class="dropdown">
    <button class="dropbtn">Dropdown</button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 












		</ul>
	</nav>

		<div class="homeslidebar" style="max-width: auto" >
			<img class="mySlides" src="img/slide1.jpg" height="450px"  width="1000px" >
			<img class="mySlides" src="img/slide2.jpg" height="450px"  width="1000px" >
			<img class="mySlides" src="img/slide3.jpg" height="450px"  width="1000px" >
		</div>

		<!--Slide Bar in Home Page-->
		<script>
		var mySlide1 = 0;
		changeslide();
		
			function changeslide() {
   			 var i;
    		 var x = document.getElementsByClassName("mySlides");
   				 for (i = 0; i < x.length; i++) {
      				 x[i].style.display = "none";  
    			}

    		mySlide1++;
    			if (mySlide1 > x.length) {mySlide1 = 1}    
    			x[mySlide1-1].style.display = "block";  
    			setTimeout(changeslide, 3000); 
			}
		</script>



			<div class="homecontent clearfix">
				<div class="homecol">
					<h2>Affliated Universities</h2>
					<div class="uni">
						<img src="img/ucd.gif" alt="ucd"> 
						<h3>University College Of Dublin</h3>
						<p>About information on UCD goes <a href="http://www.ucd.ie/about-ucd/">here...</a></p>
					</div>
					<br>
					<div class="uni">
						<img src="img/plymouth.png" alt="ply"> 
						<h3>Plymouth University</h3>
						<p>About information on Plymouth goes here...</p>
					</div>
					<br>
					<div class="uni">
						<img src="img/lim.png" alt="lim"> 
						<h3>Limkokwing University</h3>
						<p>About information on Limkokwing goes here...</p>
					</div>
					<br>
					<div class="uni">
						<img src="img/vic.png" alt="vic"> 
						<h3>Victoria University</h3>
						<p>About information on Victoria goes here...</p>
					</div>
				</div>

				<div class="homecol">
					<h2>About NSBM</h2>
					<center><img src="img/about.jpg" alt="nsbmgreenuni"></center>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br>
					<a href="http://nsbm.lk/nsbm/about.php">Read More About us &raquo;</a>
				</div>


				<div class="homecol">
					<h2>Recent News</h2>
					<div class="quote">
						<i class="fa fa-quote-left" aria-hidden="true" fa-4x></i>
						<h3>E.A. WEERASINGHE - CEO</h3>
						<P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco </p>
					</div>
				</div>

			</div>


			<footer>
				<div class="footercol">
					<h3>Powerd By</h3> 
						<div class="address">
							<h4>NSBM Green University Town</h4><br>
							<h5>
								309 , Dampe ,<br>
								Pitipana Road ,	<br>
								Colombo ,<br>
								Sri Lanka	
							</h5>
							<br>
							<h5>
								inquiries@nsbm.lk <br> 011 544 5000
							</h5>
						</div>
				</div>

				<div class="footercol">
					 <h3>Contact Us</h3>
					 	<form action="index.html">
					 		<input type="text" name="fname" placeholder="Enter Your First Name" required>
					 		<input type="text" name="lname" placeholder="Enter Your Last Name" required>
					 		<input type="text" name="email" placeholder="Enter Your Email" required>
					 		<textarea name="message" placeholder="Type Your Message" cols="23" rows="8"></textarea>
					 		<button>Submit</button>
					 	</form>
				</div>

				<div class="footercol">
					<h3>Social media</h3> 
					
				</div>

				<div class="footercol">
					<h3>Tweets</h3> 
					<div class="tweet">
						<a href="#">@NSBMGreenUni</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco <br>2 days ago</p>

					</div>
				</div>

			</footer>

			<div class="copyright">
				<div class="left">
					Copyright &copy; www.nsbm.lk All Right Reserverd 2017
				</div>

				<div class="right">
					This is Developed by Team Red-X
				</div>
			</div>


</div>

</body>
</html>

<?php mysqli_close($connection);  ?>
