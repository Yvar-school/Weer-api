<?php include "./includes/production.php"; ?>

<head>
  <link rel="stylesheet" href="./css/style.css">
  <meta charset="UTF-8">

  <title>Weer-API Jarno Yvar</title>
  <link rel="shortcut icon" href="./favicon.ico" />

  <script src="https://kit.fontawesome.com/35a0bcef4b.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css">
  <script src="https://openlayers.org/en/v4.6.5/build/ol.js"></script>
  <script src="https://nlmaps.nl/dist/nlmaps.iife.js"></script>
  <script src="./js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
</head>

<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">Weer API Jarno Yvar</a>
    </header>
    <ul class="nav">
      <li>
        <a href="Temp.php">
          <i class="fas fa-umbrella"></i>
          Mijn Weer
        </a>
      </li>
      <li>
        <a href="Map.php">
          <i class="fas fa-map-marker-alt"></i>
          Kaart
        </a>
      </li>
      <li>
        <a href="graphs.php">
          <i class="fas fa-chart-line"></i>
          Grafieken
        </a>
      </li>
      <li>
        <a href="buien.php">
          <i class="fas fa-cloud-rain"></i>
          Buien Radar
        </a>
      </li>
  </div>
</div>