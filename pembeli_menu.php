<?php include("keselamatan.php"); ?>
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/button.css">
<body>
  <div class="nav-logo">
    <a href="pembeli_home.php"><img src="imej/logo.png" class="logo"></a>
    <div class="text-color-buttons">
      <p class="nav-p">Warna teks: </p>
      <button onclick="changeTextColor('red')" style="color: red;">Merah</button>
      <button onclick="changeTextColor('blue')" style="color: blue;">Biru</button>
      <button onclick="changeTextColor('green')" style="color: green;">Hijau</button>
      <button onclick="changeTextColor('black')" style="color: black;">Hitam</button>
    </div>
    <div class="font-size-buttons">
      <p class="nav-p">Saiz huruf: </p>
      <button onclick="changeFontSize('+')">A+</button>
      <button onclick="changeFontSize('')">A</button>
      <button onclick="changeFontSize('-')">A-</button>
    </div>
  </div>
  <div class="pembeli-navbar">
    <a href="pembeli_home.php" <?php if(basename($_SERVER['PHP_SELF']) == 'pembeli_home.php') echo 'class="active"'; ?>>Home</a>
    <a href="pembeli_produk.php" <?php if(basename($_SERVER['PHP_SELF']) == 'pembeli_produk.php') echo 'class="active"'; ?>>Produk</a>
    <a href="bandingan_senarai.php" <?php if(basename($_SERVER['PHP_SELF']) == 'bandingan_senarai.php') echo 'class="active"'; ?>>Banding</a>
    <a href="logout.php">Keluar</a>
  </div>

  <script>
    function changeFontSize(size) {
      var body = document.getElementsByTagName('body')[0];
      var currentFontSize = parseFloat(window.getComputedStyle(body, null).getPropertyValue('font-size'));

      if (size === '+') {
        body.style.fontSize = (currentFontSize + 2) + 'px';
      } else if (size === '-') {
        body.style.fontSize = (currentFontSize - 2) + 'px';
      } else {
        body.style.fontSize = '16px';
      }
    }

    function changeTextColor(color) {
      var body = document.getElementsByTagName('body')[0];
      body.style.color = color;
    }
  </script>
</body>
