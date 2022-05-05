<?php
// create index.json file as input to remove null field in your root directory
$jsonString = file_get_contents("./json.json");
$jsonToArr = json_decode($jsonString, true);

// recurresively remove key and value pair with null value
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
// output
$outputJson = fopen('./output.json', "w");
fwrite($outputJson, json_encode($output));
fclose($outputJson);
?>