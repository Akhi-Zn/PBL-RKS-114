<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crypto The Explorer</title>
  <link rel="icon" href="Style/Image/RKS.png">
  <link rel="stylesheet" href="Style/CSS/caesar.css">
</head>
<body>
  <header>
    <h1>Caesar Cipher ☘</h1>
    <p>Enkripsi dan Dekripsi pesan Anda.</p>
  </header>
  <main>
    <div class="container">
      <textarea id="inputText" placeholder="Masukkan Teks Anda"></textarea>
      <input type="number" id="shiftValue" placeholder="Nilai Shift" min="0">
      <button id="encryptBtn">Enkripsi</button>
      <button id="decryptBtn">Dekripsi</button>
      <textarea id="outputText" readonly placeholder="Hasil Akan Muncul di Sini"></textarea>
      <button id="copyBtn">Copy Hasil</button>
    </div>
  </main>
  <button id="backBtn" onclick="goHome()">Home</button>
  <script src="Style/JS/caesar.js"></script>
</body>
</html>