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
  <?php template("header.php", array(
    'text' => 'Artist Scholars designing their own future',
    'image' => 'assets/images/68-0314.jpg',
    'button' =>'Learn more'
    )) ?>
  <section class="upcoming-events">
    <div class="upcoming-events-content">
      <div class="upcoming-events-title-bar">
        <div class="upcoming-events-title">Upcoming Events</div>
        <a class="upcoming-events-cta" href="#">View all</a>
      </div>
      <div class="upcoming-events-items">
      <?php
          template("upcoming-events.php", array(
            'month' => 'Feb',
            'day' => '10',
            'text' => 'event name 1'
          ));
        ?>
        <?php
          template("upcoming-events.php", array(
            'month' => 'Mar',
            'day' => '15',
            'text' => 'event name 2'
          ));
        ?>
        <?php
          template("upcoming-events.php", array(
            'month' => 'May',
            'day' => '22',
            'text' => 'event name 3'
          ));
        ?>
        
      </div>
    </div>
  </section>
  <div class="title-spacing">
    <h2>News</h2>
    <div class="view-all">View All</div>
  </div>
  </div>
  <?php template("header.php", array(
    'text' => '174 Ipswich Street',
    'image' => 'assets/images/rhondak-native-florida-folk-artist-_yc7otffn-0-unsplash.jpg',
    'button' => 'Tour the New BAA'
    )) ?>
<div class="donations">
  <?php template("donation.php", array(
    'image'=> 'assets/images/dancers.jpg',
    'description'=> 'description 1'
  ));
  ?>
  <?php template("donation.php", array(
    'image'=> 'assets/images/russn_fckr-krv5as4jdja-unsplash.jpg',
    'description'=> 'description 2'
  ));
  ?>
  </div>
  <div class="student-spotlight-title">
    <div class="title-spacing">
      <h2>Student Spotlight</h2>
      <div class="view-all">View all</div>
    </div>
  </div>
  <div class="student-spotlight">
<?php 
  template("student-spotlight.php", array(
    'name'=> 'Sandy Perdue',
   'image'=>'assets/images/68-0314.jpg',
   'class'=>'23',
   'department'=>'Music Department',
   'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus
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
   dignissim purus tincidunt a.'
  ));
  ?>
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
    <?php
          template("impact-highlights.php", array(
            'description' => 'ivamus et ante quis massa sagittis dapibus. Aenean vitae eleifend ipsum, vitae
            cursus
            ligula.'
          ));
        ?>
        <?php
          template("impact-highlights.php", array(
            'description' => 'Nam malesuada ut est sed gravida. Donec elementum, dui sed finibus malesuada,
            nisilorem efficitur turpis,sedcondimentum nibh arcu in est.'
          ));
        ?>    
         <?php
          template("impact-highlights.php", array(
            'description' => 'Etiam semper magna id massa blandit porta. Nullam malesuada tortor quis velit
            aliquet,
            nec aliquam elit aliquet. Quisque consequat cursus nulla'
          ));
        ?>  
         <?php
          template("impact-highlights.php", array(
            'description' => 'Vivamus et ante quis massa sagittis dapibus. Aenean vitae eleifend ipsum, vitae
            cursu ligula.'
          ));
        ?>  
    </div>
  </div>
  <div class="month-in-review">
    <div class="title-spacing">
      <h2>Month in Review</h2>
      <div class="view-all">View all</div>
    </div>
    <?php
          template("month-in-review.php", array(
            'description' => 'Cy wombly student workshop',
            'image'=> 'assets/images/russn_fckr-krv5as4jdja-unsplash.jpg'
          ));
        ?>
        <?php
          template("month-in-review.php", array(
            'description' => 'Celine Dion Choral Music Intensive',
            'image'=> 'assets/images/img_2200.jpg'
          ));
        ?>   pr
    </div>
  </div>
  <?php template("header.php", array(
    'text' => 'Winterfest 2021',
    'button'=> "watch the concert",
    'image' => 'assets/images/2015-class-photo.jpg'
  )); 
    ?>
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