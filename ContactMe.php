<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/styles1.css">
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>	
	$(function() {
			//slideshow 1
		$(".rslides").responsiveSlides({
			maxwidth:1080,
			speed:200
		});
	});
</script>

<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <link rel="stylesheet" type="text/css" href="css/styleIE8.css">
<![endif]-->
<title>Makenzies Portfolio Site</title>
</head>

<body>
<header>
<img class="logo" src="img/Logo.png" alt="logo">

</header>
<nav>
	<ul>
        <li class="liLinks"><a class="nav" id="HOME" href="index.html">Home</a></li>
        <li class="liLinks"><a class="nav" id="Krazy" href="burger.html">Burger Builder</a></li>
    	<li class="liLinks"><a class="nav" id="Bridle" href="bridle.html">Bridle Shop</a></li>
		<li class="liLinks"><a class="nav" id="Big" href="bestHorseCarriage.html">PTI Drama Club</a></li>
		<li class="liLinks"><a class="nav" id="CONTACTME" href="ContactMe.php">Contact Me</a></li>
	</ul>
</nav>


<body>
		<?php
			if (isset($_REQUEST['email']))
	//if "email" is filled out, send email
  			{
  	//send email
 				 $email = $_REQUEST['email'] ;
  				 $subject = $_REQUEST['subject'] ;
 				 $message = $_REQUEST['message'] ;
  				 mail("makenzie@makenzieambrosedesigns.com", $subject,
 				 $message, "From:" . $email);
 		    	 echo "Thank you for your contacting me, I will get back to you as soon as I can!";
  			}
			else
	//if "email" is not filled out, display the form
  			{
  				echo "<form method='post' action='ContactMe.php'>
  					  Email: <input name='email' type='text'><br>
  					  Subject: <input name='subject' type='text'><br>
  					  Message:<br>
  					  <textarea name='message' rows='15' cols='40'>
  					  </textarea><br>
					  <input type='submit'>
					  </form>";
   			}
			
		?>	
    	
        

</body>
</html>
