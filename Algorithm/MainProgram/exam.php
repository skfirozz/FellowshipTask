<?php
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";

$array=Utility::primeRange(1000);
$reverseArray=array();
$c=0;
 for($i=0;$i<count($array);$i++)
{
        $temp=$array[$i];
        $temp1=0;
        while($temp !=0 ){
            $val=floor($temp%10);
            $temp=floor($temp/10);
            $temp1=$temp1*10+$val;
        }
        $reverseArray[$c]= $temp1;
        $c++;

}
for($i=0;$i<count($reverseArray);$i++)
{
    //  echo $reverseArray[$i]," ";
}
echo "\n\n";
for($i=0;$i<count($reverseArray);$i++){
    for($j=0;$j<count($array);$j++){
        if($reverseArray[$i]==$array[$j])
        echo $array[$j]," ";
    }
}


?>