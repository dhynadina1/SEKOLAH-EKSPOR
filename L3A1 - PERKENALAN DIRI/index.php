<DOCTYPE html>
<html>
    <head>
        <title>SE - LATIHAN ARRAY</title>
    </head>
    <body>
        <h2>220472 - UMMI PRATIDINA</h2>
        <h3>PERKENALAN DIRI</h3>
 
    <?php 
    
    $data = [
        'nama' => 'Ummi Pratidina',
        'email' => 'ummipratidina12@gmail.com',
        'telepon' => '08164503480',
        'hobi' => ['membaca', 'mendengarkan musik'],
        'sosial' => ['instagram'=>'dhynadina1'],
    ];

    echo "Halo semua, perkenalkan nama saya ". $data['nama'], "."; 
    echo "<br>";
    echo "Saya memiliki hobi ".$data['hobi'][0], " dan ".$data['hobi'][1], ".";
    echo "<br>";
    echo "Hubungi saya melalui email ".$data['email'], " atau nomor telp. ".$data['telepon'], ".";
    echo "<br>";
    echo "Follow saya juga di instagram ".$data['sosial']['instagram'],".";
    echo "<br>";
    echo "Sekian terima kasih:).";
    ?>
