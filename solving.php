<?php
    $handle = fopen ("php://stdin", "r");
    

function superDigit($n, $k) {  
       
    $sum = 0;
    $new=0;
    $m = strlen($n);
    
    $new = str_pad($n, $k*$m, $n);      
    $chars = str_split($new);
    foreach($chars as $char){
    $sum=$sum+$char;
}
    $ai = $sum;
    while($ai>9) {
 
        $ai= superDigit($ai,0);
}
return $ai;}
   
    



fscanf($handle, "%s %i", $n, $k);
$result = superDigit($n, $k);
echo $result . "\n";

?>
