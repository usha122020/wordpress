<?php

$host="localhost";
$user="root";
$password="root";
$db="uuser";

$con=mysqli_connect($host,$user,$password,$db);

if ($con)
{
	echo "connected";
}
else
{
	echo "no connection" ;
}

mysqli_select_db($con,'uuser');

$username=$_POST['username'];

$password=$_POST['password'];

$query="insert into userinfo (username,password) values ('$username','$password')";

mysqli_query($con,$query);

echo "$query" ;



?>