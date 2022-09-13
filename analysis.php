<?php
if($_REQUEST['palabras']){
    $palabras = explode(',',$_REQUEST['palabras']);
}
$array = [];
for($i=0;$i<count($palabras);$i++){
    $respuesta = $_REQUEST["palabra$i"];
    if(strtolower($respuesta) == $palabras[$i]){ 
        array_push($array,["success"=>"La palabra $respuesta es correcta"]);
    }else{
        array_push($array,["error"=>"La palabra $respuesta es incorrecta.La palabra correcta es $palabras[$i]"]);
    }
}
echo json_encode($array);
?>