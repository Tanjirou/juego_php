<?php

$palabras = array("sol","luna","cielo");
$palabrasDesordenadas = array();
for($i=0; $i<count($palabras);$i++){
    $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);

}
$palabras = implode(',',$palabras);
?>