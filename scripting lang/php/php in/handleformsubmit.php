<?php
$_servername="localhost";
$username="root";
$password="231998";
$dbname="Reg";
$tablename="user";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phoneNumber=$_POST['phoneNumber'];

    //connect to db
    $conn=mysqli_connect($servername,$username,$password) or die(mysqli_error());//connect to server
mysqli_select_db($conn,$dbname)or ("cannot connect to db");//connect to db

//insert the value into databse
mysqli_query($conn,"INSERT INTO".$table."(name,address,phoneNumber) VALUE ('$name','$address'
print'<script>alert("congrats! your submission is sucessfull Registered!");</script>';
print'<script>window.location.assign("listuser.php");</script>';redirect to listuser.php

 
}
