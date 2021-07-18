<?php 

$server="localhost";
$username="id17258530_root";
$password="Admin@31072000";
$db="id17258530_udrbank";

$conn=mysqli_connect($server,$username,$password,$db);

if(!$conn){
    die("connection to this database failed due to " .mysqli_connect_error());
}
?>
