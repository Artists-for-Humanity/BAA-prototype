<?php include_once('../php/template.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Your Website Name</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/assets/css/global.css" type="text/css" />
  <link rel="stylesheet" href="/academics/styles.css" type="text/css" />
</head>

<body>
  <nav><a href="/">Home</a><a href="/about">About</a></nav>
  <div>
    <?php template("hero.php", array('text' => 'Academics')) ?>
    <div class="sub-nav">
      <div>Majors</div>
      <div>Inquiry & innovation</div>
      <div>Pro Arts Consortium</div>
      <div>Summer</div>
    </div>
  </div>
  <div class="section">
    <div class="lorem-ipsum">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur.
      </p>
    </div>
  </div>
  <div class="section">
    <div class="support-blocks">
      <div class="support-block">
        <div class="support-block-image">
          <img src="../assets/images/placeholder-image-square.png" alt="placeholder-image-rectangle">
        </div>
        <div class="support-block-text-wrap">
          <div class="support-block-title">Support for IEP</div>
          <div class="support-block-text">Lorem Ipsum</div>
          <div class="support-block-cta">Learn more</div>
        </div>
      </div>
      <div class="support-block">
        <div class="support-block-image">
          <img src="../assets/images/placeholder-image-square.png" alt="placeholder-image-rectangle">
        </div>
        <div class="support-block-text-wrap">
          <div class="support-block-title"> Dual Curriculum</div>
          <div class="support-block-text">Lorem Ipsum</div>
          <div class="support-block-cta">Learn More</div>
        </div>
      </div>
      <div class="support-block">
        <div class="support-block-image">
          <img src="../assets/images/placeholder-image-square.png" alt="placeholder-image-rectangle">
        </div>
        <div class="support-block-text-wrap">
          <div class="support-block-title">Resilience</div>
          <div class="support-block-text">Lorem Ipsum</div>
        </div>
      </div>
      <div class="support-block">
        <div class="support-block-image">
          <img src="../assets/images/placeholder-image-square.png" alt="placeholder-image-rectangle">
        </div>
        <div class="support-block-text-wrap">
          <div class="support-block-title">Growth Mindset</div>
          <div class="support-block-text">Lorem Ipsum</div>
          <div class="support-block-cta">Learn More</div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="header-block section">
      <h2>Majors</h2>
    </div>
    <div class="section">
      <div class="majors-block-grid">
        <?php
          template("majors-block.php", array(
            'name'=> 'Music',
            'image'=> '../assets/images/placeholder-image-rectangle.png'
          ));
        ?>
        <div class="majors-block">
          <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
          <div class="majors-block-text">Dance</div>
        </div>
        <div class="majors-block">
          <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
          <div class="majors-block-text">Fashion<br>Technology</div>
        </div>
        <div class="majors-block">
          <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
          <div class="majors-block-text">Art & Design</div>
        </div>
        <div class="majors-block">
          <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
          <div class="majors-block-text">Music</div>
        </div>
        <div class="majors-block">
          <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
          <div class="majors-block-text">Theater</div>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="header-block">
      <h2>Inquiry & innovation</h2>
    </div>
    <div class="subject-blocks">
      <?php
          template("subjects-block.php", array(
          ));
        ?>
      <div class="subject-block">
        <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
        <div class="subject-block-title">Humanities</div>
      </div>
      <div class="subject-block">
        <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
        <div class="subject-block-title">Mathmatecs</div>
      </div>
      <div class="subject-block">
        <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
        <div class="subject-block-title">Science</div>
      </div>
      <div class="subject-block">
        <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
        <div class="subject-block-title">STEM LAB</div>
      </div>
      <div class="subject-block">
        <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
        <div class="subject-block-title">Service Learning</div>
      </div>
      <div class="subject-block">
        <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
        <div class="subject-block-title">Foreign Languages</div>
      </div>
    </div>
  </div>
  <div class="header-block section">
    <h2>Pro Arts Consortium</h2>
  </div>
  <div class="header-block section">
    <h2>Summer</h2>
  </div>
  <div class="section">Student Illustration or animation</div>
  <footer class="section">TBD
    <p>Newsletter Signup?</p>
    <p>Social Media Icons</p>
    <div>Connect</div>
    <div>Apply</div>
    <div>Give</div>
    <div>Shop</div>
  </footer>
</body>

</html>