<?php
include "head1.php";
?>
<title>Skäggkam i trä</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Skäggkam i trä</h1>
<p id="product-page-price">49kr</p>

<?php
$slider = new Slider();
$slider->showSlider("skagg/skagg-skaggkam-tra-1.jpg", "skagg/skagg-skaggkam-tra-2.jpg", "skagg/skagg-skaggkam-tra-3.jpg")
?>

<p>Liten (9 x 5cm) skäggkam i trä med ganska täta tänder för något mindre grova skägg. Robust och skön att hålla i.</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>