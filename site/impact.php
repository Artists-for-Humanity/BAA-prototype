<div class="impact">
    <div class=impact-section>
        <h2><?php print $title ?></h2>
        <div class="gray-line"></div>
        <div class="line-spacing"><?php print $description;?></div>
        <div class="button stats"><?php print$button;?></div>
    </div>
    <div class="impact-highlights">
        <?php
template("impact-highlights.php", array(
    'description' => 'ivamus et ante quis massa sagittis dapibus. Aenean vitae eleifend ipsum, vitae
            cursus
            ligula.',
));
?>
        <?php
template("impact-highlights.php", array(
    'description' => 'Nam malesuada ut est sed gravida. Donec elementum, dui sed finibus malesuada,
            nisilorem efficitur turpis,sedcondimentum nibh arcu in est.',
));
?>
        <?php
template("impact-highlights.php", array(
    'description' => 'Etiam semper magna id massa blandit porta. Nullam malesuada tortor quis velit
            aliquet,
            nec aliquam elit aliquet. Quisque consequat cursus nulla',
));
?>
        <?php
template("impact-highlights.php", array(
    'description' => 'Vivamus et ante quis massa sagittis dapibus. Aenean vitae eleifend ipsum, vitae
            cursu ligula.',
));
?>
    </div>
</div>