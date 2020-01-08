<?php
/********************************************************************
* @Execution : Fellowship/Algorithm/MainPrograms $ php mergeWord.php
* @description : Write a program with Static Functions to do Merge Sort of list of
    Strings......
* @function : Utility/utility
* @file : mergeWord.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 27-12-2019
*********************************************************************/
echo "enter the size: ";
$size=readline();
$arr = array(); 
echo "enter the words: ";
for($i=0;$i<$size;$i++)
$arr[$i]=readline();
echo "\n";
$arr=mergesort($arr);
 echo implode(' ',$arr);
 echo "\n";
function mergesort($numlist)
{
    if(count($numlist) == 1 ) return $numlist;
    $mid = count($numlist) / 2;
    $left = array_slice($numlist, 0, $mid);
    $right = array_slice($numlist, $mid);
    $left = mergesort($left);
    $right = mergesort($right);
    return merge($left, $right);
}
function merge($left, $right)
{
    $result=array();
    $leftIndex=0;
    $rightIndex=0;
    while($leftIndex<count($left) && $rightIndex<count($right)){
        if($left[$leftIndex]>$right[$rightIndex]){
            $result[]=$right[$rightIndex];
            $rightIndex++;
        }
        else{
            $result[]=$left[$leftIndex];
            $leftIndex++;
        }
    }
    while($leftIndex<count($left)){
        $result[]=$left[$leftIndex];
        $leftIndex++;
    }
    while($rightIndex<count($right)){
        $result[]=$right[$rightIndex];
        $rightIndex++;
    }
    return $result;
}