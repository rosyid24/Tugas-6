<?php 
$file = "data.txt";
$data = file_get_contents($file);

$row = $_GET['row'];


$baris = explode("[R]", $data);
$col = explode("|F|", $baris[$row]);

$nama = $col[0];
$email = $col[1];
$phone = $col[2];
$jenis = $col[3];
$tgl = $col[4];
 ?>

<!DOCTYPE html>
<head><link rel="stylesheet" type="text/css" href="style.css"></head>
<html>
    <body>
        <form action="update.php" method="POST">
        	<center>
        		<b>EDIT DATA MAHASISWA</b><br><hr>
            Nama : <input type="text" 
                    name="nama" value="<?php echo"$nama";?>" required><br>
            Email : <input type="email" 
                    name="email" value="<?php echo"$email";?>" required><br>
            Phone : <input type="tel" 
                    name="phone" value="<?php echo"$phone";?>" required><br>

                    <?php if ($jenis=="Laki-Laki") {
                   	echo '<label for="jenis" >Jenis Kelamin   : 
                    <input type="radio" name="jenis" value="Laki-Laki" checked>'."Laki-Laki".'  
                    <input type="radio" name="jenis" value="Perempuan" >'."Perempuan".'</label>
                    ';
                    } else if ($jenis=="Perempuan") {
                    echo 'Jenis Kelamin   : 
                    <input type="radio" name="jenis" value="Laki-Laki" >'."Laki-Laki".'  
                    <input type="radio" name="jenis" value="Perempuan" checked>'."Perempuan".'</label>
                    ';
                    }?><br>
            Tanggal lahir : <input type="date" name="tgl" value="<?php echo"$tgl";?>">

                     <br>
                    <input type="hidden" name="row" value="<?php echo"$row"?>">
                    <hr>
            <input type="submit" value="SIMPAN"></center>
        </form>
    </body>
</html>