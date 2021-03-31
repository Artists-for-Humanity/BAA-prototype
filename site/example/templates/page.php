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
      <?php
        forEach($navItems as $item) {
          template("templates/nav-item.php", array(
            "name" => $item['name'],
            "link" => $item['link']
          ));
        }
      ?>
    </div>
    <button class="nav-open-button" type="button">☰</button>
  </nav>
  <nav class="mobile-menu" data-state="closed">
    <div class="mobile-menu-bar">
      <button class="nav-close-button" type="button">𝖷</button>
    </div>
    <div class="mobile-menu-items">
      <?php
        forEach($navItems as $item) {
          template("templates/mobile-menu-item.php", array(
            "name" => $item['name'],
            "link" => $item['link']
          ));
        }
      ?>
    </div>
  </nav>
  <?php
    forEach($pageContent as $content) {
      template($content["template"], $content["data"]);
    }
  ?>
  <footer>This is the footer</footer>
  <script src="/example/script.js"></script>
</body>

</html>