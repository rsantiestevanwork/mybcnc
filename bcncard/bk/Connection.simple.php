<?php
/**
*	@author 	Ing. Israel Barragan C.  Email: ibarragan at behstant dot com
*	@since 		07-Jun-2013
*	##########################################################################################
*	Comments:
*	This includes a function that will return a PDO Instance.
*	##########################################################################################
*	@version
*	##########################################################################################
*	1.0	|	06-Jun-2013	|	Creation of new class with parameter as constructor.
*	##########################################################################################
*/

/**
 * This will make the connection with the database using PDO
 * @return PDOObject A PDO object with all the functions to interact with the database.
 * @execption If the connection failed
 */
function dbConnect (){
    require_once('../../../wp-config.php');
        /* */	
        require_once('/home/diplomat213/theidc_clasfunc/dbconf.php');
        
        //Create connection
        $conn = mysql_connect($dbservername,$dbusername,$dbpassword ,$dbname);
    
 	$conn =	null; // Initialize the variable.
 	$host = 'localhost'; //Your host domain or ip address, usually is localhost if you
 						 // are on a host like GoDaddy, HostGator, etc.
 	$db = 	'i900091_wp1'; // The database name.
 	$user = 'i900091_wp1'; // The database user name.
 	$pwd = 	'[UWA8KA$_V(6s*3U}6'; // The database user password.
    
    
    
	//try {
		/*
			1. The first parameter is the connection string, in the string you define the host
			   and the database. You don change this unless you are working with a different database.
			2. The database user name.
			3. The database user password.
		 */
	   	//$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		//echo 'Connected succesfully.<br>';
	//}
	if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        } 
    //catch (PDOException $e) { // PDOException object in case of failure.
	//	echo '<p>Cannot connect to database !!</p>';
	//	echo '<p>'.$e.'</p>'; // $e will print the entire error detail so if you put this into a live server
							  // make sure to comment this line.
	   // exit; // Tell PHP to execute code no more.
	//}
	return $conn; // PDO object with its function and properties.
 }

 ?>