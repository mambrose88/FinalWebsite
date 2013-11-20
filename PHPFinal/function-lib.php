<?php
//set a function that we can pass any query too. results will be returned to where the function was called
	function run_my_query($query){
		//connect to the server and the database. The mysqli need four paramaters.(server,username,pw,db name)
		$mysqli = new mysqli('BridlesDB.db.12006090.hostedresource.com','BridlesDB','Mudsmy1fan!','BridlesDB');
		//For troubleshooting, this will make a custom message appear if line 3 had a problem. 
		if($mysqli -> connect_errno){
			echo "Connection problem on line 3:".$mysqli -> connect_error;
		}
		//run a query to retrieve all row (record) data from our table SELECT * We'll store that in a var (array) called $result
		$result = $mysqli -> query($query) or die($query.' problem on line 9: '.$mysqli -> error);
		//close connection
		mysqli_close($mysqli);
		
	//send the retreived info back to where the function was called
			return $result;	
	//closes the function	
	}
?>