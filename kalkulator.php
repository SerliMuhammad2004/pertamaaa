<?php
// Array kalimat random
$kalimatRandom = [
    "Hasilnya adalah... rahasia semesta 🌌",
    "Angka ini membawa keberuntungan hari ini! 🍀",
    "Percayalah pada kalkulator di hatimu ❤️",
    "Teks ini lebih penting daripada hasilnya 😎",
    "Error 404: Hasil tidak ditemukan 🤖",
    "Selamat! Anda memenangkan... sebuah senyuman 😊",
    "Hasil terbang bersama angin 🌬️",
    "Hmm... coba lagi nanti ya 🤔",
    "Kalkulator butuh kopi dulu ☕",
    "Jawaban ada di dalam dirimu 🌟"
];

$kalimatTampil = '';

if (isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operator'])) {
    $angka1 = floatval($_POST['angka1']);
    $angka2 = floatval($_POST['angka2']);
    $operator = $_POST['operator'];

    $kalimatTampil = $kalimatRandom[array_rand($kalimatRandom)];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Unik Random</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(270deg, #ff9a9e, #fad0c4, #fbc2eb, #a6c1ee, #84fab0, #8fd3f4);
            background-size: 1200% 1200%;
            animation: gradienBerjalan 15s ease infinite;
            padding: 30px;
            margin: 0;
        }
        @keyframes gradienBerjalan {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .container {
            max-width: 400px;
            margin: auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #4A00E0;
        }
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 1em;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #4A00E0;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1em;
            cursor: pointer;
        }
        button:hover {
            background: #8E2DE2;
        }
        .hasil {
            background: #f9f9f9;
            padding: 12px;
            border-radius: 6px;
            margin-top: 15px;
            font-size: 1.2em;
            text-align: center;
            box-shadow: inset 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🧮 Kalkulator 🧮</h2>
        <form method="POST">
            <label>Angka 1:</label>
            <input type="number" step="any" name="angka1" required>

            <label>Operator:</label>
            <select name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>

            <label>Angka 2:</label>
            <input type="number" step="any" name="angka2" required>

            <button type="submit">Hitung</button>
        </form>

        <?php if ($kalimatTampil !== ''): ?>
            <div class="hasil">
                <?= htmlspecialchars($kalimatTampil) ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
