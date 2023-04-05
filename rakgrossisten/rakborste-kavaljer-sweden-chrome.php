<?php
include "head1.php";
?>
<title>Kavaljer Sweden Chrome rakborste</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Kavaljer Sweden Chrome rakborste</h1>
<p id="product-page-price">269kr</p>

<?php
$slider = new Slider();
$slider->showSlider("rakborstar/rakborste-kavaljer-sweden-chrome-1.jpg", "rakborstar/rakborste-kavaljer-sweden-chrome-2.jpg", "rakborstar/rakborste-kavaljer-sweden-chrome-3.jpg")
?>

<p>Modernt och lyxigt designad rakborste med en hårknut av 100% grävlinghår. Det snygga och tunga skaftet är tillverkat i rostfritt stål.
    <br /><br />
    Finns nu att köpa med antingen Best badger-hår eller med den allra lyxigaste typen, Silvertip badger.
    <br /><br />
    Kan även köpas i ett paket tillsammans med matchande säkerhetshyvel och ställ här.
</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>