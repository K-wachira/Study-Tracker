<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass ='';
$dbname = 'Study-Tracker';

$connection =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connection){
    die("Could not connect ...... ".mysqli_connect_error());

}
// return $connection;
// }
