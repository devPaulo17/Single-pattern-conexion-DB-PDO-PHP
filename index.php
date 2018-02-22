<?php
	require("Db.class.php");
	// Creates the instance
	$db = new Db();
        
    
	$db->bind("username","DevPaul");
    $db->bind("email","chechin32@hotmail.com");
    
	// 2. Bind more parameters
	$db->bindMore(array("username"=>"DevPaul","email"=>"chechin32@hotmail.com"));		
	// 3. Or just give the parameters to the method
	$db->query("SELECT * FROM users WHERE username = :username AND email = :email", array("username"=>"DevPaul","email"=>"chechin32@hotmail.com"));
	//  Fetching data
	$person 	 =     $db->query("SELECT * FROM Persons");
	// If you want another fetchmode just give it as parameter
	$persons_num     =     $db->query("SELECT * FROM Persons", null, PDO::FETCH_NUM);
	
	// Fetching single value
	$username	 =     $db->single("SELECT username FROM Persons WHERE Id = :id ", array('id' => '3' ) );
	
	// Single Row
	$id_email 	 =     $db->row("SELECT Id, email FROM Persons WHERE username = :f", array("f"=>"Zoe"));
		
	// Single Row with numeric index
	$id_email_num      =     $db->row("SELECT Id, email FROM Persons WHERE username = :f", array("f"=>"Zoe"),PDO::FETCH_NUM);
	

	$update		 =  $db->query("UPDATE Persons SET username = :f WHERE Id = :id",array("f"=>"DevPauly","id"=>"1")); 


?>