<?php
include "head1.php";
?>
<title>Derby rakblad enkeleggade, 100st</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Derby rakblad enkeleggade, 100st</h1>
<p id="product-page-price">99kr</p>

<?php
$slider = new Slider();
$slider->showSlider("rakblad/rakblad-derby-enkeleggade-1.jpg")
?>

<p>Enkeleggade blad avsedda för rakkniv tillverkade av välkända Derby. Tillverkade av svenskt stål i Turkiet.</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>