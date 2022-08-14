<?php
$koneksi = mysqli_connect("localhost","root","","batiku");

//cek koneksi
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

$host="localhost";
$user="root";
$password="";
$db="batiku";

$kon = mysqli_connect($host,$user,$password,$db);

if(!$kon){
	die("Koneksi gagal");
}
?>