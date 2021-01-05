<?php

if(isset($_REQUEST['user']) && isset($_REQUEST['password']))
{

	if(($_REQUEST['user'] == "rraphael") && ($_REQUEST['password'] == "12345"))
	{
		//http://localhost/login.php/?user=rraphael&password=12345
		$arr = array("val"  => 1,"message" => "User Found");
		echo json_encode($arr);
	}
	
	else 
	{
		//http://localhost/login.php/?user=lalala&password=12834
		$arr = array("val"  => 0,"message" => "User Not Found");
		echo json_encode($arr);
	}
}
else {
	
	    //http://localhost/login.php
		$arr = array("val"  => -1,"message" => "Invalid Request");
		echo json_encode($arr);
}