<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Kantin SMK Telkom Jakarta</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= $current == 'index.php' ? 'active' : '' ?>" href="index.php">About Kantin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current == 'cafetaria_list.php' ? 'active' : '' ?>" href="cafetaria_list.php">List Cafetaria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current == 'pembelian.php' ? 'active' : '' ?>" href="pembelian.php">Pembelian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $current == 'contact.php' ? 'active' : '' ?>" href="contact.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
