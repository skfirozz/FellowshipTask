<?php
/*
write a program to re-arrange array in alternating position and negative numbers
@input>>>{1,2,3,-4,-1,4}
@output>>{-4,1,-1,2,3,4}
*/

function minusValues($array)
{
    $minusArray=array();
    $count=0;
    for($i=0;$i<count($array);$i++){
        if($array[$i] < 0){
            $minusArray[]=$array[$i];
        }
    }
    return $minusArray;
}
function positiveValues($array)
{
    $positiveArray=array();
    $count=0;
    for($i=0;$i<count($array);$i++){
        if($array[$i] >=0){
            $positiveArray[]=$array[$i];
        }
    }
    return $positiveArray;
}
function sortArray($array)
{
    for($i=0;$i<count($array);$i++){
        for($j=0;$j<count($array);$j++){

            if($array[$j] > $array[$i]){
            $temp=$array[$j];
            $array[$j]=$array[$i];
            $array[$i]=$temp;
            }
        }
    }

    return $array;
}
echo "enter size: ";
$size=readline();
$array=array();
for($i=0;$i<$size;$i++)
{
    $array[$i]=readline();
}
$minA= minusValues($array);
$posA=positiveValues($array);
$mA=sortArray($minA);
$pA=sortArray($posA);
for($i=0;$i<count($mA);$i++){
    echo $mA[$i]," ";
    echo $pA[$i]," ";
}
?>                 