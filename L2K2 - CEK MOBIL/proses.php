<DOCTYPE html>
<html>
    <head>
        <title>SE - LATIHAN KONDISIONl 2</title>
    </head>
    <body>
        <h2>220472 - UMMI PRATIDINA</h2>
        <h3>PENGECEKKAN KONDISI MOBIL</h3>

        <?php

            $mesin = $_REQUEST["mesin"];
            $body = $_REQUEST["body"];

            if ($mesin == "Bagus" && $body == "Bagus"){
                $hasil="Bagus";
            }
            elseif ($mesin == "Bagus" || $body == "Bagus"){
                $hasil="Menengah";
            }
            elseif ($mesin == "Jelek" && $body == "Jelek"){
                $hasil="Jelek";
            }
            else{
                echo "Terjadi kesalahan.";
            }
        
        ?>

        <table>
                <tr>
                    <td>
                        <label>Kondisi Mesin</label>
                    </td>
                    <td>
                        <p>: <?php echo $mesin;?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Kondisi Body</label>
                    </td>
                    <td>
                        <p>: <?php echo $body;?></p>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label>Kondisi Mobil</label>
                    </th>
                    <td>
                        <p>: <?php echo $hasil;?></p>
                    </td>
                </tr>
            </table>
            <br>
    </body>
</html>
