<DOCTYPE html>
<html>
    <head>
        <title>SE - LATIHAN FORM</title>
    </head>
    <body>

        <?php

        $tujuan = $_GET["tujuan"];
        $jumlah_tiket = $_GET["jumlah_tiket"];
        
        if ($tujuan == "Jakarta"){
            $harga = 100000;
        }
        elseif ($tujuan == "Tasikmalaya"){
            $harga = 60000;
        }
        elseif ($tujuan == "Garut"){
            $harga = 70000;
        }
        elseif ($tujuan == "Tanggerang"){
            $harga = 110000;
        }
        
        $diskon = "10%";
        $hargasdiskon = ($harga * 10/100) * $jumlah_tiket;
        $hargatotal = $harga * $jumlah_tiket;
        $hargaSetelahDiskon = $hargatotal - $hargasdiskon;


        ?>

        <h2>220472 - UMMI PRATIDINA</h2>
        <h3>PERHITUNGAN TIKET BUS TERMINAL LEUWU</h3><br>

        <table>
            <tr>
                <td>
                    <label>Tujuan</label>
                </td>
                <td>
                    <p>: <input value="<?php echo $tujuan?>"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Harga</label>
                </td>
                <td>
                    <p>: <input value="<?php echo "Rp ".number_format($harga,0,',','.')?>"></p>
                </td>
            </tr>   
            <tr>
                <td>
                    <label>Jumlah Tiket</label>
                </td>
                <td>
                    <p>: <input value="<?php echo $jumlah_tiket?>"></p>
                </td>
            </tr>    
            <tr>
                <td>
                    <label>Diskon</label>
                </td>
                <td>
                    <p>: <input value="<?php echo $diskon?>"></p>
                </td>
            </tr> 
            <tr>
                <td>
                    <label>Harga Total</label>
                </td>
                <td>
                    <p>: <input value="<?php echo "Rp ".number_format($hargatotal,0,',','.')?>"></p>
                </td>
            </tr> 
            <tr>
                <td>
                    <label>Harga Setelah Diskon</label>
                </td>
                <td>
                    <p>: <input value="<?php echo "Rp ".number_format($hargaSetelahDiskon,0,',','.')?>"></p>
                </td>
            </tr> 
        </table><br>  
        <button ><a href="index.php">Kembali</a></button>
    </body>
</html>