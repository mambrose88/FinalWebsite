<?php
//must start a session because below we'll refer to session vars from login
session_start();
//only show session vars if they were set by process-login

//put code from external file right here before the doctype:
include("function-lib.php");
//call the run_my_query()function from that include
$result = run_my_query('SELECT * FROM bridles');

//if user ia not admin, empty var will be shown below ; they wont see add link
$deletelink ='';
$addlink ='';
$logoutlink = '';
$productslink = '<a class="home" href="details-bridles.php">Products</a>';
$loginlink = '<a class="home" href="login.php">Login</a>';

//if user has loggeed in set up the html to show them the add link
if(isset($_SESSION['logged_in'])){
	$addlink = '<a class="home" href="add-bridle.php">Add Bridles</a>';
	$deletelink = '<a class="home" href="details-bridles-login.php">Products</a>';
	$logoutlink = '<a class="home" href="logout.php">Log Out</a>';	
	$productslink = '';
	$loginlink ='';
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Need a Hand Bridles-Main</title>
<link rel="stylesheet" type="text/css" href="css/details-indiv.css">
</head>
<body class="clearfix">
<article class="articleheader">
<h1 >
<img class="header" src="PNGFiles/HeaderImg.png" alt="header"/></h1>
	<nav class="navigation">
    	<a class="home" href="intro.php">Home</a>
        <?php echo $productslink;?>
        <?php echo $loginlink;?>
        <?php echo $addlink;?>
        <?php echo $deletelink;?>
        <?php echo $logoutlink?>

     </nav>

	<form id="form_add" action="add-bridle-process.php" method="POST" enctype="multipart/form-data">
    	<p>New Bridle: <input type="text" name="ubridle"/><span id="bridleFeedback"></span></p>
       	<p>Price: <input type="text" name="uprice"/><span id="PriceFeedback"></span></p>
        <p>Upload a thumbnail image of the bridle you would like to add(250x250 jpg)<input type="file" name="uthumb"/></p>
		<p><input type="submit" value="Add this bridle!"/></p>
    </form>
</article>  
 <footer>Copyright &copy; Makenzie Ambrose, Web Developer</footer>
</body>

</html>
