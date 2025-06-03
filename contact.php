<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kantin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            color: #555;
        }
        input, textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .response {
            margin-top: 20px;
            padding: 15px;
            background-color: #e2f5e9;
            border: 1px solid #28a745;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Kontak Kami</h1>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        <?php
            $nama = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $pesan = htmlspecialchars($_POST["message"]);
        ?>
        <div class="response">
            <h3>Pesan Anda Telah Diterima!</h3>
            <p><strong>Nama:</strong> <?= $nama ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Pesan:</strong><br><?= nl2br($pesan) ?></p>
        </div>
    <?php else: ?>
        <form action="index.php" method="post">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>
