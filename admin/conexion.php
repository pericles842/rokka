<?php
$mysqli=new mysqli("localhost","root","","roka");
if(mysqli_connect_errno()){
	echo "conexion fallida:",mysqli_connect_error();
	exit();
}
if (!mysqli_set_charset($mysqli, "utf8")) {
    exit();
} else {
}
?>
