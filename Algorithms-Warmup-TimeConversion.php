<?php

$handle = fopen ("php://stdin", "r");
function timeConversion($s) {
    // Complete this function
    
    $amorpm = substr($s, 8, 2);
    $s = substr_replace($s, "", 8, 2);
    $first = substr($s, 0, 2);
    
    if ($amorpm == "PM" && $first < 12){
        
        $first = $first + 12;
        $s = substr_replace($s, $first, 0, 2);
        
    }
    
    if ($amorpm == "AM" && $first == "12"){
        $s = substr_replace($s, "00", 0, 2);
    }
    
    
    return $s;
}

fscanf($handle, "%s",$s);
$result = timeConversion($s);
echo $result . "\n";

?>
