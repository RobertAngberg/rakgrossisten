<?php
include "head1.php";
?>
<title>Alunstift</title>
<?php
include "head2.php";
include_once "slider.php"
?>

<h1>Alunstift</h1>
<p id="product-page-price">39kr</p>

<?php
$slider = new Slider();
$slider->showSlider("tillbehor/tillbehor-alunstift-1.jpg")
?>

<p>Ett måste i rakhyllan och extremt skönt att ha hemma i badrumsskåpet. Alunstift stoppar blödning omedelbart om du råkar skära dig vid rakning. Fukta toppen på stiftet och stryk på såret så stoppas blödningen direkt och täpper till såret så att ingen röd prick syns. Inget mer toapapper eller servetter vid en rakningsolycka. Billigast i Sverige!</p>

<?php
include "include-köp.php";
include "recensioner.php";
include "foot.php";
?>