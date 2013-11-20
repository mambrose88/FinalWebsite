<?php
//must start a session because below we'll refer to session vars from login
session_start();
//put code from external file right here before the doctype:
include("function-lib.php");
	$selected_id=$_POST['chosen_id'];
	
	$result = run_my_query("SELECT * FROM bridles WHERE id=$selected_id");
	
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
     
     <h3>Individual Bridle</h3>
<?php

$result -> data_seek(0);

while($row = $result -> fetch_assoc()){

	
	$ic_Name = $row['Name'];
	$ic_id = $row['id'];
	$ic_Price = $row['Price'];
	$ic_Descr = $row['Descr'];
	$ic_Lg = $row['Lg'];
	
?>
<section class="individualBridle">
<h3><?php echo $ic_Name; ?></h3>
<p class="Image">
 <img class="image" src="images/<?php echo $ic_Lg; ?>"/>
<p class="price"> $<?php echo $ic_Price; ?></p> <p class="descr"><?php echo $ic_Descr; ?></p>
</p>
<?php } 

?>
</section>
</body>
 <footer>Copyright &copy; Makenzie Ambrose, Web Developer</footer>

</html>
