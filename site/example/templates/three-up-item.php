<a class="grid-item" href="#">
  <div class="grid-item-image">
    <img src="/assets/images/placeholder-image-rectangle.png" alt="Image" />
    <?php if ($month || $day) { ?>
    <div class="grid-item-date">
      <?php if ($month) { ?>
      <span class="month"><?php print $month; ?></span>
      <?php } ?>
      <?php if ($day) { ?>
      <span class="day"><?php print $day; ?></span>
      <?php } ?>
    </div>
    <?php } ?>
  </div>
  <div class="grid-item-title"><?php print $text; ?></div>
</a>