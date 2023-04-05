<?php
include "head1.php";
?>
<title>Rakkniv/shavette i rostfritt stål</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Rakkniv/shavette i rostfritt stål</h1>
<p id="product-page-price">99kr</p>

<?php
$slider = new Slider();
$slider->showSlider("rakknivar/rakkniv-shavette-1.jpg", "rakknivar/rakkniv-shavette-2.jpg", "rakknivar/rakkniv-shavette-3.jpg")
?>

<p>Rakkniv av riktigt hög kvalitét till ett lågt pris. Stålet är rostfritt och rakkniven känns tung handen vilket ger en känsla av kvalitét.
    <br /><br />
    Typen av denna kniv är shavette, vilket betyder att man använder lösa rakblad som man kan byta ut. Det finns enkelrakblad att köpa men det mest ekonomiska är att ta ett vanligt dubbelrakblad till en säkerhetshyvel och bryta på mitten och sen använda i rakkniven.
</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>