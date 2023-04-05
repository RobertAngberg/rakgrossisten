<?php
include "head1.php";
?>
<title>Skäggkam med mall för formning</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Skäggkam med mall för formning</h1>
<p id="product-page-price">79kr</p>

<?php
$slider = new Slider();
$slider->showSlider("skagg/skagg-skaggkam-mall-1.jpg")
?>

<p>Händigt verktyg för att både kamma skägg eller mustasch samtidigt som du i kombination med rakhyvel eller sax kan göra välformade kanter och linjer för skägget.</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>