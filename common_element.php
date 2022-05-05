<?php
$a = array("a","c","d","g","i");
$b = array("x", "z", "n", "k", "d", "l", "a", "m", "n");
foreach ($a as $value) {
    if (in_array($value, $b)) {
        $c[] = $value;
    }
}
print_r($c);
// $arr_length=count($c);
// for ($i=0; $i<$arr_length; $i++){
//     echo($c[$i]);
// }
?>