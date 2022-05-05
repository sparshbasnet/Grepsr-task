<?php
$x = array(0=>['label'=>'Appointment','is_open'=>1],1=>['label'=>'Checkup','is_open'=>0]);
$y = array(0=>['open_time'=>'10:00'],1=>['open_time'=>'12:00']);
$z = array(0=>['close_time'=>'16:00'],1=>['close_time'=>'20:00']);

$final_output = [];
array_push($final_output, array_merge($x[0],$y[0],$z[0]));
array_push($final_output, array_merge($x[1],$y[1],$z[1]));
print_r($final_output);
?>