<?php
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="sample.csv"');

$user_CSV[0] = array('Name', 'Phone', 'Email', 'Address');


$user_CSV[1] = array('Robert', 98345678, 'grepsr@gmail.com', 'Kathmandu');

$fp = fopen('php://output', 'wb');
foreach ($user_CSV as $line) {
    fputcsv($fp, $line, ',');
}
fclose($fp);
?>