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
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
      $sql="UPDATE users
SET name = '$_POST[name]', phone_number = '$_POST[phone_number]', gender='$_POST[gender]',blood_group='$_POST[blood_group]'
  ,location='$_POST[location]' WHERE email='$_POST[email]'";

      include '../model/db.php';
      $connect=new db();
      $conobj=$connect->OpenCon();

      $result=$connect->UpdateQuery($conobj,$sql);
      echo $result;
      $connect->CloseCon($conobj);

      header('location:../view/profileinfo.php');
  }

?>