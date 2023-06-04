<?php
session_start();

if (isset($_SESSION['harga']) && isset($_SESSION['totalHarga'])) {

    $harga = $_SESSION['harga'];
    $totalHarga = $_SESSION['totalHarga'];

    unset($_SESSION['harga']);
    unset($_SESSION['totalHarga']);
} else {

    header('Location: produk.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LiteraryLore | Purchase</title>
    <link rel="stylesheet" type="text/css" href="css/setelah-beli.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Purchase</h1>
    </header>

    <nav>
        <ul>
            <li><a href="beranda.php">Homepage</a></li>
            <li><a href="produk.php">Purchase</a></li>
            <li><a href="logout.php">Logout</a></li>

        </ul>
    </nav>

    <div class="container">
        <h3>Harga Buku: Rp <?php echo number_format($harga, 0, ',', '.'); ?> 
        <br><br> Total Pembayaran: Rp <?php echo number_format($totalHarga, 0, ',', '.'); ?> 
        <br><br>  konfirmasikan pembayaran ke 082xxxxxxxxx</h3>
    </div>
    <div class="container">
    <form method="POST" action="produk.php">
        <input type="submit" value="Kembali" class="btn">
    </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <p>LiteraryLore Bookstore</p>
    </footer>
</body>
</html>
