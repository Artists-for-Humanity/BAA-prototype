<?php include_once('./php/template.php'); ?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <title>Welcome to Boston Arts Academy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/assets/css/global.css" type="text/css" />
  <link rel="stylesheet" href="/styles.css" type="text/css" />
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
      <button class="nav-close-button" type="button">X</button>
    </div>
    <div class="mobile-menu-button">
      <a class="mobile-menu-button" href="/about">About</a>
      <a class="mobile-menu-button" href="/academics">Academics</a>
      <a class="mobile-menu-button" href="/admission">Admissions</a>
      <a class="mobile-menu-button" href="/dance">Dance</a>
    </div>
  </nav>
  <?php template("hero.php", array('text' => 'Artist Scholars designing their own future')) ?>
  <section class="page-section">
    <div class="three-up-grid">
      <div class="three-up-grid-title-bar">
        <div class="three-up-grid-title">Upcoming Events</div>
        <a class="three-up-grid-cta" href="#">View all</a>
      </div>
      <div class="three-up-grid-items">
        <a class="grid-item" href="#">
          <div class="grid-item-image">
            <img src="/assets/images/dancers.jpg" alt="Image" />
            <div class="grid-item-date"><span class="month">Mar</span> <span class="day">10</span></div>
          </div>
          <div class="grid-item-title">Lorem ipsom dolsot amior</div>
        </a>
        <a class="grid-item" href="#">
          <div class="grid-item-image">
            <img src="/assets/images/img_2200.jpg" alt="Image" />
            <div class="grid-item-date"><span class="month">Mar</span> <span class="day">10</span></div>
          </div>
          <div class="grid-item-title">Lorem ipsom dolsot amior</div>
        </a>
        <a class="grid-item" href="#">
          <div class="grid-item-image">
            <img src="/assets/images/russn_fckr-krv5as4jdja-unsplash.jpg" alt="Image" />
            <div class="grid-item-date"><span class="month">Mar</span> <span class="day">10</span></div>
          </div>
          <div class="grid-item-title">Lorem ipsom dolsot amior</div>
        </a>
      </div>
    </div>
  </section>
  <div class="title-spacing">
    <h2>News</h2>
    <div class="view-all">View All</div>
  </div>
  </div>
  <div class="header-box">
    <img class="header-box-image" src="assets/images/rhondak-native-florida-folk-artist-_yc7otffn-0-unsplash.jpg">
    <div class="header-box-title">
      <h1>174 Ipswich Street</h1>
      <div class="button">Tour the New BAA</div>
    </div>
  </div>
  <div class="donations">
    <div class="donation">
      <img class="donation-image" src="assets/images/dancers.jpg">
      <div class="descriptions">Professor Jonah Harding Wins Genius Grant</div>
    </div>
    <div class=donation>
      <img class="donation-image" src="assets/images/russn_fckr-krv5as4jdja-unsplash.jpg">
      <div class="descriptions">Alum Franny Hall on nine Years Leading a Non-Profit</div>
    </div>
  </div>
  <div class="student-spotlight-title">
    <div class="title-spacing">
      <h2>Student Spotlight</h2>
      <div class="view-all">View all</div>
    </div>
  </div>
  <div class="student-spotlight">
    <div>
      <img class="student-spotlight-image" src="assets/images/68-0314.jpg">
    </div>
    <div class="student-description-background">
      <div class="student-description">
        <div class="student-name">Sandy Perdue</div>
        <div class="student-spotlight-stats">
          <div>Class of '23 |</div>
          <div class="blue-text">Music Department</div>
        </div>
        <div class="line-spacing">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus
          scelerisque orci
          eu rutrum.
          Nulla blandit pharetra urna ac fringilla. Nam mollis nunc sed turpis suscipit rutrum. Integer dui nisi, auctor
          at
          imperdiet et, consectetur vitae lacus. Ut nec aliquam felis, in consectetur est. Proin maximus quis odio et
          porta.
          Donec a odio fringilla, volutpat lectus mattis, blandit erat. Aenean dignissim dapibus nibh, ac malesuada
          risus
          gravida eu. Ut felis leo, accumsan vitae nibh ac, varius dignissim enim. Suspendisse pharetra cursus tortor,
          vel
          dignissim purus tincidunt a.</div>
        <div class="blue-text student-spotlight-stats">Learn more</div>
      </div>
    </div>
  </div>
  <div class="impact">
    <div class=impact-section>
      <h2>Boston Arts Academy Impact</h2>
      <div class="gray-line"></div>
      <div class="line-spacing">Nam urna mauris, viverra et sem ac, accumsan interdum tellus. Aenean
        facilisis erat eu
        quam scelerisque tempus. Duis cursus fermentum elit vel pulvinar. Sed in lectus tristique, aliquam arcu at,
        iaculis orci. Sed eu orci
        sapien. Nulla eget volutpat mauris. Phasellus semper sollicitudin dolor. Morbi ut interdum augue. Nam dignissim
        tempor mattis. Proin sit amet mollis erat, nec viverra nulla. Mauris vehicula lectus non suscipit condimentum.
        Nulla
        vestibulum consectetur pellentesque. Proin in pharetra eros. Aenean id suscipit dolor. Phasellus sed fermentum
        nulla, id fermentum nisi.</div>
      <div class="button stats">View More Stats</div>
    </div>
    <div class="impact-highlights">
      <div>
        <img class="impact-circle" src="assets/images/placeholder-image-rectangle.png">
        <div class="line-spacing">Vivamus et ante quis massa sagittis dapibus. Aenean vitae eleifend ipsum, vitae
          cursus
          ligula.</div>
      </div>
      <div>
        <img class="impact-circle" src="assets/images/placeholder-image-rectangle.png">
        <div class="line-spacing">Nam malesuada ut est sed gravida. Donec elementum, dui sed finibus malesuada,
          nisilorem efficitur turpis,sedcondimentum nibh arcu in est.</div>
      </div>
      <div>
        <img class="impact-circle" src="assets/images/placeholder-image-rectangle.png">
        <div class="line-spacing">Etiam semper magna id massa blandit porta. Nullam malesuada tortor quis velit
          aliquet,
          nec aliquam elit aliquet. Quisque consequat cursus nulla </div>
      </div>
      <div>
        <img class="impact-circle" src="assets/images/placeholder-image-rectangle.png">
        <div class="line-spacing">Vivamus et ante quis massa sagittis dapibus. Aenean vitae eleifend ipsum, vitae
          cursu ligula.</div>
      </div>
    </div>
  </div>
  <div class="month-in-review">
    <div class="title-spacing">
      <h2>Month in Review</h2>
      <div class="view-all">View all</div>
    </div>
    <div class="month-in-review-content">
      <div class="month-in-review-event">
        <img class="month-in-review-image" src="assets/images/img_2200.jpg">
        <div class="descriptions">Cy twombly Student Workshop</div>
      </div>
      <div class="month-in-review-event">
        <img class="month-in-review-image" src="assets/images/dancers.jpg">
        <div class="descriptions">Celine Dion Choral Music Intensive</div>
      </div>
    </div>
  </div>
  <div class="header-box">
    <img class="header-box-image" src="assets/images/2015-class-photo.jpg">
    <div class="header-box-title">
      <h1>Winterfest 2021</h1>
      <div class="button">watch the concert</div>
    </div>
  </div>
  <div class="more-from">
    <div class="more-from-title">more from</div>
    <div class="more-from-buttons">Community</div>
    <div class="more-from-buttons">Admission</div>
    <div class="more-from-buttons">Academics</div>
  </div>
  <div class="student-illustration-image-wrapper">
    <img class="student-illustration-image" src="assets/images/russn_fckr-krv5as4jdja-unsplash.jpg">
    <div class="student-illustration">
      <div class="descriptions">Student Illustration or Animation</div>
    </div>
  </div>
  <footer>
    <div class="footer-title">Footer TBD</div>
    <div class="interaction-buttons-1">
      <div>Newsletter Signup</div>
      <div>Social Media Icons</div>
    </div>
    <div class="interaction-buttons-2">
      <div class="interaction-buttons-box">Connect</div>
      <div class="interaction-buttons-box">Apply</div>
      <div class="interaction-buttons-box">Give</div>
      <div class="shop-interaction-button">Shop</div>
    </div>
  </footer>
  <script src="/script.js"></script>
</body>

</html>