<?php
include "head1.php";
?>
<title>Liten sax för skägg, mustasch & näshår</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Liten sax för skägg, mustasch & näshår</h1>
<p id="product-page-price">59kr</p>

<?php
$slider = new Slider();
$slider->showSlider("skagg/skagg-liten-sax-1.jpg", "skagg/skagg-liten-sax-2.jpg", "skagg/skagg-liten-sax-3.jpg")
?>

<p>Liten (9 x 4,5cm) sax för precisionsklippning av kluriga hårstrån. Skarpa blad av rostfritt stål.</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>