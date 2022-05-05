<?php
function split_name($names) {
    $arr_length=count($names);
    foreach ($names as $string){
        $arr = explode(' ', $string);
        $num = count($arr);
        $first_name = $middle_name = $last_name = null;
        
        if ($num == 2) {
            list($first_name, $last_name) = $arr;
        } else {
            list($first_name, $middle_name, $last_name) = $arr;
        }

        echo "First Name: ";
        echo $first_name;
        echo "<br>Middle Name: ";
        echo $middle_name;
        echo "<br>Last Name: ";
        echo $last_name;
        echo "<br> <br>";
    }

}

split_name(array("Trapper Wolf", "Cara Dune", "Bo-Katan Kryze", "Paul Sun-Hyung Lee", "Dee Bradley Baker"));
?>