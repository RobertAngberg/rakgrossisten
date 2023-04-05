</main>
<footer>
  <p>Företaget innehar F-skattesedel och är momsregistrerat <br />
    <a href="blogg.php">Blogg</a> |
    <a href="kopvillkor.php">Köpvillkor</a> |
    <a href="kontakt.php">Kontakt</a>
  </p>
</footer>
<script src="./js/index.js"></script>
<?php
$uri = $_SERVER['REQUEST_URI'];
if (str_contains($uri, 'varukorg')) {
  echo '<script src="./js/varukorg-kassa.js"></script>';
}
if (str_contains($uri, 'kassa')) {
  echo '<script src="./js/varukorg-kassa.js"></script>';
}
if (str_contains($uri, 'tack')) {
  echo '<script src="./js/tack.js"></script>';
}
?>
</body>

</html>