<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'id4895958_crud_db';
$databaseUsername = 'id4895958_alfarisi';
$databasePassword = 'alfarisi';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);  
 
?>