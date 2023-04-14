<!-- ************ The dbConfig.php file is used to connect and select the database. 
Specify the database host ($dbHost), username ($dbUsername), password ($dbPassword), 
and name ($dbName)as per your MySQL database credentials. ***************-->
<!-- ************************************************************************** -->

<?php  
 
// Database configuration  
    $dbHost     = "localhost";  
    $dbUsername = "root";  
    $dbPassword = "root";  
    $dbName     = "codexworld_db";  
    
// Create database connection  
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
} 
 
?>