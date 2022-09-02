<?php

function array_Lenght($array){
    $tam = 0;
    foreach ($array as $i){
        $tam+=1;
    }
    return $tam;
}

function array_popIndex($array, $index){

    $TAM = array_Lenght($array);
    $newArray = [];

    for($i=0;$i<$TAM;$i++){
        if($i!=$index){
            $newArray[] = $array[$i];
        }
    }   
    return $newArray;
}
