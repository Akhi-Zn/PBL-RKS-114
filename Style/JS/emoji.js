const emojiThemes = {
    animals: {
        'a': '🐵', 'b': '🐶', 'c': '🐱', 'd': '🐰', 'e': '🐻',
        'f': '🐼', 'g': '🐸', 'h': '🦄', 'i': '🐯', 'j': '🦁',
        'k': '🐷', 'l': '🐨', 'm': '🦊', 'n': '🦉', 'o': '🦆',
        'p': '🐧', 'q': '🐦', 'r': '🐺', 's': '🐍', 't': '🐘',
        'u': '🐋', 'v': '🦋', 'w': '🐝', 'x': '🐞', 'y': '🐜',
        'z': '🐢', ' ': '🦍', '.': '🦩', ',': '🦚', '!': '🦌',
        '?': '🦀', '\n': '🐬'
    },
    food: {
        'a': '🍏', 'b': '🍌', 'c': '🎂', 'd': '🍩', 'e': '🥚',
        'f': '🍟', 'g': '🍇', 'h': '🍯', 'i': '🍦', 'j': '🥞',
        'k': '🍪', 'l': '🍋', 'm': '🍉', 'n': '🥜', 'o': '🍊',
        'p': '🍍', 'q': '🍑', 'r': '🍒', 's': '🥨', 't': '🍅',
        'u': '🌽', 'v': '🥑', 'w': '🧀', 'x': '🍫', 'y': '🍖',
        'z': '🥒', ' ': '🍿', '.': '🥪', ',': '🍔', '!': '🍕',
        '?': '🍱', '\n': '🍲'
    },
    expressions: {
        'a': '😀', 'b': '😁', 'c': '😂', 'd': '🤧', 'e': '😄',
        'f': '😅', 'g': '😆', 'h': '😉', 'i': '😊', 'j': '😋',
        'k': '😎', 'l': '😍', 'm': '😘', 'n': '🥰', 'o': '😜',
        'p': '😝', 'q': '😛', 'r': '🧐', 's': '😏', 't': '😑',
        'u': '😒', 'v': '😞', 'w': '😢', 'x': '😭', 'y': '😩',
        'z': '😤', ' ': '😶‍🌫', '.': '🤬', ',': '🤯', '!': '🥶',
        '?': '🥵', '\n': '🥸'
    },
};

// Pilih tema emoji default (misalnya hewan)
let currentTheme = emojiThemes.animals;

// Membuat reverse map untuk dekripsi
function createReverseMap(theme) {
    return Object.fromEntries(Object.entries(theme).map(([key, value]) => [value, key]));
}

let reverseEmojiMap = createReverseMap(currentTheme);

// Fungsi untuk mengubah tema emoji
function changeEmojiTheme(theme) {
    currentTheme = emojiThemes[theme];
    reverseEmojiMap = createReverseMap(currentTheme);
}

// Fungsi enkripsi
function encryptMessage(message) {
    let encryptedMessage = '';
    for (let char of message.toLowerCase()) {
        encryptedMessage += currentTheme[char] || char;  // Jika karakter tidak ada di peta, biarkan tetap
    }
    return encryptedMessage;
}

// Fungsi dekripsi
function decryptMessage(encryptedMessage) {
    let decryptedMessage = '';
    let temp = '';

    // Membaca dan mengganti emoji kembali menjadi karakter
    for (let i = 0; i < encryptedMessage.length; i++) {
        temp += encryptedMessage[i];

        // Jika karakter berturut-turut ada dalam reverseEmojiMap, ubah ke karakter asli
        if (reverseEmojiMap[temp]) {
            decryptedMessage += reverseEmojiMap[temp];
            temp = '';  // Reset untuk mencari emoji berikutnya
        }
    }

    return decryptedMessage;
}

// Event listener untuk memilih tema emoji
document.getElementById("emojiSet").addEventListener("change", function() {
    const selectedTheme = document.getElementById("emojiSet").value;
    changeEmojiTheme(selectedTheme);
});

// Event listeners untuk tombol enkripsi dan dekripsi
document.getElementById("encodeButton").addEventListener("click", function() {
    const message = document.getElementById("message").value;
    const encryptedMessage = encryptMessage(message);
    document.getElementById("encodedMessage").textContent = encryptedMessage;
    document.getElementById("decodedMessage").textContent = '';  // Kosongkan hasil dekripsi
});

document.getElementById("decodeButton").addEventListener("click", function() {
    const encryptedMessage = document.getElementById("encodedMessage").textContent;
    const decryptedMessage = decryptMessage(encryptedMessage);
    document.getElementById("decodedMessage").textContent = decryptedMessage;
});

// Fungsi untuk menyalin teks ke clipboard
document.getElementById("copyButton").addEventListener("click", function() {
    const encodedMessage = document.getElementById("encodedMessage").textContent;
    if (encodedMessage) {
        navigator.clipboard.writeText(encodedMessage).then(() => {
            const copyButton = document.getElementById("copyButton");
            copyButton.textContent = "Tersalin!";
            copyButton.classList.add("copied");

            setTimeout(() => {
                copyButton.textContent = "Copy";
                copyButton.classList.remove("copied");
            }, 2000);
        }).catch(err => {
            console.error("Gagal menyalin teks:", err);
        });
    }
});

function goHome() {
    window.location.href = '../PBL4_Semester-1/Home.php';
  }