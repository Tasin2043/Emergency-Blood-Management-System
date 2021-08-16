<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phone_number=$_POST["phone_number"];
    $gender=$_POST["gender"];
    $blood_group=$_POST["blood_group"];
    $location=$_POST["location"];

    include '../model/db.php';



    $sql="INSERT INTO  users
  VALUES (' ','$name','$email','$password', '$phone_number','$gender','$blood_group','$location')";




    $connect=new db();
    $conobj=$connect->OpenCon();

    $connect->InsertQuery($conobj,$sql);
    $connect->CloseCon($conobj);


}




//if($valid==true)
//{
//
//
//
//    include('../model/db.php');
//    $sql= "select * from users where email='$username' and password='$password'";
//
//    $db=new db();
//    $conn=$db->OpenCon();
//    $data=$db->SelectQuery($conn,$sql);
//
//    $data=$data->fetch_assoc();
//    $type=$data['type'];
//
//
//    if(!empty($data))
//    {
//        $_SESSION['email']=$data['email'];
//        header('location:./receiptenthome.php');
//    }
//    else{
//        $invalid_user="Invalid user";
//    }
//
//    $db->CloseCon($conn);
//
//
//
//
//}


?>