<?php
// errroe_reporiting(0);
$servername ="localhost";
$username ="root";
$password="231998";
$dbname="reg";

//$mysql=new mysqli("localhost","root","231998","reg");
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo "connecton ok";
}
else{
    echo "connection failed"mysqli_connect_error();
}



?>