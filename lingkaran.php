<?php

@$jari2 = $_GET['jari2'];
@$diameter = 2 * $jari2;
@$luas = 22/7 * $jari2 * $jari2;
@$keliling = 2 * 22/7 * $jari2;
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lingkaran</title>
    </head>
    <body>
        <form action="lingkaran.php" method="GET">
            <table>
                <tr>
                    <td>jari-jari</td>
                    <td> : </td>
                    <td><input type="text" name="jari2" value="<?php echo $jari2; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Hasil"/><br/><br/>
<?php 
echo "Diameter : ".$diameter." cm<br/>";
echo "Luas Lingkaran : ".$luas." cm^2<br/>";
echo "Keliling Lingkaran : ".$keliling." cm";
            ?>
        </form>
    </body>
</html>
