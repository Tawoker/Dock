<?php
session_start();
$_SESSION["surname"] = $_GET["surname"];
$_SESSION["name"] = $_GET["name"];
$_SESSION["age"] = $_GET["age"];
if(!empty($_SESSION)){
    foreach($_SESSION as $key => $value){
        echo "Your $key is $value <br>";
    }
    session_destroy();
}
?>
