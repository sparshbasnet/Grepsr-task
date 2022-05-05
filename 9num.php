<?php

$jsonString = file_get_contents("./json.json");
$jsonToArr = json_decode($jsonString, true);

function removeNull($arr) {
    foreach($arr as $key => $val){
        if(is_array($arr[$key])){
            $arr[$key] = removeNull($arr[$key]);
        }
        if(is_null($arr[$key]) || empty($arr[$key])){
            unset($arr[$key]);
        }
    }
    return $arr;
}

$output = removeNull($jsonToArr);
$outputJson = fopen('./output.json', "w");
fwrite($outputJson, json_encode($output));
fclose($outputJson);
?>