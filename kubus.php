<?php 
@$sisi = $_GET['sisi'];
@$volume = $sisi * $sisi * $sisi;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kubus</title>
    </head>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>sisi</td>
                    <td> : </td>
                    <td><input type="text" name="sisi" value="<?php $sisi; ?>"/> cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Hasil"/><br/></br>
            <?php 
            echo "Hasil Kubus : ".$volume." cm^3";
            ?>
        </form>
    </body>
</html> 