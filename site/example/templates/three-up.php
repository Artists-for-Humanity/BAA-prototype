<section class="page-section">
  <div class="three-up-grid">
    <div class="three-up-grid-title-bar">
      <div class="three-up-grid-title"><?php print $title; ?></div>
      <a class="three-up-grid-cta" href="#">View all</a>
    </div>
    <div class="three-up-grid-items">
      <?php
        forEach($items as $item) {
          template("templates/three-up-item.php", $item);
        };
      ?>
    </div>
  </div>
</section>