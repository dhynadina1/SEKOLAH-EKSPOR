<DOCTYPE html>
<html>
    <head>
        <title>SE - LATIHAN FORM</title>
    </head>
    <body>
        <h2>220472 - UMMI PRATIDINA</h2>
        <h3>PERHITUNGAN TIKET BUS TERMINAL LEUWU</h3><br>
        <form action="proses.php" method="GET">
            <table>
                <tr>
                    <td>
                        <label>Tujuan</label>
                    </td>
                    <td>
                        <select id="tujuan" name="tujuan">
                            <option value="">Pilih</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Tasikmalaya">Tasikmalaya</option>
                            <option value="Garut">Garut</option>
                            <option value="Tangerang">Tangerang</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jumlah Tiket</label>
                    </td>
                    <td>
                        <input type="number" name="jumlah_tiket">
                    </td>
                </tr>    
            </table><br>
            <button>Kirim</button>
        </form>  
    </body>
</html>
