<?php
if($_GET["email"] != "" && $_GET["category"] != "Choose category" && $_GET["header"] != "" && $_GET["text"] != "")
{
    $email = $_GET["email"];
    $header = $_GET["header"];
    $category = $_GET["category"];
    $text = $_GET["text"];
    $adFile = fopen("categories/$category/$header.txt" , "w");
    $adText = "Added by $email \n $header \n $text";
    fwrite($adFile, $adText);
    fclose($adFile);
}
header("Location: 3point.php");
?>