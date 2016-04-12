<?php
/* 
create database contactdbs;
create user 'mycontact'@'localhost' identified by 'mycontact';
grant all on contactdbs.* to 'mycontact'@'localhost';
create table contact (
contactid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(255) NOT NULL,
lastname VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL
);
insert into contact (firstname, lastname, email) values ('myname', 'surname', 'myemail@company.com');
*/	
$servername = "localhost";
$username = "mycontact";
$password = "mycontact";

try {
    $conn = new PDO("mysql:host=$servername;dbname=contactdbs", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully" . "\n"; 
	foreach($conn->query('SELECT * from contact') as $row) {
        print_r($row);
		//var_dump($row);
    }
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// finished close connection
$conn = null;

?>