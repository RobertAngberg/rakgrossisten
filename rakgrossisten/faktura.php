<!DOCTYPE html>

<?php
// Jag vet inte namnet på key i $_POST, detta pga hur knapparna funkar i backend.php
// Behöver därför kunna t.ex. $_POST[0] - fixa det här
$keys = array_keys($_POST);
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
    <title>Faktura</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div id="faktura-container">
        <img src="bilder/faktura-logo.png" id="faktura-logo" />
        <h1 id="faktura-H1">Faktura</h1>
        <br /><br /><br />

        <?php
        // Hackigt... det finns underscore från $_POST: "Namn_Efternamn", 
        // gör om till space med str_replace, och efter det
        // nl2br gör om "\n" (space) till linebreak
        $address = str_replace("_", ' ', $keys[3]);
        echo nl2br($address);
        echo "<br /><br /><br />";

        echo
        "<table><tr class='faktura-underline-tr'>
        <td class='faktura-produkt-td'><b>Produkter</b></td>
        <td class='faktura-totalt-td'><b>Totalt inkl. 29kr frakt</b></td>
        </tr><tr>
        <td id='faktura-produkt-td' class='faktura-produkt-td'>" . nl2br($keys[5]) . "</td>
        <td class='faktura-totalt-td'>";

        if ($keys[4] < 499) {
            echo $keys[4] + 29 . "kr";
        } else {
            echo $keys[4] . "kr (fri frakt)";
        }

        echo "</td></table><br><br>";

        // Hackigt, ta bort klockslaget genom att ta bort sista 9 chars
        echo "Orderdatum: " . substr($keys[1], 0, -9);
        echo "<br>";
        // Lägg till 14 dagar för förfallodatum
        echo "Förfallodatum: " . date('Y-m-d', strtotime(substr($keys[1], 0, -9) . ' + 14 days'));
        echo "<br /><br />";
        echo "Ordernummer/OCR: <b>" . $keys[0] . "</b>";
        echo "<br />";
        echo "Betala till Bankgiro: <b>291-3242</b>";
        echo "<br /><br />";

        ?>

        <br />
        <p>Vänligen ange ordernumret som OCR vid inbetalning.
            Det kan stå Firma Robert Angberg vid inbetalning,
            det är korrekt och inget fel.</p>
        <br /><br /><br /><br /><br /><br />
        <p>
            <center><small>
                    Företaget innehar F-skattesedel.<br>
                    Org. nummer: 830618-6910<br>
                    Tack för din beställning och välkommen åter!<br>
                    Kontakt: info@rakgrossisten.se
                </small></center>
        </p>
    </div>
    <script>
        let gay = document.getElementById("faktura-produkt-td").innerHTML;
        gay = gay.replaceAll("_", " ");
        document.getElementById("faktura-produkt-td").innerHTML = gay;
    </script>
</body>

</html>