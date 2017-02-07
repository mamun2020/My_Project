<?php
$performence = 20;
function getResult ($exam1 = "", $exam2 = "", $exam3 = "")
{
    global $performence;
    $result = $exam1 + $exam2 + $exam3 + $performence;
    return $result;
}

function getSomething ($exam1 = "", $exam2 = "", $exam3 = "")
{
    global $performence;
    $result = $exam1 + $exam2 + $exam3 + $performence;
    return $result;
}

$myresult2 = getSomething(15,12,50);
echo $myresult2 ."<br>";

$myresult = getResult(10,12,5);
echo $myresult;
