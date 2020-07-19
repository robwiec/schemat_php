<?php
$va ='zaw';
$vb ='';
if (isset($va)) {
    echo '$va jest ustawiona </br>';
} 
if (empty($va)) {                           //empty sprawdza czy zawiera dane
    echo '$va jest pusta </br>';
} 
if (isset($vb)) {
    echo '$vb jest ustawiona </br>';
} 
if (empty($vb)) {
    echo '$vb jest pusta </br>';
}

?>