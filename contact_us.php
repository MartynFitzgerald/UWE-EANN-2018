<!doctype html>
<html lang="en">
<head>
  
<?php
$fname = $lname = $email = $message = $error = $emailsent = "";
$email_to="Elias.Pimenidis@uwe.ac.uk";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
if (empty($_POST["fname"])) {
    $error = "There is a problem with some of the information you have submitted.
			  Please amend the fields that have a * beside them and re-submit this form.";
  } else {
    $fname = test_input($_POST["fname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $error = "Only letters and white space allowed within the first name field."; 
    }
}
if (empty($_POST["lname"])) {
    $lname = "";
  } else {
    $lname = test_input($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $error = "Only letters and white space allowed within the last name field."; 
    }
}
if (empty($_POST["email"])) {
    $error = "There is a problem with some of the information you have submitted.
			  Please amend the fields that have a * beside them and re-submit this form.";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error = "Invalid email format"; 
	}
}
    
  if (empty($_POST["message"])) {
    $error = "There is a problem with some of the information you have submitted.
			  Please make sure you fill out the fields that have a * beside them and re-submit this form.";
  } else {
    $message = test_input($_POST["message"]);
  }
}

if( empty($error) && !empty($fname) && !empty($email) && !empty($message)){
	$subject = 'EANN 2018 - Contact us form - '.$fname.' '.$lname;
	$main_content = $message."\r\n".'From: '.$fname.' '.$lname."\r\n".'Email: '.$email;
	$headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n";
	mail($email_to, $subject, $main_content, $headers);  	
			
	$emailsent = "Form sent, we will contact you by email. \n";	
	
	$fname = $lname = $email = $message = $error = "";
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<!-- Custom styles for this template -->
    <link rel="stylesheet" href="styles.css">
	<!-- Calling the JavaScript file -->
	<script src="scripts.js"></script>
</head>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<body>
<!-- This is the start of gallery -->
<div class="slider" id="main-slider">
	<div class="slider-wrapper">
		<img src="pictures/picture2.jpg" class="slide"/>
		<img src="pictures/picture1.jpg" class="slide"/>
		<img src="pictures/picture3.jpg" class="slide"/>
		<img src="pictures/picture4.jpg" class="slide"/>
		<img src="pictures/picture5.jpg" class="slide"/>
		<img src="pictures/picture6.jpg" class="slide"/>
		<img src="pictures/picture7.jpg" class="slide"/>
		<img src="pictures/picture8.jpg" class="slide"/>
	</div>
</div>	
<!-- This is the end of gallery -->
<!-- This is the start of navbar -->
<nav class="navbar navbar-expand-md navbar-dark nav-bg-dark horizontalLine">	
	<!-- This is the menu button for small screen devices -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuID" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- This is they main menu for bigger screen devices -->
	<div class="collapse navbar-collapse" id="menuID">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="dates.html">Important Dates</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="venue.html">Venue</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="registration.html">Registration</a>
          </li>
		  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Call For</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="cf_papers.html">Call For Papers</a>
              <a class="dropdown-item" href="cf_workshop.html">Call For Workshops</a>
              <a class="dropdown-item" href="cf_student.html">Call For Student Forum</a>
            </div>
          </li>
		  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Workshops</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="w_one.html">Workshop NIANN2018</a>
              <a class="dropdown-item" href="w_two.html">Tutorial 1</a>
              
            </div>
          </li>
		  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Organisation</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="organisation_committee.html">Organisation committee</a>
			  <a class="dropdown-item" href="program_committee.html">Program committee</a>
              <a class="dropdown-item" href="previous_eann_events.html"> EANN Past and Future</a>
            </div>
          </li>
		  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Publications & Keynotes</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="keynote_speakers.html">Keynote Speakers</a>
              <a class="dropdown-item" href="special_issues.html">Special issues</a>
              <a class="dropdown-item" href="submission.html">Submission</a>
            </div>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="contact_us.php">Contact Us <span class="sr-only">(current)</span></a>
          </li>
        </ul>
	</div>
</nav>
<!-- This is the end of navbar -->
<!-- This is the start of main content -->
<main role="main" class="container">
	<div id="main-content" class="verticalLine">
		<br>
		<br>
		<div class="article">
			<h2>Contact us</h2>
			<p>This is the area you can contact us to find out more information or to ask any questions you have.
			<br><br>
		</div>
		<span class="error_contact_us"><?php echo $error;?></span>
		<span class="sent_contact_us"><?php echo $emailsent;?></span>
		<div class="container_contact_us">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

				<label for="fname">*First Name</label>
				<input type="text_cu" id="fname" name="fname" placeholder="Your name..." value="<?php echo $fname;?>">

				<label for="lname">Last Name</label>
				<input type="text_cu" id="lname" name="lname" placeholder="Your last name..." value="<?php echo $lname;?>">
				
				<label for="email">*Email</label>
				<input type="text_cu" id="email" name="email" placeholder="Example 'Mike@eann2018.org' " value="<?php echo $email;?>">

				<label for="message">*Message</label>
				<textarea id="message" name="message" placeholder="Write something.." style="height:200px"><?php echo $message;?></textarea>

				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
		<br>
		<br>
	</div>
	<div id="news">
		<br>
		<br>
		<div class="news-article">
			<h3></h3>
			<br>
			<a href="http://www.uwe.ac.uk/"><img src="pictures\UWE_logo.png" width="180" height="100"></a>
			<br>
			<br>
			<a href="https://www.inns.org/"><img src="pictures\INNS_logo.png" width="180" height="100"></a>
			<br>
			<br>
			<a href="http://www.springer.com/gb/"><img src="pictures\Springer_logo.png" width="180" height="80"></a>
			<br>
			<br>
			<a style="padding-left: 1.1em;" href="http://www.springer.com/series/7899"><img src="pictures\ccis.jpg" width="140" height="80"></a>
			<br>
			<br>
			<br>
			<h3>Links</h3>
			<ml class="menu_list">
				<li><a href="index.html"> Home</a></li>   
				<li><a href="dates.html"> Important Dates</a></li>                   
				<li><a href="venue.html"> Venue</a></li>                  
				<li><a href="cf_papers.html"> Call For Papers</a></li>                  
				<li><a href="organisation_committee.html"> Organisation committee</a></li>               
				<li><a href="previous_eann_events.html">  EANN Past and Future</a></li>              
				<li><a href="contact_us.php"> Contact Us</a></li>              
			</ml>
		</div>
	</div>
</main>
<!-- This is the end of main content -->
<!-- This is the start of footer -->
<div id="footer">
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 footerleft ">
						<h6 class="heading7">LOCATION</h6>
						<p>The University of the West of England, Bristol is a public university located in and around Bristol, United Kingdom.</p>
						<p><i class="fa fa-map-pin"></i> Coldharbour Lane, Stoke Gifford, Bristol BS16 1QY</p>
						<p><i class="fa fa-phone"></i> Phone (UK) : 011732 86091</p>
						<p><i class="fa fa-envelope"></i> E-mail : elias.pimenidis@uwe.ac.uk</p>
					</div>
					<div class="col-md-2 col-sm-6 paddingtop-bottom">
						<h6 class="heading7">LINKS</h6>
						<ul class="footer-ul">
							<li><a href="index.html"> Home</a></li>
							<li><a href="dates.html"> Important Dates</a></li>
							<li><a href="venue.html"> Venue</a></li>
							<li><a href="cf_papers.html"> Call For Papers</a></li>
							<li><a href="organisation_committee.html"> Organisation committee</a></li>
							<li><a href="contact_us.php"> Contact Us</a></li>
						</ul>
					</div>
					<div class="col-md-5 col-sm-6 paddingtop-bottom">
						<h6 class="heading7">LATEST NEWS</h6>
						<div class="post">
						<p>EANN 2018 website has just been put online and ready for members to view all the information. <span>November 20,2017</span></p>
						<p>Make sure you keep a eye on the important dates just in-case they change. <span>November 21,2017</span></p>
	
						<!--<form>
							<input type="text" id="search_id" name="search" placeholder="Search...">
						</form>-->
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<!-- This is the end of footer -->

</body>
</html>
