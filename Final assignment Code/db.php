<?php
$host = 'localhost' ;
$dbUser ='root';
$dbPass ='';
$dbName ='bagchal';
 
$db = new MySQL( $host, $dbUser, $dbPass, $dbName ) ;
$db->selectDatabase();
?>
