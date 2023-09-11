<?php

$server 	= "localhost";
$username 	= "root";
$pwd		= "";
$db_name 	= "samuderaabadi";

$con = mysqli_connect($server,$username,$pwd,$db_name) or die("server offlinee");


// class showdb{
// 		// get product from the database
// 	public function getData(){
// 	    $sql = "SELECT * FROM tabelproduk";

// 	    $result = mysqli_query($con, $sql);

// 	    if(mysqli_num_rows($result) > 0){
// 	        return $result;
// 	    }
// 	}	
// }

?>