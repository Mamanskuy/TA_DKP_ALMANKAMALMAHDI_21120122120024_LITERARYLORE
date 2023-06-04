<?php
session_start();

if (isset($_GET['harga'])) {
    $harga = $_GET['harga'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $jumlahbuku = $_POST['jumlah'];
        $totalHarga = $harga * $jumlahbuku;

        $_SESSION['harga'] = $harga;
        $_SESSION['totalHarga'] = $totalHarga;

        header('Location: setelah-beli.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>LiteraryLore | Purchase</title>
    <link rel="stylesheet" type="text/css" href="css/beli.css">
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
        <form method="POST" action="">
            <label for="jumlah">Jumlah:</label>
            <input type="number" name="jumlah" id="nama" required><br><br>
            <input type="submit" value="Submit" class="btn">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </form>
    </div>

    <footer>
        <p>LiteraryLore Bookstore</p>
    </footer>
</body>
</html>
