<?php
require "conn.php";

$data=array();


$seasonid=0;
$userid=0;
$growerid=0;



if (isset($_GET['created_at']) && isset($_GET["userid"])) {


$userid=$_GET['userid'];
$created_at=$_GET['created_at'];


 $sql = "select * from sold_bale where created_at='$created_at'";
$result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    $temp=array("barcode"=>$row["barcode"],"mass"=>$row["mass"],"price"=>$row["price"],"created_at"=>$row["created_at"],"grower_num"=>$row["grower_num"]);
    array_push($data,$temp);
    
   }
 }

}





 echo json_encode($data); 



?>