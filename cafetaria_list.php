<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>List Cafetaria - Kantin SMK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    .card-custom-1 { background-color: #fef9c3; }
    .card-custom-2 { background-color: #cffafe; }
    .card-custom-3 { background-color: #e0f2fe; }
    .card-custom-4 { background-color: #fcd34d; }

    .card {
      transition: 0.3s ease;
      border: none;
    }

    .card:hover {
      transform: scale(1.03);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    }

    .card img {
      height: 200px;
      object-fit: cover;
    }

    .card-title {
      font-weight: bold;
      color: #333;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Konten -->
  <div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Pedagang Kantin</h2>
    <div class="row g-4">
      <!-- Pedagang 1 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card card-custom-1 text-center">
          <img src="assets/batagor.jpg" class="card-img-top" alt="Batagor Mas Riki" />
          <div class="card-body">
            <h5 class="card-title">Batagor Mas Riki</h5>
            <ul class="list-unstyled mb-0">
              <li>Batagor – Rp 10.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
              <li>Siomay – Rp 10.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
              <li>otak-otak – Rp 10.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
              <li>Bakso Goreng – Rp 10.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pedagang 2 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card card-custom-2 text-center">
          <img src="assets/nasgor.jpg" class="card-img-top" alt="Nasi Goreng Mba Rika" />
          <div class="card-body">
            <h5 class="card-title">Nasi Goreng Mba Rika</h5>
            <ul class="list-unstyled mb-0">
              <li>Nasi Goreng Ayam – Rp 15.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
              <li>Nasi Goreng Spesial – Rp 18.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
              <li>Nasi Goreng Seafood – Rp 20.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
              <li>Nasi Goreng Telur – Rp 12.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pedagang 3 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card card-custom-3 text-center">
          <img src="assets/mie ayam.jpg" class="card-img-top" alt="Mie Ayam Pak Joko" />
          <div class="card-body">
            <h5 class="card-title">Mie Ayam Pak Joko</h5>
            <ul class="list-unstyled mb-0">
              <li>Mie Ayam – Rp 12.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
              <li>Mie Ayam Bakso – Rp 15.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
              <li>Mie Ayam Jamur – Rp 13.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
              <li>Mie Kuah Special – Rp 17.000 <br><small class="text-muted">(Stok: 30 porsi)</small></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Pedagang 4 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card card-custom-4 text-center">
          <img src="assets/minuman.jpg" class="card-img-top" alt="Minuman Bu Lilis" />
          <div class="card-body">
            <h5 class="card-title">Minuman Bu Lilis</h5>
            <ul class="list-unstyled mb-0">
              <li>Es Teh Manis – Rp 5.000 <br><small class="text-muted">(Stok: 25 gelas)</small></li>
              <li>Air Mineral – Rp 3.000 <br><small class="text-muted">(Stok: 25 gelas)</small></li>
              <li>Pop Ice – Rp 6.000 <br><small class="text-muted">(Stok: 25 gelas)</small></li>
              <li>Jus Buah – Rp 8.000 <br><small class="text-muted">(Stok: 25 gelas)</small></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
