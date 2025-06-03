<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $total = 0;

    $makanan = ['batagor', 'siomay', 'otak_otak', 'basreng', 'nasgor_ayam', 'nasgor_spesial', 'nasgor_seafood',
     'nasgor_telur', 'mie_ayam', 'mie_ayam_bakso', 'mie_ayam_jamur', 'mie_ayam_spesial', 'es_teh_manis', 'air_mineral', 'pop_ice', 'jus_buah'];

    $nama_db = [
        'batagor' => 'batagor',
        'siomay' => 'siomay',
        'otak_otak' => 'otak_otak',
        'basreng' => 'basreng',
        'nasgor_ayam' => 'nasgor_ayam',
        'nasgor_spesial' => 'nasgor_spesial',
        'nasgor_seafood' => 'nasgor_seafood',
        'nasgor_telur' => 'nasgor_telur',
        'mie_ayam' => 'mie_ayam',
        'mie_ayam_bakso' => 'mie_ayam_bakso',
        'mie_ayam_jamur' => 'mie_ayam_jamur',
        'mie_ayam_spesial' => 'mie_ayam_spesial',
        'es_teh_manis' => 'es_teh_manis',
        'air_mineral' => 'air_mineral',
        'pop_ice' => 'pop_ice',
        'jus_buah' => 'jus_buah'
    ];

    foreach ($makanan as $item) {
        $jumlah = intval($_POST[$item] ?? 0);
        if ($jumlah > 0) {
            $nama = $nama_db[$item];
            $q = $koneksi->query("SELECT stok, harga FROM makanan WHERE nama='$nama'");
            $data = $q->fetch_assoc();
            if (!$data) {
                echo "<script>alert('Data makanan $nama tidak ditemukan.'); window.history.back();</script>";
                exit;
            }
            if ($jumlah > $data['stok']) {
                echo "<script>alert('Stok $nama tidak mencukupi!'); window.history.back();</script>";
                exit;
            }

            $subtotal = $jumlah * $data['harga'];
            $total += $subtotal;

            $koneksi->query("UPDATE makanan SET stok = stok - $jumlah WHERE nama='$nama'");
        }
    }

    $_SESSION['total'] = $total;
    header("Location: qr.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pembelian Makanan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      scroll-behavior: smooth;
      background-color: #f8f9fa;
    }

    .form-card {
      background-color: #fff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .form-label {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <?php include 'navbar.php'; ?>

  <div class="container mt-5">
    <div class="form-card mx-auto" style="max-width: 700px;">
      <h2 class="text-center mb-4">Form Pembelian Makanan</h2>
      <form method="POST" action="">
        <div class="mb-4">
          <label class="form-label">Batagor Mas Riki</label>
          <input type="number" name="batagor" class="form-control mb-2" placeholder="Jumlah Batagor" min="0">
          <input type="number" name="siomay" class="form-control" placeholder="Jumlah Siomay" min="0">
          <input type="number" name="otak_otak" class="form-control mb-2" placeholder="Jumlah otak_otak" min="0">
          <input type="number" name="basreng" class="form-control" placeholder="Jumlah Bakso Goreng" min="0">
        </div>
        <div class="mb-4">
          <label class="form-label">Nasi Goreng Mba Rika</label>
          <input type="number" name="nasgor_ayam" class="form-control mb-2" placeholder="Jumlah Nasi Goreng Ayam" min="0">
          <input type="number" name="nasgor_spesial" class="form-control" placeholder="Jumlah Nasi Goreng Spesial" min="0">
          <input type="number" name="nasgor_seafood" class="form-control mb-2" placeholder="Jumlah Nasi Goreng Seafood" min="0">
          <input type="number" name="nasgor_telur" class="form-control" placeholder="Jumlah Nasi Goreng Telur" min="0">
        </div>
        <div class="mb-4">
          <label class="form-label">Mie Ayam Mbak Sari</label>
          <input type="number" name="mie_ayam" class="form-control mb-2" placeholder="Jumlah Mie Ayam" min="0">
          <input type="number" name="mie_ayam_bakso" class="form-control" placeholder="Jumlah Mie Ayam Bakso" min="0">
          <input type="number" name="mie_ayam_jamur" class="form-control mb-2" placeholder="Jumlah Mie Ayam Jamur" min="0">
          <input type="number" name="mie_ayam_spesial" class="form-control" placeholder="Jumlah Mie Ayam Spesial" min="0">
        </div>
        <div class="mb-4">
          <label class="form-label">Minuman Pak Budi</label>
          <input type="number" name="es_teh_manis" class="form-control mb-2" placeholder="Jumlah Es Teh Manis" min="0">
          <input type="number" name="air_mineral" class="form-control" placeholder="Jumlah Air Mineral" min="0">
          <input type="number" name="pop_ice" class="form-control mb-2" placeholder="Jumlah Pop Ice" min="0">
          <input type="number" name="jus_buah" class="form-control" placeholder="Jumlah Jus Buah" min="0">
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-success">Lanjutkan ke QR</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
