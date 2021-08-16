<?php
$match_erro="";
$success="";
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     $valid=true;

     if($_POST["new_password"]!=$_POST["c_new_password"]){
         $match_erro="Confirm password hasn't matched";
         $valid=false;
     }
     if($_POST["new_password"]==""){
         $match_erro="Please insert a new password";
         $valid=false;
     }

     if($valid==true){
         $sql="UPDATE users
SET password = '$_POST[new_password]' WHERE email='$_SESSION[email]'";

         include '../model/db.php';
         $connect=new db();
         $conobj=$connect->OpenCon();

         $result=$connect->UpdateQuery($conobj,$sql);

         $connect->CloseCon($conobj);

         $success="Password have been changed successfully";
     }

 }


?>