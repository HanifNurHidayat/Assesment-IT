<?php 
@$alas = $_REQUEST['alas'];
@$tinggi = $_REQUEST['tinggi'];
@$sisi = $_REQUEST['sisi'];
@$t_prisma = $_REQUEST['t_prisma'];
@$luas_alas_segitiga = 1/2 * $alas * $tinggi;
@$v_prisma_segitiga = $luas_alas_segitiga * $t_prisma;
@$luas_alas_persegi = $sisi * $sisi;
@$v_prisma_persegi = $luas_alas_persegi * $t_prisma;
?>


<!DOCTYPE html>
<html>
    <head>
        <title>prisma</title>
    </head>
    <body> 
        <form method="REQUEST">
            <table>
                <tr>
                    <td>alas</td>
                    <td> : </td>
                    <td><input type="text" name="alas" value="<?php echo $alas;?>"/> cm<br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td> : </td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi;?>"/> cm<br/></td>
                </tr>
                <tr>
                    <td>t_prisma</td>
                    <td> : </td>
                    <td><input type="text" name="t_prisma" value="<?php echo $t_prisma;?>"/> cm<br/></td>
                </tr>
                <tr>
                    <td>sisi</td>
                    <td> : </td>
                    <td><input type="text" name="sisi" value="<?php echo $sisi;?>"/> cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Hasil"/><br/><br/>
            <?php 
            echo "Luas alas Prisma Segitiga : ".$luas_alas_segitiga." cm^2<br/>";
            echo "Volume Prisma Segitiga : ".$v_prisma_segitiga." cm^3<br/>";
            echo "Luas alas Prisma Persegi : ".$luas_alas_persegi." cm^2<br/>";
            echo "Volume prisma persegi : ".$v_prisma_persegi." cm^3<br/>";
            ?>
        </form>
    </body>
</html>




