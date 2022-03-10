<?php
    
?>
<html>

<body>
    <h1> Send ad </h1>
    <form action="add_ad.php" method="GET">
        <p>Email: <input type="email" name="email"></p>
        <select name="category">
            <option selected>Choose category</option>
            <option value="buy">Buy</option>
            <option value="job">Job</option>
            <option value="missing">Missing</option>
            <option value="sale">Sale</option>
        </select>
        <h3>Header</h3>
        <p><input type="text" name="header"></p>
        <h3>Ad</h3>
        <p><textarea name="text"></textarea></p>
        <input type="submit" value="submit">
    </form>
    <br>
    <h1> Ads </h1>
    <br>
    <?php
        $buy = scandir("categories/buy");
        $job = scandir("categories/job");
        $missing = scandir("categories/missing");
        $sale = scandir("categories/sale");
        echo "<table border=1><caption>Buy</caption>";
        foreach($buy as $ad){
            if ($ad != "." && $ad != ".."){
            $readAd = file_get_contents("categories/buy/$ad");
            echo "<tr><td>$readAd</td></tr>";
            }
        }
        echo "</table><br>";
        echo "<table border=1><caption>Job</caption>";
        foreach($job as $ad){
            if ($ad != "." && $ad != ".."){
            $readAd = file_get_contents("categories/job/$ad");
            echo "<tr><td>$readAd</td></tr>";
            }
        }
        echo "</table><br>";
        echo "<table border=1><caption>Missing</caption>";
        foreach($missing as $ad){
            if ($ad != "." && $ad != ".."){
            $readAd = file_get_contents("categories/missing/$ad");
            echo "<tr><td>$readAd</td></tr>";
            }
        }
        echo "</table><br>";
        echo "<table border=1><caption>Sale</caption>";
        foreach($sale as $ad){
            if ($ad != "." && $ad != ".."){
            $readAd = file_get_contents("categories/sale/$ad");
            echo "<tr><td>$readAd</td></tr>";
            }
        }
        echo "</table><br>";
    ?>
</body>

</html>