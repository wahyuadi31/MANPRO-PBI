<?php
$Host = "localhost";
$User = "root";
$Pass = "";
$Db_name = "tutorial";
$conn = new mysqli( $Host, $User, $Pass, $Db_name );
if ($conn->connect_error){
echo 'Gagal koneksi ke database';
}?>
