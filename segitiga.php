<?php 

@$alas = $_GET['alas'];
@$tinggi = $_GET['tinggi'];
@$sisimiring = $_GET['sisimiring'];
@$luas = 1/2 * $alas * $tinggi;
@$keliling = $tinggi + $sisimiring = $alas;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sgitiga</title>
    </head>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>alas</td>
                    <td> : </td>
                    <td><input type="text" name="alas" value="<?php echo $alas; ?>"/> <br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td> : </td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/> <br/></td>
                </tr>
                <tr>
                    <td>sisimiring</td>
                    <td> : </td>
                    <td><input type="text" name="sisimiring" value="<?php echo $sisimiring; ?>"/> <br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Hasil"/><br/><br/>
<?php 
echo "Luas Segitiga : ".$luas." cm^2<br/>";
echo "Keliling Segitiga : ".$keliling." cm";
?>
        </form>
    </body>
</html>