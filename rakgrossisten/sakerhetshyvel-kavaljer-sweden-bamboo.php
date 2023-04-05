<?php
include "head1.php";
?>
<title>Kavaljer Sweden Bamboo</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Kavaljer Sweden Bamboo</h1>
<p id="product-page-price">249kr</p>

<?php
$slider = new Slider();
$slider->showSlider("sakerhetshyvlar/sakerhetshyvel-kavaljer-sweden-bamboo-1.jpg", "sakerhetshyvlar/sakerhetshyvel-kavaljer-sweden-bamboo-2.jpg", "sakerhetshyvlar/sakerhetshyvel-kavaljer-sweden-bamboo-3.jpg")
?>

<p>Mycket snygg säkerhetshyvel med skaft i bambu.
    Huvudet är tillverkat i rostfritt stål och är av closed-comb och skruvas
    av när man byter blad. Nyligen prissänkt!
    <br /><br />
    Medföljer gör ett 5-pack med testrakblad.
</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>