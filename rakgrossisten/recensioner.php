<div id="review-area">
    <h2>Recensioner</h2>

    <?php
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $url = "https://";
    } else {
        $url = "http://";
    }
    $url .= $_SERVER['HTTP_HOST'];
    $url .= $_SERVER['REQUEST_URI'];
    // Hämta slug efter sista slash / i URL, sen ta bort fyra sista chars (= .php)
    $url = substr($url, strrpos($url, '/') + 1);
    $url = substr($url, 0, -4);

    $query = "SELECT * FROM reviews WHERE Slug LIKE ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $url);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='review'>" .
                "<div class='name'>" . $row["Username"] . "</div>" .
                "<div class='rating'>" .
                showRatings($row["Rating"], $conn) .
                "</div>" .
                "<div class='text'>" . $row["Review"] . "</div>" .
                "</div>";
        }
    } else {
        echo "Inga recensioner ännu.";
    }

    function showRatings($rating, $conn)
    {
        if ($rating == 5) {
            echo "&#11088 &#11088 &#11088 &#11088 &#11088";
        } else if ($rating == 4) {
            echo "&#11088 &#11088 &#11088 &#11088";
        } else if ($rating == 3) {
            echo "&#11088 &#11088 &#11088";
        } else if ($rating == 2) {
            echo "&#11088 &#11088";
        } else if ($rating == 1) {
            echo "&#11088";
        }
    }

    ?>

    <h2>Lämna en recension</h2>

    <form action="submit-review.php" method="post">
        <label for="name">Namn:</label>
        <br />
        <input type="text" id="name" name="username">
        <label for="rating">Betyg:</label>
        <br />
        <select name="rating" id="rating">
            <option value="1">☆</option>
            <option value="2">☆☆</option>
            <option value="3">☆☆☆</option>
            <option value="4">☆☆☆☆</option>
            <option value="5">☆☆☆☆☆</option>
        </select>
        <br />
        <label for="review">Recension:</label>
        <textarea id="review-textarea" name="review"></textarea>
        <br>
        <input type="text" id="input-url-hidden" name="slug" value="<?php echo $url; ?>">
        <br>
        <button type="submit">Skicka</button>
    </form>
</div>