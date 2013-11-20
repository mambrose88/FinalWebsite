<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/reset.css"/>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="js/script.js"></script>
<title>Best Horse Drawn Carriage Service</title>
</head>
<body>
	<header>    
    	<img src="img/HeaderBanner.png" alt="header"/> <div class="headername">Best Horse Drawn Carriage Service<br />
        												Jim and Sandy Best</div>		
    		<ul>
                  <li class="nav"><a href="index.html">Home</a></li>
                  <li class="nav"><a href="AboutUs.html">About Us</a></li>
                  <li class="nav"><a href="pictures.html">Pictures</a></li>
                  <li class="nav"><a href="ContactUs.php">Contact Us</a></li>
              	</ul>

    </header>
                
            <?php
			if (isset($_REQUEST['email']))
	//if "email" is filled out, send email
  			{
  	//send email
 				 $email = $_REQUEST['email'] ;
  				 $subject = $_REQUEST['subject'] ;
 				 $message = $_REQUEST['message'] ;
  				 mail("m.ambrose88@gmail.com", $subject,
 				 $message, "From:" . $email);
 		    	 echo "Thank you for your contacting me, I will get back to you as soon as I can!";
  			}
			else
	//if "email" is not filled out, display the form
  			{
  				echo "<form method='post' action='ContactUs.php'>
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