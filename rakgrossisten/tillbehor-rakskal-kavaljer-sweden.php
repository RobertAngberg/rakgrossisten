<?php
include "head1.php";
?>
<title>Rakskål Kavaljer Sweden</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Rakskål Kavaljer Sweden</h1>
<p id="product-page-price">129kr</p>

<?php
$slider = new Slider();
$slider->showSlider("tillbehor/tillbehor-kavaljer-sweden-rakskål-1.jpg", "tillbehor/tillbehor-kavaljer-sweden-rakskål-2.jpg", "tillbehor/tillbehor-kavaljer-sweden-rakskål-3.jpg")
?>

<p>Väldigt lyxig rakskål tillverkad av ordentligt tjockt, rostfritt stål. 8,5cm bred och 3,7cm hög. Den är tung och ordentlig så att det känns att den är av hög kvalitét. Kavaljer Swedens logga är snyggt infräst på framsidan. Passar perfekt till vår Kavaljer Sweden raktvål.</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>