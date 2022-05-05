<?php
$a =[ 3, 1, 5, 13, 18, 2, 4];
sort($a);
$arrlength = count($a);
echo "Ascending Order: <br>";
for($i = 0; $i < $arrlength; $i++) {
  echo $a[$i];
  echo "<br>";
}

$b = array(3, 1, 5, 13, 18, 2, 4);
rsort($b);
$arrlength = count($b);
echo "<br>Descending Order: <br>";
for($i = 0; $i < $arrlength; $i++) {
  echo $b[$i];
  echo "<br>";
}

?>