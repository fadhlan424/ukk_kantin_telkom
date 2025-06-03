<?php
session_start();
// Bisa ambil dari session atau URL
$total = $_SESSION['total'] ?? $_GET['total'] ?? 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>QR Pembayaran</title>
  <script src="https://cdn.jsdelivr.net/npm/qrious/dist/qrious.min.js"></script>
  <style>
    body {
      text-align: center;
      font-family: sans-serif;
      padding: 40px;
    }
  </style>
</head>
<body>
  <h2>Total Bayar: Rp <?= number_format($total, 0, ',', '.') ?></h2>
  <canvas id="qr"></canvas>

  <script>
    const total = "Rp <?= number_format($total, 0, ',', '.') ?>";
    const qr = new QRious({
      element: document.getElementById('qr'),
      size: 250,
      value: "Total Pembayaran: " + total
    });
  </script>
</body>
</html>
