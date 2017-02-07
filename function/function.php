<?php
function getResult ($exam1 = "", $exam2 = "", $exam3 = "")
{
    $performence = 20;
    $result = $exam1 + $exam2 + $exam3 + $performence;
    return $result;
}

function getSomething ($exam1 = "", $exam2 = "", $exam3 = "")
{
    $performence = 50;
    $result = $exam1 + $exam2 + $exam3 + $performence;
    return $result;
}

$myresult2 = getSomething(15,12,50);
echo $myresult2;

//$myresult = getResult(10,12,5);
//echo $myresult;
