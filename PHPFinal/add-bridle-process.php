<?php 
	//put code from an external file right here before the doctype
	include("function-lib.php");
	
	//store in a variable the users choice of flavor from add-icecream.php:
  $newflavor= $_POST['uName'];
  $newprice= $_POST['uprice'];
 //////////////////////////////START FINDING NEW ID////////////////////////// 
 //make a vaariable to store the new id number the new record will get
 	$new_id=0;
	//run a query to get the higest id number currently used
	$result = run_my_query('SELECT * FROM bridles ORDER BY id DESC LIMIT 1');
//et the poiner to point at the first row retrieved by the SELECT
$result -> data_seek(0);
//this while loop does what's in {} for each row retrieved stopping when it runs out of rows.
while($row = $result -> fetch_assoc()){
	//print_r($row);
	
	$ic_Name = $row['Name'];
	$ic_id = $row['Price'];
}
//add one to the highest ID to get the new id
	$new_id++;
   /////////////////END FINDING NEW ID////////////////

  //store the old file name of the thumb image the user uploaded
  	$newthumb= 'th'.$new_id.$_FILES['uthumb']['name'];
//move the uploaded thumb from its temporary location to a path and filename of our choice
	move_uploaded_file($_FILES['uthumb']['tmp_name'],"img/$newthumb.jpg");	
	//call the runMyQuery() function from that include
	$result = run_my_query("
INSERT INTO ice_cream
(	  id,flavor,		  price,     thumb)
	VALUES 
	(null, '$newName', $newprice, '$uthumb');
");

//redirect the user to the page. header('location
	header('Location:details-bridles.php');
?>