<?php
include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['nim']; ?></td>
        <td><?php echo $row['jurusan']; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>