<?php
class UserDB {
private static $dsn = 'mysql:host=sql1.njit.edu;dbname=at358';
    private static $username = 'at358';
    private static $password = 'rhkGR7VNK';
    private static $db;
    private function __construct() {}
    public static function getUsers () {
try {
	    $conn = new PDO($dsn, $username, $password);
	    echo "Connected successfully<br>";
	    $sql = "SELECT * FROM accounts WHERE id < 6";
	    $q = $conn->prepare($sql);
	    $q->execute();
	    $users = $q->fetchAll();
	    if($q->rowCount() = 0){
	     INSERT INTO `accounts`(`id`, `email`, `fname`, `lname`, `phone`, `birthday`, `gender`, `password`) VALUES ([1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
       UPDATE `accounts` SET `id`=[value-1],`email`=[value-2],`fname`=[value-3],`lname`=[value-4],`phone`=[value-5],`birthday`=[value-6],`gender`=[value-7],`password`=[value-8] WHERE 1
       DELETE FROM `accounts` WHERE 1 
    		}
	    }else{
	    	foreach ($results as $row) {
        		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td></tr>";
	    } 
	  
      $q->closeCursor();
    
    }
     	    
    
catch(PDOException $e) 
	{
    	echo "Connection failed: " . $e->getMessage();
    }
$conn = null;
?>
