<?php

$timezone = date_default_timezone_set("Europe/Helsinki");
$servername='localhost';
$username='root';
$password='';
$dbname = 'yrkesprov';
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>