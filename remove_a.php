<?php
$array = ["Maeve Millay", "Bernard Lowe", "Dolores Hale","Abernathy", "Charlotte"] ;
$key=[""];
$array = str_replace("a","",$array);
foreach ($array as  $key => $val){
echo $array[$key];
echo "<br>";
}
?>