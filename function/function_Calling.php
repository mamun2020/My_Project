<?php
$performence = 20;
//$function_calling = "getSomething";
$function_calling = "getResult";
function getResult ($exam1 = "", $exam2 = "", $exam3 = "")
{
    global $performence;
    $result = $exam1 + $exam2 + $exam3 + $performence;
    return $result;
}

function getSomething ($exam1 = "", $exam2 = "", $exam3 = "")
{
    global $performence;
    $result = $exam1 + $exam2 + $exam3 + $performence+50;
    return $result;
}



$myresult = $function_calling();
echo $myresult;
