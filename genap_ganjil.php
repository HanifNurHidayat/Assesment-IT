<form method="post" action="">
    Masukkan Bilangan :<input type="text" name="bilangan"></br>
    <input type="submit" name="submit" value="Cek">
</form>

<?php 
if(isset($_POST['submit'])) 
{
    $bilangan = $_POST['bilangan'];
    if ($bilangan % 2 == 0) {
        echo $bilangan . " adalah bilangan Genap";
    } else {
        echo $bilangan . " adalah bilangan Ganjil";
    }
}
?>