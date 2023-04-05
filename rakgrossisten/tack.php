<?php
include "head1.php";
?>
<title>Tack</title>
<?php
include "head2.php";

$email = $_POST["email"];
$fullname = $_POST["fullname"];
$street = $_POST["street"];
$zip = $_POST["zip"];
$town = $_POST["town"];
$totalsum = $_POST["totalsum"];
$items = $_POST["items"];

// Space klipper av postnumret, ta bort space
$zip = str_replace(' ', '', $zip);

$stmt = $conn->prepare("INSERT orders SET email=?, fullname=?, street=?, zip=?, town=?, totalsum=?, items=?");
$stmt->bind_param("sssisis", $email, $fullname, $street, $zip, $town, $totalsum, $items);
$stmt->execute();

$last_id = mysqli_insert_id($conn);

echo "<div id='tack-container'>";
echo "<p>Tack så mycket, " . $fullname . "! Din order är mottagen. Ditt ordernummer är " . $last_id . ".</p>";
echo "<p>En bekräftelse ska ha skickats till " . $email . ".</p>";
echo "<p>Om du inte fått den vänligen kolla din skräppost!</p>";
echo "</div>";

////////////////// Email ////////////////////

$to = $email;
$subject = "Rakgrossisten: Tack för din beställning!";

$message = "
<html>
<body>
<h1 style='color: #695d2d; text-align: center;'>Orderbekräftelse</h1>
Tack så mycket för din beställning, " . $fullname . "!
Du kommer att få en pappersfakura med i ditt paket 
men du kan också betala med uppgifterna nedan.
<br /><br />
Ordernummer/OCR: " . $last_id . "
<br />
Summa: " . $totalsum . "kr
<br />
Betala till Bankgiro: 291-3242
<br /><br />
Ange endast ordernumret/OCR vid inbetalning, namn behövs inte.
<br />
Vänligen betala inte innan du fått hem din beställning. Vanlig leveranstid är 2-3 dagar.
<br /><br />
Tack igen!
<br /><br />
Hälsningar,
<br />
Rakgrossisten.se
<br />
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <info@rakgrossisten.se>' . "\r\n";

mail($to, $subject, $message, $headers);

$stmt->close();
$conn->close();
include "foot.php";
