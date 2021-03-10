<?php
    // echo("NURI SANGAT BAIK HARI DAN TIDAK SOMBONG")
    $angka = "nuri"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
        for($i = 0; $i < 5; $i++) {

            // if else
            if($i % 2 == 0) { ?>
                <p>HELLO</p>
            <?php } else { ?>
                <p>GAIS</p>
            <?php }

        } ?>
    <?php 
        $str1 = "nuri";
        $str2 = "waw";
        echo $str1 . " " . $str2;
    ?>
    <?php
    $arr = [
        [
            'nama' => 'NURE',
            'nim' => '192410101053',
            'usia' => '20'
        ],
        [
            'nama' => 'hiiiiii',
            'nim' => '19241010131',
            'usia' => '21'
        ],
        [
            'nama' => 'ududuud',
            'nim' => '192410101008',
            'usia' => '21'
        ]
    ];

    $arr2 = ['NURE', '192410101053', '20']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $mhs): ?>
                <tr>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['usia'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

</body>
</html>
