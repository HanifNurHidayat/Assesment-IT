<?php 
@$jari2 = $_REQUEST['jari2'];
@$volume = 4/3 * 22/7 * $jari2 * $jari2 * $jari2;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bola</title>
    </head>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>Jari-jari</td>
                    <td> : </td>
                    <td><input type="text" name="jari2" value="<?php echo $jari2; ?>"/> cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Hasil"/><br/><br/>
            <?php 
            echo "Volume Bola : ".$volume." cm^3";
            ?>
        </form>
    </body>
</html>
