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
        $categories = scandir(__DIR__."/categories");
        $ads = [];
        foreach($categories as $category){
            if ($category != "." && $category != ".."){
                $ads[$category] = scandir("categories/$category");
            }
        };
        echo "<table border=1><caption>Ads</caption>";
        foreach($ads as $category => $arr){

            echo "<tr><th colspan=3 align=center>" . ucfirst($category) . "</th></tr>";
            foreach($arr as $ad){
                if ($ad != "." && $ad != ".."){
                    $file = fopen("categories/$category/$ad", "r");
                    $email = fgets($file);
                    $header = fgets($file);
                    $adText = fgets($file);
                    echo "<tr><td>$email</td><td>$header</td><td>$adText</td></tr>";
                }
            }
        }
        echo "</table>";
    ?>
</body>
</html>