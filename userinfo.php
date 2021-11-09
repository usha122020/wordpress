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



?>
