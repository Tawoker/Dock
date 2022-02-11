<?php
function printStringReturnNumber(){
    echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nulla repellendus, quidem id quo ipsa vel iusto libero aspernatur autem sit eius quia corporis illo totam cupiditate eos reiciendis cumque?", "\n";
    return 10;
}
$my_num = printStringReturnNumber();
echo $my_num;