<?php
include "head1.php";
?>
<title>Kassa</title>
<?php
include "head2.php";
?>

<div id="desktop-less-width">

    <h1>Kassa</h1>

    <p><b>Betalningsinformation</b></p>

    <p>Faktura med 14 dagars betalningsvillkor skickas via E-post. Vänligen kolla skräpposten om mailet ej erhålles.</p>
    <p>Pappersfaktura skickas också med beställningen.</p>
    <p>Vänligen betala inte innan du fått beställningen.</p>

    <div id="varukorg"></div>

    <form action="tack.php" method="post" id="varukorg-form">
        <div id="kassa-order-details">
            <label for="email">E-postadress:</label>
            <br />
            <input type="email" id="email" name="email" required />
            <br /><br />
            <label for="name">Namn:</label>
            <br />
            <input type="text" id="name" name="fullname" required />
            <br /><br />
            <label for=" street">Gatuadress:</label>
            <br />
            <input type="text" id="street" name="street" required />
            <br /><br />
            <label for="zip">Postnummer:</label>
            <br />
            <input type="text" id="zip" name="zip" required />
            <br /><br />
            <label for="town">Ort:</label>
            <br />
            <input type="text" id="town" name="town" required />
            <br />
            <br />
            Jag har läst och godkänner
            <label for="checkbox">
                <b><a href="kopvillkor.php" target="_blank">köpvillkoren</a></b>
            </label>
            <input type="checkbox" id="checkbox" name="checkbox" required />
            <br />
            <br />
            <button type="submit" class="button-large">Slutför köp</button>
            <input type="text" id="kassa-hidden-input-totalsum" name="totalsum" />
            <input type="text" id="kassa-hidden-input-items" name="items" />
        </div>
    </form>

</div>

<?php
include "foot.php";
?>