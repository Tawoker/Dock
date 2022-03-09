<?php
if (isset($_POST["text"])){
    echo "Sum words: " , str_word_count($_POST["text"]), "<br>";
    echo "Sum chars: " , strlen($_POST["text"]), "<br>";
}
else {
    header("Location: 2point.html");
    exit;
}
?>