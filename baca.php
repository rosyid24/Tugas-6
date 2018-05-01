<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

</body>
</html>
<?php

$file = "data.txt";
$data = file_get_contents($file);

$baris = explode("[R]", $data);

echo "<center><b>DATA MAHASISWA</b><br><hr><table border=1>";
echo "<tr>";
echo "  <td>No</td>";
echo "  <td>Nama</td><td>Email</td>";
echo "  <td>Phone</td><td>Jenis Kelamin</td>";
echo "  <td>Tanggal Lahir</td><td>Action</td>";
echo "</tr>";
for($i =0; $i<count($baris)-1; $i++) {
    //echo $b . "<br>";

    $col = explode("|F|", $baris[$i]);

    echo "<tr>";
    echo "  <td>" . ($i+1) . "</td>";
    echo "  <td>" . $col[0] . "</td>";
    echo "  <td>" . $col[1] . "</td>";
    echo "  <td>" . $col[2] . "</td>";
    echo "  <td>" . $col[3] . "</td>";
    echo "  <td>" . $col[4] . "</td>";
    echo '  <td> <a href="delete.php?row='.$i.'">DELETE</a> <a href="edit.php?row='.$i.'">EDIT</a> </td>'; 
    echo "</tr>";
}
echo "</table><hr>";
echo '<a href="form.html">TAMBAH DATA</a> </center>';
