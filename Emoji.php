<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto The Explorer</title>
    <link rel="icon" href="Style/Image/RKS.png">
    <link rel="stylesheet" href="Style/CSS/emoji.css">
</head>
<body>
    <div class="container">
        <h1>Emoji Crypto</h1>
        <div class="form">
            <label for="message">Masukkan Pesan:</label>
            <textarea id="message" rows="4" placeholder="Tulis pesan rahasiamu..."></textarea>
            
            <label for="emojiSet">Pilih Tema Emoji:</label>
            <select id="emojiSet">
                <option value="animals">Hewan</option>
                <option value="food">Makanan</option>
                <option value="expressions">Ekspresi</option>
            </select>

            <button id="encodeButton">Enkripsi Pesan</button>
            <button id="decodeButton">Dekripsi Pesan</button>
        </div>

        <div class="result">
            <h2>Hasil:</h2>
            <p id="encodedMessage"></p>
            <button id="copyButton" class="copy-button">Copy</button>
            <p id="decodedMessage"></p>
        </div>

        <div id="loading" class="loading"></div>
    </div>

    <button id="backButton" onclick="goHome()">Home</button>

    <script src="Style/JS/emoji.js"></script>

    
</body>
</html>