<?php
include 'bakar2.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $proses = new Beli();
    $proses->setHarga(15420, 16130, 18310, 16510);
    if(isset($_POST['kirim'])){
    $proses->jumlah = $_POST['jumlah'];
    $proses->jenis = $_POST['jenis'];
    echo "<br>";
        $proses->cetakpembelian();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>BELI BAHAN BAKAR SHELL</h1>
<form method="post" action="">
<label for= "jumlah">JUMLAH LITER:</label>
<input type= "number" name="jumlah"required><br><br>


<label for= "jenis">PILIH TIPE BAHAN BAKAR:</label>
<select name= "jenis" required>
<option value = "SSuper">SSuper</option>
<option value = "SVPower">SVPower</option>
<option value = "SVPowerDiesel">SVPowerDiesel</option>
<option value = "SVPowerNitro">SVPowerNitro</option>
</select><br><br>


<input type= "submit" name="kirim">
</form>
</center>
</body>
</html>


