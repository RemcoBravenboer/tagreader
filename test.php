<?php
$out = '';
$scan = $argv[1];
echo $scan;
$pieces = str_split($scan, 3);
for($i = 0; $i < count($pieces); $i++){
    $pieces[$i] = chr(substr($pieces[$i], 2));
    $out .= $pieces[$i];
}
echo $out;
