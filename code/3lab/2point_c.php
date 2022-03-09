<?php
session_start();
$_SESSION["user_data"] = ["name" => $_GET["name"], "age" => $_GET["age"], "salary" => $_GET["salary"], "contry" => $_GET["contry"]];
echo "<ul>";
foreach($_SESSION["user_data"] as $key => $value){
    echo "<li> Your $key is $value </li>";
}
echo "</ul>";
?>