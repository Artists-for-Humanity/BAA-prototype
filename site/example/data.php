<?php 
  $navItems = array(
    array('name' => 'About', 'link' => '/about'),
    array('name' => 'Academics', 'link' => '/academics'),
    array('name' => 'Admission', 'link' => '/admission'),
    array('name' => 'Dance', 'link' => '/dance'),
  );

  $pageContent = array(
    array(
      "template" => "templates/hero.php",
      "data" => array(
        'text' => 'Example Page'
      )
    ),
    array(
      "template" => "templates/three-up.php",
      "data" => array(
        "title" => "Upcoming Events",
        "items" => array(
          array(
            'month' => 'Feb',
            'day' => '10',
            'text' => 'Event name 1'
          ),
          array(
            'month' => 'Mar',
            'day' => '15',
            'text' => 'Event name 2'
          ),
          array(
            'month' => 'Mar',
            'day' => '22',
            'text' => 'Event name 3'
          )
        )
      )
    ),

    array(
      "template" => "templates/three-up.php",
      "data" => array(
        "title" => "Latest News",
        "items" => array(
          array(
            'text' => 'News name 1'
          ),
          array(
            'text' => 'News name 2'
          ),
          array(
            'text' => 'News name 3'
          )
        )
      )
    ),
    array(
      "template" => "templates/hero.php",
      "data" => array(
        'text' => 'Cool stuff'
      )
    ),
  );
?>