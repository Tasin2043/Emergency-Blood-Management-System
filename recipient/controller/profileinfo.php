<?php

if($_SERVER["REQUEST_METHOD"]=="GET")
{
    $email=$_SESSION['email'];
    $sql="select * from users where email='$email'";

    include '../model/db.php';
    $connect=new db();
    $conobj=$connect->OpenCon();

    $result=$connect->SelectQuery($conobj,$sql);
    $result=$result->fetch_assoc();
    //echo $result['name'];
    $connect->CloseCon($conobj);

    // header('location:../view/profileinfo.php');
}

?>