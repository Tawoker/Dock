<?php
$very_bad_unclear_name = "15 chicken wings";
$other = & $very_bad_unclear_name;
$other .= " in basket";
echo $other;
