<?php
$nota= $_POST['nota'];
if ($nota > 5){
    echo "Aprobo";
} elseif ( $nota <= 5){
    echo "Reprobo";
}