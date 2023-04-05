<?php
include "head1.php";
?>
<title>Tack</title>
<?php
include "head2.php";

$slug = $_POST["slug"];
$username = $_POST["username"];
$review = $_POST["review"];
$rating = $_POST["rating"];

$stmt = $conn->prepare("INSERT reviews SET Slug=?, Username=?, Review=?, Rating=?");
$stmt->bind_param("sssi", $slug, $username, $review, $rating);
$stmt->execute();

// $last_id = mysqli_insert_id($conn);

////////////////// Email ////////////////////

$to = "info@rakgrossisten.se";
$subject = "Rakgrossisten: Recension tillagd";

$message = "
<html>
<body>
<h1 style='color: #695d2d; text-align: center;'>Recension tillagd</h1>
Slug/URL: " . $slug . "
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <info@rakgrossisten.se>' . "\r\n";

mail($to, $subject, $message, $headers);

echo "<center><h2>Tack för din recension!</h2></center>";

$stmt->close();
$conn->close();
include "foot.php";
?>