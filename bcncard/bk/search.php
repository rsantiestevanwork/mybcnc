<?php
/**
*	##########################################################################################
*	Comments:
*	This file is to show how to retrieve records from a database with PDO
*	The records are shown in a HTML table.
*
*	Requires:
*	Connection.simple.php, get this file here: http://behstant.com/blog/?p=413
*   jQuery and Boostrap.
*
* 	LICENCE:
*	You can use this code to any of your projects as long as you mention where you
* 	downloaded it and the author which is me :) Happy Code.
*
*	##########################################################################################
*	@version
*	##########################################################################################
*	1.0	|	07-Nov-2013	|	Creation of new file to search a record.
*	##########################################################################################
*/
	/*require_once 'Connection.simple.php'; // We have to include this in order to use the dbConnect() function.
	$conn = dbConnect();
	$OK = true; // We use this to verify the status of the update.
	if (isset($_GET['name'])) { // Only execute the search if the name variable is define.
		// Create the query
		$data = "%".$_GET['name']."%";
		//$sql = 'SELECT * FROM employee WHERE name like ?';
        $sql ='SELECT user_id, meta_value  
                        FROM wp_usermeta
                        WHERE meta_key = ´nickname´
                        AND meta_value LIKE ?
                        ORDER BY meta_value';
		// we have to tell the PDO that we are going to send values to the query,
		// this is the best way to prevent Database injection.
		$stmt = $conn->prepare($sql);
		// Now we execute the query passing an array toe execute();
		$results = $stmt->execute(array($data));
		// Extract the values from $result
		$rows = $stmt->fetchAll();
		$error = $stmt->errorInfo(); // If an error occur this will have information as an array
		//echo $error[2]; // If we need the error detail you can it with this.
	}
*/
        //require_once('../wp-config.php');
        /* */	
        require_once('/home/diplomat213/theidc_clasfunc/dbconf.php');
        
        //Create connection
        $conn = mysql_connect($dbservername,$dbusername,$dbpassword ,$dbname);
        mysql_select_db('i900091_wp1') or die( mysql_error() );
        
            
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        } 

        $data = $_GET['name2']."%";
        $sql ="SELECT user_id, meta_value  
                        FROM wp_usermeta
                        WHERE meta_key = 'nickname' and meta_value LIKE '" . $data . "' ";

        $result = mysql_query($sql);

if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
	
    // If there are no records.
	if ( mysql_num_rows($result) > 0) {
    //if(empty($rows)) {
		
        while($row = mysql_fetch_assoc($result)) {
		//foreach ($rows as $row) {
                    //Its used for get_user_meta
	               require_once('../../wp-config.php');
            
                       /* Get data from wp_usermeta WooCommerce table*/
					   $user_id = $row['user_id'];
					   $keyFirstName = 'first_name';
					   $keyLastName = 'last_name';
					   $keyPhone = 'phone1';
					   $single = true;
					    
					   $firstName = get_user_meta( $user_id, $keyFirstName, $single ); 
					   $lastName = get_user_meta( $user_id, $keyLastName, $single ); 
					   $phone = get_user_meta( $user_id, $keyPhone , $single );
            
            
			echo "<tr>";
				echo "<td>".$row['user_id']."</td>";
				echo "<td>".$row['meta_value']."</td>";
                echo "<td>".$firstName."</td>";
                echo "<td>".$lastName."</td>";
                echo "<td>".$phone."</td>";
				echo "<td>Details</td>";
				
				//echo "<td>"."<a href=http://www.theidc.org.uk/jenuesi/DetailsPackages.php?id?user=" . 
					//			 $row["user_id"] . " title='Details'>Details</a>"."</td>";
				//echo "<td>".$row['email']."</td>";
				//echo "<td>".$row['telephone']."</td>";
			echo "</tr>";
		}
	}
	else {
		// Let us print the database results
        echo "<tr>";
			echo "<td colspan='6'>There were not records</td>";
		echo "</tr>";
	}
?>