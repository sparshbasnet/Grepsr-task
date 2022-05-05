<?php
$array = ["Maeve Millay", "Bernard Lowe", "Dolores Hale","Abernathy", "Charlotte"] ;
$key=[""];
$array = str_replace("a","",$array);
foreach ($array as  $key => $val){
echo $array[$key];
echo "<br>";
}




// $new_array=[];
// $arrlength=count($array);
// for($i=0; $i<=$arrlength; $i++){
//     $new_array[]=trim($array[$i],"a");

// }
// print_r($new_array);





// $arr = ["ramesh", "sparsh", "hari", "Anish"];
// $new_arr = [];
// $to_match = "a";

// foreach ( $arr as $key => $val ) {
//     // var_dump(strpos($arr[0], $to_match  ));
//     // die();
//     if(strpos($val, $to_match  )) { 
//         $new_str = str_replace($val,$to_match, trim($val));
//         var_dump($new_str);
//         die();
//         $new_arr[] = $new_str;    
//     } 
// }

// print_r($new_arr);
?>