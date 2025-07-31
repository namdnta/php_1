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
    <h2><?=$hasil; ?></h2> -->
   

    <?php
    for($i = 1; $i <=35; $i++){
        if ($i % 2 != 0) {
            echo $i . "<br>";
        }
    }
    ?>

</body>
</html>