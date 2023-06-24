<?php
$servername="localhost";
$username="root";
$password="";
$dbname="water_board";

$conn=new mysqli("$servername","$username","$password","$dbname");

if($conn){

}else{
	echo "Connection Failed";
}

?>