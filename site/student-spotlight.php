<div class="student-spotlight-container">
  <div class="student-spotlight-title">
    <div class="title-spacing">
      <h2><?php print $title;?></h2>
      <div class="view-all">View all</div>
    </div>
  </div>
  <div class="student-spotlight">
    <div>
      <img class="student-spotlight-image" src="<?php print $image; ?>">
    </div>
    <div class="student-description-background">
      <div class="student-description">
        <div class="student-name"><?php print $name; ?></div>
        <div class="student-spotlight-stats">
          <div><?php print $stats;?> |</div>
          <div class="blue-text"><?php print $department; ?></div>
        </div>
        <div class="line-spacing"><?php print $description; ?></div>
        <div class="blue-text student-spotlight-stats">Learn more</div>
      </div>
    </div>
  </div>
</div>