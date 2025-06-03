<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Kantin - Kantin SMK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Konten Utama -->
  <div class="container mt-5">
    <div class="row align-items-center">
      <!-- Foto Kantin -->
      <div class="col-md-6 mb-4">
        <img src="gambar1.jpg" alt="Foto Kantin" class="img-fluid rounded shadow" />
      </div>

      <!-- Tulisan tentang kantin -->
      <div class="col-md-6 mb-4">
        <h2>Tentang Kantin SMK</h2>
        <p class="lead">
          Kantin SMK Telkom Jakarta menyediakan berbagai pilihan makanan dan minuman dari pedagang lokal yang bersih, sehat, dan ramah di kantong. Kami mengutamakan kebersihan, kenyamanan, dan pelayanan terbaik bagi siswa dan guru.
        </p>
      </div>
    </div>

    <!-- Video di bawah -->
    <div class="row">
      <div class="col-md-6">
        <div class="ratio ratio-16x9 rounded shadow">
          <iframe src="https://www.youtube.com/embed/3AWQnv6g9sk?si=CsYVKtnC9XH5-Xkl" title="Video Kantin" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
