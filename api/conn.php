<?php 
$username="root";
$host="localhost";
$database="sold_bales";
$password="";


$conn=new mysqli($host,$username,$password,$database);

if($conn->connect_error){
die("connection field ". $conn->connect_error);
}

?>