<?php
function integers($x,$y){
    $sum = 0;
    for($i=1; $i<=$y; $i++){
        $sum += $i;
    }
    if($sum%$x==0){
        echo("ok <br>");
    }
    else{
        echo("not <br>");

    }
    
}
integers(3,5);
integers(2,6);

?>