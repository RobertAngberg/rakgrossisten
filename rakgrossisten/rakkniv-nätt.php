<?php
include "head1.php";
?>
<title>Nätt rakkniv av trä och rostfritt stål</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Nätt rakkniv av trä och rostfritt stål</h1>
<p id="product-page-price">169kr</p>

<?php
$slider = new Slider();
$slider->showSlider("rakknivar/rakkniv-nätt-1.jpg", "rakknivar/rakkniv-nätt-2.jpg", "rakknivar/rakkniv-nätt-3.jpg")
?>

<p>En något mindre rakkniv som är perfekt för resan. Den duger dock även gott för daglig användning. Skaftet är gjort i gediget trä och eggen i rostfritt stål. Ihopvikt är kniven ca 12,8cm lång och fullt utfälld ca 18,7cm. Vikten är ca 34 gram.
    <br />Måste slipas med en strigel.
</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>