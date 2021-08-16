<?php





include '../model/db.php';
$connect=new db();
$conobj=$connect->OpenCon();
$sql="select * from donar_request";

$result=$connect->SelectQuery($conobj,$sql);
$connect->CloseCon($conobj);

// header('location:../view/profileinfo.php');


?>