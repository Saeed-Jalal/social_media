<?php

$u_name =$_GET['user_name'];
$u_password =$_GET['password'];
$u_email =$_GET['email'];

$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "users";

$conn = mysqli_connect($host,$user,$pwd,$dbname);
if(!conn){
    die("Sorry. Can not connect");
}
$query = "SELECT * FORM users where user_name='u_name' AND password='u_password' AND email='u_email'" ;
$output = mysql_query($conn,$query);
if(mysqli_num_rows($output)==0){
    echo "fail";
}else{
    ech "success";
}
    


