<?php

$file = "data.txt";

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$jenis = $_POST['jenis'];
$tgl = $_POST['tgl'];

$data = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|" .
        $jenis . "|F|".
        $tgl . "[R]";

$handle = fopen($file, "a+");
fwrite($handle, $data);
fclose($handle);

echo "Data sudah disimpan!";
header('location:baca.php');