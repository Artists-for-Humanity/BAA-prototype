<?php include_once('../php/template.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>about</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/assets/css/global.css" type="text/css" />
  <link rel="stylesheet" href="/about/styles.css" type="text/css" />
</head>

<body>
  <nav><a href="/">Home</a><a href="/about">About</a></nav>
  <h1>Main</h1>
  <div class="wrapper">
    <div class="visiter-support">
      <div class="nav-1">
        <!-- LANGUAGE PHP -->
        <?php include "language.php" ?>
        <!-- LANGUAGE PHP -->
        <div class=" connect-border">
          <div class="nav-1-items">
            <h2>Connect</h2>
          </div>
        </div>
        <div class="give-border">
          <div class="nav-1-items">
            <h2>Give</h2>
          </div>
        </div>
        <div class="apply-border">
          <div class="nav-1-items-4">
            <h2>Apply</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="navigations">
      <nav class="drop-down-top-page">
        <a ref="/">
          <div class="BAA-Title">
            <div class="BAA-title-edit">
              <h1>Boston Art</h1>
            </div>
            <div class="BAA-title-edit">
              <h1>Academy</h1>
            </div>
          </div>
        </a>
        <div class="mobile-menu-nav">
          <div class="top-page-nav">
            <a class="dropdown-item" href="/about">About</a>
            <a class="dropdown-item" href="/acedemics">Acedemics</a>
            <a class="dropdown-item" href="/admissions">Admissions</a>
            <a class="dropdown-item" href="/community">Community</a>
            <a class="dropdown-item" href="/events&exhibitions">Events & Exhibitions</a>
            <a class="dropdown-item" href="/foundation">Foundation</a>
          </div>
          <button class="dropdown-open-button" type="button">☰</button>
      </nav>
      <nav class="mobile-menu" data-state="closed">
        <div class="mobile-menu-dropdown">
          <button class="dropdown-close-button" type="button">𝖷</button>
        </div>
        <div class="mobile-menu-items">
          <a class="mobile-menu-item" href="/about">About</a>
          <a class="mobile-menu-item" href="/academics">Acedemics</a>
          <a class="mobile-menu-item" href="/admission">Admission</a>
          <a class="mobile-menu-item" href="/community">Community</a>
          <a class="mobile-menu-item" href="/events&exhibitions">Events & Exhibitions</a>
          <a class="mobile-menu-item" href="/foundation">Foundation</a>
      </nav>
    </div>
  </div>
  <div class="nav-2">
    <div class="nav-2-items">
      <h2>About</h2>
    </div>
    <div class="nav-2-items">
      <h2>Academics</h2>
    </div>
    <div class="nav-2-items">
      <h2>Admissions</h2>
    </div>
    <div class="nav-2-items">
      <h2>Community</h2>
    </div>
    <div class="nav-2-items">
      <h2>Events & Exhibitions</h2>
    </div>
    <div class="nav-2-items">
      <h2>Founation</h2>
    </div>
  </div>
  </div>
  <?php template("hero.php", array('text' => "About")) ?>
  <div class="school-info-nav">
    <div class="nav-3">
      <div class="school-info-items">
        <h3>Mission</h3>
      </div>
      <div class="school-info-items">
        <h3>Our Story</h3>
      </div>
      <div class="school-info-items">
        <h3>New Campus</h3>
      </div>
      <div class="school-info-items">
        <h3>Our Graduates</h3>
      </div>
    </div>
  </div>
  <div class="our-mission">
    <div class="mission">
      <h4>Our Mission</h4>
    </div>
    <div class="mission-info-edit">
      <div class="mission-info-1">
        <p><?php include "large-text.php" ?></p>
      </div>
      <div class="mission-info-2">
        <p><?php include "large-text.php" ?></p>
      </div>
    </div>
  </div>
  <div class="our-story">
    <div class="our-story-title">
      <h5> Our Story</h5>
    </div>
    <div class="history">
      <div class="history-column-1">
        <div class="date-1">
          <div class="date-edits">
            <h6>1998</h6>
          </div>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nibh nunc, viverra eu euismod
            ultricies,
            vehicula a lectus.</p>
        </div>
        <div class="date-2">
          <div class="date-edits">
            <h6>2009</h6>
          </div>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nibh nunc, viverra eu euismod
            ultricies,
            vehicula a lectus.</p>
        </div>
      </div>
      <div class="history-column-2">
        <div class="date-3">
          <div class="date-edits">
            <h6>2013</h6>
          </div>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nibh nunc, viverra eu euismod
            ultricies,
            vehicula a lectus.</p>
        </div>
        <div class="date-4">
          <div class="date-edits">
            <h6>2021</h6>
          </div>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nibh nunc, viverra eu euismod
            ultricies,
            vehicula a lectus.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="information">
    <div class="info-box-wrapper">
      <div class="info-box-row">
        <div class="info-sub-row">
          <div class="story-box">
            <div class="info-box-h1">
              <h1>6</h1>
            </div>
            <div class="story-text">
              <h2> Pro-arts</h2>
              <h3> Consortium Colleges</h3>
              <p>where our students take college-level courses</p>
            </div>
          </div>
          <div class="story-box">
            <div class="info-box-h1">
              <h1>8</h1>
            </div>
            <div class="story-text">
              <h2>Hour School Days</h2>
              <p>Our school day is longer than at other schools to accomodate our dual curriculum</p>
            </div>
          </div>
          <div class="story-box">
            <div class="info-box-h1">
              <h1>96</h1>
            </div>
            <div class="story-text">
              <h2>Percent of BAA</h2>
              <h3>students accepted to</h3>
              <p>4 year colleges</p>
            </div>
          </div>
          <div class="story-box">
            <div class="info-box-h1">
              <h1>#</h1>
            </div>
            <div class="story-text">
              <h2>Blah blah</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nibh nunc, viverra eu euismod
                ultricies,
                vehicula a lectus</p>
            </div>
          </div>
          <div class="story-box">
            <div class="info-box-h1">
              <h1>60</h1>
            </div>
            <div class="story-text">
              <h2>Perfomances &</h2>
              <p>exhibitions in 2021</p>
            </div>
          </div>
          <div class="story-box">
            <div class="info-box-h1">
              <h1>#</h1>
            </div>
            <div class="story-text">
              <h2>Blah blah</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nibh nunc, viverra eu euismod
                ultricies,
                vehicula a lectus</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="new-campus">
    <div class="campus-title">
      <h3>Our New Campus</h3>
    </div>
    <div class="campus-subtitle">
      <h4>A Community Campus</h4>
    </div>
    <div class="campus-info-edits">
      <div class="campus-info-text">
        <p> <?php include "large-text.php" ?> </p>
        <p> <?php include "large-text.php" ?> </p>
        <p> <?php include "large-text.php" ?> </p>
        <p> <?php include "large-text.php" ?> </p>
      </div>
    </div>
    <div class="campus-more-info">
      <h2>Learn more</h2>
    </div>
    <div class="campus-images">
      <div class="campus-image-alignment">
        <div class="campus-image-edit">
          <img src=" ../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
          <p> Space Rental Options</p>
        </div>
        <div class="campus-image-edit">
          <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
          <p>labs, Art Studios & Rehearsal Spaces</p>
        </div>
        <div class="campus-image-edit">
          <img src="../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
          <p>Gallery & Performance Spaces</p>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="our-approach">
    <div class="approach-title">
      <h5>Our Approach</h5>
    </div>
    <div class="approach-info-row">
      <div class="approach-1-info">
        <p><?php include "large-text.php" ?></p>
      </div>
      <div class="approach-2-info">
        <p><?php include "large-text.php" ?></p>
      </div>
    </div>
    <div class="approach-card-row">
      <div class="approach-card-1">
        <div class="approach-image">
          <img src=" ../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
        </div>
        <div class="approach-subtitle">
          <h6>Thoughts on Inclusion</h6>
        </div>
        <div class="approach-topic">
          <p><?php include "small-text.php" ?></p>
        </div>
        <div class="learn-more-A">
          <h1>learn more</h1>
        </div>
      </div>
      <div class="approach-card">
        <div class="approach-image">
          <img src=" ../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
        </div>
        <div class="approach-subtitle">
          <h6>The Future of BAA</h6>
        </div>
        <div class="approach-topic">
          <p><?php include "small-text.php" ?></p>
        </div>
        <div class="learn-more-A">
          <h1>learn more</h1>
        </div>
      </div>
      <div class="approach-card">
        <div class="approach-image">
          <img src=" ../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
        </div>
        <div class="approach-subtitle">
          <h6>Our Students Lead the Way</h6>
        </div>
        <div class="approach-topic">
          <p><?php include "small-text.php" ?></p>
        </div>
        <div class="learn-more-A">
          <h1>learn more</h1>
        </div>
      </div>
      <div class="approach-card-4">
        <div class="approach-image">
          <img src=" ../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
        </div>
        <div class="approach-subtitle">
          <h6>Educational Philosophy</h6>
        </div>
        <div class="approach-topic">
          <p><?php include "small-text.php" ?></p>
        </div>
        <div class="learn-more-A">
          <h1>learn more</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="student-work-row">

    <div class="student-work">
      <h1> Student illustration or animation</h1>
    </div>
    <div class="student-work-image">
      <img src=" ../assets/images/placeholder-image-rectangle.png" alt="placeholder-image-rectangle">
    </div>
  </div>
  <div class="footer">
    <div class="footer-content">
      <div class="footer-title">
        <h2>Footer TBD</h2>
      </div>
      <!-- MOBILE FOOTER -->
      <?php include "mobile-footer.php" ?>
      <!-- MOBILE FOOTER -->
      <div class="footer-more">
        <h1>Learn More</h1>
      </div>
      <div class="footer-items-row">
        <div class="footer-items-1">
          <h3>Newsletter Signup?</h3>
        </div>
        <div class="footer-items-2">
          <h4>Social Media Icons</h4>
        </div>
      </div>
      <div class="visiter-option-row">
        <div class="visiter-border">
          <div class="visiter-options-card">
            <h5>Connect</h5>
          </div>
        </div>
        <div class="visiter-border">
          <div class="visiter-options-card">
            <h5>Apply</h5>
          </div>
        </div>
        <div class="visiter-border">
          <div class="visiter-options-card">
            <h5>Give</h5>
          </div>
        </div>
        <div class="visiter-border-1">
          <div class="visiter-options-card">
            <h5>Shop</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>