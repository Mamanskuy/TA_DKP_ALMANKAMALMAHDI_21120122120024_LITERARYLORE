<!DOCTYPE html>
<html>
<head>
  <title>LiteraryLore | Product</title>
  <link rel="stylesheet" type="text/css" href="css/produk.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>LiteraryLore</h1>
    </header>
  
  <nav>
    <ul>
      <li><a href="beranda.php">Homepage</a></li>
      <li><a href="produk.php">Purchase</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
  
  <div class="container">
    <?php
    $books = array(
      array(
        "nama" => "SagaraS",
        "harga" => "55000",
        "gambar" => "img/novel1.jpeg"
      ),
      array(
        "nama" => "The Chronicles of Narnia #3: The Horse & His Boy",
        "harga" => "45000",
        "gambar" => "img/novel2.jpg"
      ),
      array(
        "nama" => "Black Showman dan Pembunuhan di Kota Tak Bernama",
        "harga" => "75000",
        "gambar" => "img/novel3.jpg"
      ),
      array(
        "nama" => "Layangan Putus",
        "harga" => "88000",
        "gambar" => "img/novel4.jpg"
      ),
      array(
        "nama" => "The Midnight Library",
        "harga" => "85000",
        "gambar" => "img/novel5.jpg"
      ),
      array(
        "nama" => "Bumi",
        "harga" => "65000",
        "gambar" => "img/novel6.jpg"
      ),
      array(
        "nama" => "Quiet",
        "harga" => "73000",
        "gambar" => "img/si1.jpg"
      ),
      array(
        "nama" => "How to Build Successful Habits",
        "harga" => "64000",
        "gambar" => "img/si2.jpg"
      ),
      array(
        "nama" => "Loneliness is My Bestfirends",
        "harga" => "98000",
        "gambar" => "img/si3.jpg"
      ),
      array(
        "nama" => "A Guide Book to Slow Down Your Life",
        "harga" => "89000",
        "gambar" => "img/si4.jpg"
      ),
      array(
        "nama" => "How to be Great",
        "harga" => "68000",
        "gambar" => "img/si5.jpg"
      ),
      array(
        "nama" => "Filosofi Teras",
        "harga" => "99000",
        "gambar" => "img/si6.jpg"
      ),
      
    );

    foreach ($books as $book) {
      echo '<div class="buku1">';
      echo '<img  width= "300px" src="' . $book["gambar"] . '" alt="' . $book["nama"] . '">';
      echo '<h3>' . $book["nama"] . '</h3>';
      echo '<p>Rp.' . $book["harga"] . '</p>';
      echo '<a href="beli.php?harga=' . urlencode($book["harga"]) . '" class="btn">Buy</a>';
      echo '</div>';
    }
    ?>
  </div>

  <footer>
    <p>LiteraryLore Bookstore</p>
  </footer>
</body>
</html>
