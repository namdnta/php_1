<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php
    $nama1 = "Nandita";
    $nama2 = "Meddina";
    $hobi = "Main game dan nonton anime";
    $class = "XI PPLG 2";
    ?>

    <h1>Halo, <?=$nama1 . ' ' . $nama2 ; ?>!</h1>
    <h2>Hobi saya adalah <?=$hobi; ?> </h2>
    <h2>Saya berada di kelas <?=$class; ?></h2> -->

 <!-- <?php
    $X = 10;
    $Y = 20;

    // if($X === $Y) {
    //     echo "X sama dengan Y";
    // } else {
    //     echo "X tidak sama dengan Y";
    // }

    $hasil = ($X === $Y) ? "X sama dengan Y" : "X tidak sama dengan Y";
    ?>

    <h2>Apakah Y dan X sama?</h2>
    <h2><?=$hasil; ?></h2>
    -->

    <!-- <?php
    for($i = 1; $i <=35; $i++){
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
    }
    ?> -->

<!-- <?php

$nilai = 95;
echo "<h3>Nilai kamu adalah: <span style='color:blue;'>$nilai</span></h3>";

echo "<h4>Predikat nilai:</h4>";

if ($nilai >= 90) {
    echo "<span style='color:green; font-weight:bold;'>Nilai Anda A</span>";
} elseif ($nilai >= 80) {
    echo "<span style='color:blue; font-weight:bold;'>Nilai Anda B</span>";
} elseif ($nilai >= 70) {
    echo "<span style='color:orange; font-weight:bold;'>Nilai Anda C</span>";
} elseif ($nilai >= 60) {
    echo "<span style='color:brown; font-weight:bold;'>Nilai Anda D</span>";
} else {
    echo "<span style='color:red; font-weight:bold;'>Nilai Anda E</span>";
}

?> -->
<!-- 
<?php
$datasiswa = [
    ["nama" => "Nandita", "umur" => 17, "asal" => "depok"],
    ["nama" => "Meddina", "umur" => 16, "asal" => "jakarta"],
    ["nama" => "Esta", "umur" => 16, "asal" => "semarang"],
    ["nama" => "Myra", "umur" => 16, "asal" => "karimun"],
];
$no = 1;
?>

<h2>Data siswa 11 pplg 2</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Asal</th>
    </tr>
    <?php foreach ($datasiswa as $siswa) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $siswa["nama"]; ?></td>
            <td><?= $siswa["umur"]; ?></td>
            <td><?= $siswa["asal"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table> -->


<?php
$datakomplek = [
    ["nama" => "Komplek A", "alamat" => "Jl. Raya No. 1", "jumlah_rumah" => 50, "fasilitas" => ["kolam renang", "lapangan basket", "taman"], "foto" => "https://d3p0bla3numw14.cloudfront.net/news-content/img/2021/07/02092220/komplek-perumahan-mewah.jpg"],
    ["nama" => "Komplek B", "alamat" => "Jl. Raya No. 2", "jumlah_rumah" => 30 , "fasilitas" => ["taman", "lapangan tenis"], "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9MRjRI49RqaRqp9RezjDv8MlEHezEU1rdWA&s"],
    ["nama" => "Komplek C", "alamat" => "Jl. Raya No. 3", "jumlah_rumah" => 20, "fasilitas" => ["kolam renang", "taman bermain"], "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAddNgVrkq5pwZMAvLX6equhCO4ugwZNaFGA&s"],
    ["nama" => "Komplek D", "alamat" => "Jl. Raya No. 4", "jumlah_rumah" => 40, "fasilitas" => ["lapangan basket", "taman"], "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS59cXe7hdrc8CeT4gAVK9IvzAEOSkcRDYUzg&s"],
    ["nama" => "Komplek E", "alamat" => "Jl. Raya No. 5", "jumlah_rumah" => 25, "fasilitas" => ["kolam renang"], "foto" => "https://jendela360.com/info/wp-content/uploads/2020/11/South-Grove.jpg"],
    ["nama" => "Komplek F", "alamat" => "Jl. Raya No. 6", "jumlah_rumah" => 15, "fasilitas" => ["lapangan tenis"], "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxuPUoheexS7d4wWiJk3Lr02XRV9ktR0OLBw&s"],
    ["nama" => "Komplek G", "alamat" => "Jl. Raya No. 7", "jumlah_rumah" => 35, "fasilitas" => ["taman bermain"], "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrf6XqCxTt0NFODVcYOEbgeF3-6ngsjjn49w&s"],
    ["nama" => "Komplek H", "alamat" => "Jl. Raya No. 8", "jumlah_rumah" => 45, "fasilitas" => ["kolam renang", "lapangan basket"], "foto" => "https://dev.microsites.99iddev.net/app/uploads/sites/226/2022/03/Penampakan-danau-di-Asya-Jakarta-perumahan-elit-di-Jakarta-Timur.jpg"],
    ["nama" => "Komplek I", "alamat" => "Jl. Raya No. 9", "jumlah_rumah" => 60, "fasilitas" => ["taman"], "foto" => "https://blkp.co.id/uploads/blkp/230503rXfEmBQ0JVvSk12pGLZIsqwNnOo5TyegFYCdDMxKHtabUcRlWP8iAz7u9j4h.jpg"],
    ["nama" => "Komplek J", "alamat" => "Jl. Raya No. 10", "jumlah_rumah" => 55, "fasilitas" => ["lapangan tenis"], "foto" => "https://www.lamudi.co.id/journal/wp-content/uploads/2024/06/darmawangsa-residence.jpg"]
];
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Komplek Perumahan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Komplek Perumahan</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Nomor</th>
        <th>Nama Komplek</th>
        <th>Alamat</th>
        <th>Jumlah Rumah</th>
        <th>Fasilitas</th>
        <th>Foto</th>
    </tr>
    <?php foreach ($datakomplek as $komplek) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $komplek["nama"]; ?></td>
            <td><?= $komplek["alamat"]; ?></td>
            <td><?= $komplek["jumlah_rumah"]; ?></td>
            <td><?= implode(", ", $komplek["fasilitas"]); ?></td>
            <td><img src="<?= $komplek["foto"]; ?>" alt="<?= $komplek["nama"]; ?>"></td>
        </tr>
    <?php endforeach; ?>
</table>