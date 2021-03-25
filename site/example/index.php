<?php include_once('../php/template.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Welcome to Boston Arts Academy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/assets/css/global.css" type="text/css" />
  <link rel="stylesheet" href="/example/styles.css" type="text/css" />
</head>

<body>
  <nav class="nav">
    <div class="nav-logo">
      <a href="/">
        Boston Arts<br /> Academy
      </a>
    </div>
    <div class="nav-items">
      <a class="nav-item" href="/about">About</a>
      <a class="nav-item" href="/academics">Academics</a>
      <a class="nav-item" href="/admission">Admission</a>
      <a class="nav-item" href="/dance">Dance</a>
    </div>
    <button class="nav-open-button" type="button">☰</button>
  </nav>
  <nav class="mobile-menu" data-state="closed">
    <div class="mobile-menu-bar">
      <button class="nav-close-button" type="button">𝖷</button>
    </div>
    <div class="mobile-menu-items">
      <a class="mobile-menu-item" href="/about">About</a>
      <a class="mobile-menu-item" href="/academics">Academics</a>
      <a class="mobile-menu-item" href="/admission">Admission</a>
      <a class="mobile-menu-item" href="/dance">Dance</a>
    </div>
  </nav>
  <?php template("hero.php", array('text' => 'Example Page')) ?>
  <section class="page-section">
    <div class="three-up-grid">
      <div class="three-up-grid-title-bar">
        <div class="three-up-grid-title">Upcoming Events</div>
        <a class="three-up-grid-cta" href="#">View all</a>
      </div>
      <div class="three-up-grid-items">
        <?php
          template("three-up-item.php", array(
            'month' => 'Feb',
            'day' => '10',
            'text' => 'Event name 1'
          ));
        ?>
        <?php
          template("three-up-item.php", array(
            'month' => 'Mar',
            'day' => '15',
            'text' => 'Event name 2'
          ));
        ?>
        <?php
          template("three-up-item.php", array(
            'month' => 'Mar',
            'day' => '22',
            'text' => 'Event name 3'
          ));
        ?>
      </div>
    </div>
  </section>
  <script src="/example/script.js"></script>
</body>

</html>