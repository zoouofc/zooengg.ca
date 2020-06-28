<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--
	Electrical, Computer, and Software Engineering Students' Society Website
	Website Created in 2020 by Ines Rosito.
-->
	<head>
		<title>
			Become a Sponsor
		</title>
		<!-- Style Guides -->
		<link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="/styles/website-style.css">
		<link rel="stylesheet" type="text/css" href="../../styles/sponsor-form-style.css">
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/png" href="/icon-images/favicon.png">
	</head>

  <body>

		<h1 id="council-name"> Electrical, Computer, and Software Engineering Students' Society </h1>
</div>

<div id="dropdown">
	<nav>
		<a href="/zoo/index.html"><img  id="zoo-logo" src="/icon-images/zoo.png"></a>
		<div class="vertical-line"></div>
		<ul>
			<li><a href="/main/index.html">HOME</a></li>
			<li><a href="#">COUNCIL<img class="arrow" src="/icon-images/icon-dropdown.png"></a>
				<ul>
					<li class="council-dropdown"><a href="/council/execs/index.html">EXECUTIVES</a></li>
					<li class="council-dropdown"><a href="/council/commissioners/index.html">COMMISSIONERS</a></li>
					<li class="council-dropdown"><a href="/council/applications/index.php">JOIN THE TEAM</a></li>
				</ul>
			</li>
			<li><a href="/events/index.html">EVENTS</a></li>
			<li><a href="#">SPONSORS<img class="arrow" src="/icon-images/icon-dropdown.png"></a>
				<ul>
					<li><a href="/sponsors/our-sponsors/index.html">OUR SPONSORS</a></li>
					<li><a href="/sponsors/sponsor-form/index.php">BECOME A SPONSOR</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</div>


		<div id="sponsor--body">
			<div id="sponsor--footer-setup">
				<div id="sponsor--content">
					<div id="sponsor-reasoning">
						<h1> Reasons to Sponsor</h1>
						<p> Over the past few years, there has been significant growth in the students enrolling into Software and Electrical Engineering. Therefore, as the Electrical, Computer, and Software Engineering Student's Society, it is our goal to ensure that these students are provided with the necessary resources to succeed in and out of the classroom. Ensuring a smooth transition from Post-Secondary to Industry is cruical as these will be the front-runners in the tehnological field in Calgary and the rest of the world. Through the help of our corporate sponsors, we will be able to _____</p><br>
						<p> Insert info about what events we will coordinate_______. For more details please review the Corporate Sponsorship Package below</p><br>
						<p>Insert text about how we accept sponsorships outtside of just monteary stuff</p><br><br>
						<a class="button" id="corporate-button" href="/sponsors/assets/CorporateSponsorPackage.pdf" target="_blank">Corporate Sponsorship</a>
					</div>

					<div id="sponsor-form">
						<h1>Contact Us About Sponsorships!</h1>
						<p>We look forward to hearing from you.</p>
						<form id="grid" action="/sponsors/sponsor-form/contact-form-sponsors.php" method="post" enctype="multipart/form-data">
							<label id="name" for="name">Name *</label>
							<label id="fname" for="fname">First Name</label>
							<input required id="fname-box" type="text" name="firstname" placeholder="First Name">

							<label id="lname" for="lname">Last Name</label>
							<input required id="lname-box" type="text" name="lastname" placeholder="Last Name">

							<label id="email" for="email">Email *</label>
							<input required id="email-box" type="text" name="email" placeholder="Email">

							<label id="company" for="company">Company/Organization</label>
							<input id="company-box" type="text" name="company" placeholder="Company/Organization">

							<label id="subject" for="subject">Subject *</label>
							<input required id="subject-box" type="text" name="subject" placeholder="Subject">

							<label id="message" for="comment">Message *</label>
							<textarea required maxlength="6000" id="message-box" name="message" placeholder="Message (6000 char. limit)"></textarea>

							<input id="submit" name="submit" type="submit" value="Submit">

						</form>
					</div>
				</div>
			</div>
		</div>

			<button onclick="topFunction()" id="to-top" title="Go to top">^</button>

	<div id="footer">
		<div id="grid">
			<div id="address">
				<h4> Electrical, Computer, and Software
				Engineering Students' Society<br></h4>
				<p>2500 University Drive, ENA 106<br>
				Calgary, Alberta, Canada<br>
				T2N 1N4</p>
			</div>
				<div id="site-links1">
					<h4>Site Links<br></h4>
					<ul>
						<li><a href="/main/index.html#main-title">   About Us</a></li>
						<li><a href="/council/execs/index.html">   Executive Council</a></li>
						<li><a href="/council/commissioners/index.html">   Commissioners</a></li>
						<li><a href="/council/applications/index.php">   Join the Team</a></li>
					</ul>
				</div>
				<div id="site-links2">
					<ul>
						<br><br>
						<li><a href="/events/index.html">Events</a></li>
						<li><a href="/sponsors/our-sponsors/index.html">Our Sponsors</a></li>
						<li><a href="/sponsors/sponsor-form/index.php">Become a Sponsor</a></li>
				</div>
		</div>

		<hr>
		<div id="social-media">
			<!--<p><b>FOLLOW US</b></p>-->
			<a href="https://www.linkedin.com/company/zooengg">
				<img class="media-icon" src="/icon-images/linkedin.png" alt="linkedin"></a>
			<a href="https://www.facebook.com/zooengg/">
				<img class="media-icon" src="/icon-images/facebook.png" alt="facebook"></a>
			<a href="https://www.instagram.com/inzoogram/">
				<img class="media-icon" src="/icon-images/instagram.png" alt="instagram"></a>
			<a href="mailto:execs@zooengg.ca">
				<img class="media-icon" src="/icon-images/mail-main.png" alt="email"></a>
			</div>

		<div id="copyright">
			Copyright &#169; 2020 University of Calgary's Electrical, Computer, and Software Engineering Students' Society.
		</div>

	</div>


		<!-- Scripts -->
		<script src="../../scripts/to-top.js"></script>

	</body>
	</html>