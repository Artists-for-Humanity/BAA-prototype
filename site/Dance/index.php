<?php include_once('../php/template.php'); ?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Dance Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="/assets/css/global.css" type="text/css" />
  <link rel="stylesheet" href="/dance/styles.css" type="text/css" />
</head>

<body>


    <div class="visiter-support">
      <div class="nav-1">
        <div class="language-box">
          <div class="item-1-1">
            <h1>Language</h1>
          </div>
          <div class="item-1-EN">
            <h1>EN</h1>
          </div>
        </div>
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
      <div class="BAA-Title">
        <div class="BAA-title-edit">
          <h1>Boston Art</h1>
        </div>
        <div class="BAA-title-edit">
          <h1>Academy</h1>
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

    <?php template("hero.php", array('headertext' => 'Dance')) ?>

    <?php template("hero.php", array('headertext2' => 'Jodie McSally Dance Program, Class of 21')) ?>

    <div class="sub-nav">
      <div>
        <div>Curriculum</div>
      </div>
      <div>
        <div>Shows</div>
      </div>
      <div>
        <div>Faculty</div>
      </div>
      <div>
        <div>Alumni</div>
      </div>
    </div>


    <?php template("intro.php", array('introtext' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam augue dolor, luctus eu massa non, blandit
        tristique quam. Donec mollis auctor vulputate. Aenean eu nisi sit amet diam consequat pulvinar interdum eu dui.
        Duis
        dictum in ligula a aliquet. Vestibulum consequat nisl a elementum tincidunt. Nunc nec egestas erat. Fusce
        efficitur,
        nibh nec convallis eleifend, est lorem tristique quam, sit amet aliquet elit lorem eu quam. Etiam pharetra
        aliquam
        orci, vitae blandit nisi maximus in. Integer ante eros, elementum vitae hendrerit eget, pharetra eget quam.
        Donec')) ?>

<?php template("tbd.php", array('TBD' => 'TBD')) ?>

   

<?php template("related.php", array('title' => 'Related Pages')) ?>

<?php template("relateditems.php", array('relateddesc' => 'consectetur adipiscing elit. Aliquam augue dolor, luctus eu massa non, blandit tristique quam. Donec
              mollis
              auctor vulputate. Aenean eu nisi sit amet diam consequat pulvinar interdum eu dui.')) ?>



        



    <div class="student-illustration-image-wrapper">
      <img class="dancers" src="../assets/images/dancers.jpg">
      <div class="student-illustration">
        <div>Student Illustration or Animation</div>
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
        <div class="interaction-buttons-box">Appply</div>
        <div class="interaction-buttons-box">Give</div>
        <div class="shop-interaction-button">Shop</div>
      </div>
    </footer>




  </body>

</html>