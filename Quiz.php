<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crypto The Explorer</title>
  <link rel="icon" href="Style/Image/RKS.png">
  <link rel="stylesheet" href="Style/CSS/quiz.css">
</head>
<body>
  <div class="container">
    <h1>Crypto Challenge</h1>
    <p>Pecahkan teka-teki kriptografi dan jadilah juara!</p>

    <!-- Game Area -->
    <div id="game">
      <h2 id="challenge-title">Level 1: Caesar Cipher</h2>
      <p id="challenge-text">Uifsf jt b tfdsfu dpef!</p>

      <input type="text" id="answer" placeholder="Masukkan jawaban Anda">
      <button id="submit-btn">Submit</button>
      <button id="hint-btn" onclick="showHint()">Hint</button> <!-- Tombol Hint -->

      <div id="feedback"></div>
    </div>

    <!-- Timer -->
    <div id="timer">⏳ Waktu: <span id="time-left">180</span> detik</div>

    <!-- Leaderboard -->
    <div id="leaderboard">
      <h3>Leaderboard</h3>
      <table id="leaderboard-table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Waktu (s)</th>
            <th>Skor</th>
          </tr>
        </thead>
        <tbody id="leaderboard-list">
          <!-- Data akan dimasukkan di sini -->
        </tbody>
      </table>
      <button id="reset-leaderboard-btn" onclick="resetLeaderboard()">Reset Leaderboard</button>
    </div>
  </div>

  <button id="backButton" onclick="goHome()">Home</button>

  <div id="notification" class="hidden"></div>

  <script src="Style/JS/challenges.js"></script>
  <script src="Style/JS/quiz.js"></script>
</body>
</html>

<script src="https://crypto-js.googlecode.com/svn/tags/3.1.9-1/build/rollups/aes.js"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

