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

<form action="process-login.php" method="POST" >
	<p>Username: <input type="text" name="uname"/></p>
    <p>Password: <input type="password" name="upass"/></p>
    <p><input type="submit"  class="btn" value="Log In"></p>
</form>

</body>
 <footer>Copyright &copy; Makenzie Ambrose, Web Developer</footer>
</html>