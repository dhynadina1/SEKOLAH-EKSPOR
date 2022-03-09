<DOCTYPE html>
<html>
    <head>
        <title>SE - LATIHAN PERULANGAN</title>
    </head>
    <body>
        <h2>220472 - UMMI PRATIDINA</h2>
        <h3>PENILAIAN RAPOT</h3>

        <?php

            $nama = $_REQUEST["nama"];
            $t1 = $_REQUEST["t1"];
            $t2 = $_REQUEST["t2"];
            $uts = $_REQUEST["uts"];
            $uas = $_REQUEST["uas"];

            $hasil = (((($t1+$t2)/2)*0.3)+($uts*0.3)+($uas*0.4));
        
        ?>

    <?php

    if ($hasil >= 80 && $hasil <=100){
        $nilai = "A";
    }
    elseif ($hasil >= 60 && $hasil <80){
        $nilai = "B";
    }
    elseif ($hasil >= 0 && $hasil <60){
        $nilai = "C";
    }
    else{
        $nilai = "Error";
    }

    for($a=1; $a<=10; $a++){?>

        <table>
            <tr>
                <td>
                    <label>Nama Mahasiswa</label>
                </td>
                <td>
                    <p>: <?php echo $nama;?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nilai Tugas 1</label>
                </td>
                <td>
                    <p>: <?php echo $nilai;?> || <?php echo $t1;?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nilai Tugas 2</label>
                </td>
                <td>
                    <p>: <?php echo $nilai;?> || <?php echo $t2;?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nilai UTS</label>
                </td>
                <td>
                    <p>: <?php echo $nilai;?> || <?php echo $uts;?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nilai UAS</label>
                </td>
                <td>
                    <p>: <?php echo $nilai;?> || <?php echo $uas;?></p>
                </td>
            </tr>
            <tr>
                <th>
                    <label>TOTAL NILAI</label>
                </th>
                <td>
                    <p>: <?php echo $nilai;?> || <?php echo $hasil;?></p>
                </td>
            </tr>
        </table>
        <br>

    <?php
    
    }

    ?>
    </body>
</html>