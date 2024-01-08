<?php

$abdikoneksi = new mysqli ("localhost","root","","penerimaankaryawan");

//Jika Koneksi Gagal , di browser akan muncul notif error
if ($abdikoneksi->connect_errno){
    die("ERROR : -> ". $abdikoneksi->connect_error);
    exit();

//Jika Koneksi Berhasil maka di browser tidak muncul apa"    
}else{
}

?>