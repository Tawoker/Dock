<?php
    require "../vendor/autoload.php";
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
    $client->setAuthConfig('../credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = '13ixJlPRuhkFhySTPfW5Suu65t5iHVZYfPrTC0-y42uE';
    $range = 'AdData!A1:D';
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();
    var_dump($values);
?>
<html>

<body>
    <h1> Send ad </h1>
    <form action="/3lab/save_ad.php" method="GET">
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
    <h1>Ads from GoogleSheets</h1>
    <table border=1>
    <tr><th>Category</th><th>Email</th><th>Header</th><th>Text</th></tr>
    <?php
    foreach($values as $adData){
        echo "<tr>" . "<td>" . ucfirst($adData[0]) . "</td>";
        echo "<td>" . $adData[1] . "</td>";
        echo "<td>" . $adData[2] . "</td>";
        echo "<td>" . $adData[3] . "</td>" . "</tr>";
    }
    ?>
    </table>
</body>
</html>