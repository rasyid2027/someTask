<?php

$conn = mysqli_connect('localhost', 'root', 'password', 'phpdasar');

// $row1 = mysqli_query($conn, "SELECT tanggal,pin,nama,jam,mesin FROM tugas WHERE mode = 'MASUK'");
$row1 = [];
$row2 = [];

foreach( $query = mysqli_query( $conn, "SELECT mesin,jam FROM tugas WHERE mesin LIKE '%IN' ORDER BY mesin DESC") as $jadi) {
    array_push( $row1, $jadi );
}


foreach( $query = mysqli_query( $conn, "SELECT mesin,jam FROM tugas WHERE mesin LIKE '%OUT' ORDER BY mesin DESC") as $jadi) {
    array_push( $row2, $jadi );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>TANGGAL</th>
        <th>PIN</th>
        <th>NAMA</th>
        <th>JAM IN</th>
        <th>JAM OUT</th>
        <th>MESIN IN</th>
        <th>MESIN OUT</th>
    </tr>
    
    <?php $i = 1; $a = 0; foreach( $query1 = mysqli_query( $conn, "SELECT tanggal,pin,nama FROM tugas WHERE mesin LIKE '%IN' ") as $tabel1 ) { ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?php echo $tabel1["tanggal"] ?></td>
        <td><?php echo $tabel1["pin"]; ?></td>
        <td><?php echo $tabel1["nama"]; ?></td>
        <td><?php echo $row1[$a]["jam"]; ?></td>
        <td><?php echo $row2[$a]["jam"] ?></td>
        <td><?php echo $row1[$a]["mesin"]; ?></td>
        <td><?php echo $row2[$a++]["mesin"] ?></td>


    </tr>
    <?php } ?>
    

    </table>
</body>
</html>