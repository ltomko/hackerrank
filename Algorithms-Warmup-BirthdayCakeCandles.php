<?php

$handle = fopen ("php://stdin", "r");
function birthdayCakeCandles($n, $ar) {
    // Complete this function
    $max = max($ar);
   // echo $max;
    
    $counts = array_count_values($ar);
    return $counts[$max];
   // for ($x = 0; $x <= $n; $x++) {
   //     $num = $ar[$x];
   // }
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = birthdayCakeCandles($n, $ar);
echo $result . "\n";

?>
