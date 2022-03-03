<DOCTYPE html>
<html>
    <head>
        <title>SE - LATIHAN KONDISIONl 1</title>
    </head>
    <body>
        <h2>220472 - UMMI PRATIDINA</h2>
        <h3>PENILAIAN RAPOT</h3>

        <?php

            $t1 = $_REQUEST["t1"];
            $t2 = $_REQUEST["t2"];
            $uts = $_REQUEST["uts"];
            $uas = $_REQUEST["uas"];

            $hasil = (((($t1+$t2)/2)*0.3)+($uts*0.3)+($uas*0.4));
        
        ?>

        <table>
                <tr>
                    <td>
                        <label>Nilai Tugas 1</label>
                    </td>
                    <td>
                        <p>: <?php echo $t1;?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nilai Tugas 2</label>
                    </td>
                    <td>
                        <p>: <?php echo $t2;?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nilai UTS</label>
                    </td>
                    <td>
                        <p>: <?php echo $uts;?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nilai UAS</label>
                    </td>
                    <td>
                        <p>: <?php echo $uas;?></p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label>TOTAL NILAI</label>
                    </th>
                    <td>
                        <p>: <?php echo $hasil;?></p>
                    </td>
                </tr>
            </table>
            <br>
            <?php

            if ($hasil >= 80 && $hasil <=100){
                echo "Anda mendapatkan A";
            }
            elseif ($hasil >= 60 && $hasil <80){
                echo "Anda mendapatkan B";
            }
            elseif ($hasil >= 0 && $hasil <60){
                echo "Anda mendapatkan C";
            }
            else{
                echo "Terjadi kesalahan.";
            }

            ?>

    </body>
</html>