<?php

$file = "data.txt";
$data = file_get_contents($file);

$nama = $_POST['nama'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$jenis = $_POST['jenis'];
$tgl = $_POST['tgl'];
$row = $_POST['row'];

$baris = explode("[R]", $data);
$databaru = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|" .
        $jenis . "|F|".
        $tgl . "[R]";
for($i = 0; $i<count($baris)-1; $i++) {
	
    if ($i == $row) {
		$datanw .= $databaru;	    
    }else{
    	$datanw .= $baris[$i] . "[R]";
    }


}

file_put_contents($file, $datanw);

header('location:baca.php');