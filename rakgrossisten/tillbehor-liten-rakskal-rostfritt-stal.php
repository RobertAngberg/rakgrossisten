<?php
include "head1.php";
?>
<title>Rakskål i rostfritt stål</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Rakskål i rostfritt stål</h1>
<p id="product-page-price">69kr</p>

<?php
$slider = new Slider();
$slider->showSlider("tillbehor/tillbehor-liten-rakskal-rostfritt-stal-1.jpg")
?>

<p>Liten och snygg rakskål med höga kanter för att minimera kladd. Materialet är 100% rostfritt stål. Skålen är 5cm hög och 7cm bred.</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>