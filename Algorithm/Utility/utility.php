<?php
include "/home/admin1/Documents/Fellowship/Algorithm/BusinessLogic/businessLogic.php";
class Utility{
    /*
    *@description : two strings are anagram or not
    *$parameter : reads the inputs String from user
    *$return : returns {boolean}  
    */
    public static function AnagramOrNot($str1,$str2)
    {
        if(strlen($str1)==strlen($str2))
            BusinessLogic::anagram($str1,$str2);
        else 
            echo "not anagram";
    }

    /*
    *@description : prime numbers between the range
    *$parameter : reads the input range from user
    *$return : array which consists of prime numbers
    */
    public static function primeRange($range)
    {
        $array=array();
        $count=0;
        for($i=2;$i<=$range;$i++){
            $c=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0)
                    $c++;
            }
            if($c==2){
              $array[$count]=$i;
              $count++;
            }
        }
        return $array;
    }
    /*
    *@description : prime palindrome numbers
    *$parameter : reads the input prime number array 
    *$return : returns the prime palindrome numbers  
    */
    public static function primePalindrome($array)
    {
        $c=0;
        $primePal=array();
        for($i=0;$i<count($array);$i++)
		{
			$temp=$array[$i];
			$finValue=0;
			while(floor($temp !=0))
			{
				$t=floor($temp%10);
				$temp=floor($temp/10);
                $finValue=$finValue*10+$t;
            }
			for($j=0;$j<count($array);$j++)
			{
				if( $finValue==$array[$j]&& $finValue >9)
				{
                    $primePal[$c]=$array[$j];
					$c++;
				}
			}
        }
        return $primePal;
    }

    /*
    *@description : primeAnagram numbers
    *$parameter : reads the input array from the prime range 
    *$return : returns the prime anagram numbers  
    */
    public static function primeAnagram($array)
    {
        for($i=0;$i<count($array);$i++){
            if($array[$i]>9){
                $val=BusinessLogic::bubbleSort($array[$i]);
                for($j=0;$j<count($array);$j++){
                    if($val==$array[$j] && $i != $j)
                        echo $val," ";
                }
            }
        }
    }


    /*
    *@description : reads the words from the file
    *$parameter : no parameter
    *$return : returns the arranged words in array  
    */
    public static function readWords()
    {
        $file="/home/admin1/Documents/Fellowship/Algorithm/words.txt";
        $open=fopen($file,"r") or die("can't open the file");
        $word=fread($open,filesize($file));
        fclose($open);
        return $word;
    }

    /*
    *@description : searching the word from  in array 
    *$parameter : reads the input word and array from the user
    *$return : returns {boolean}  
    */
    public static function binarySearch($array,$word)
    {
        $size=count($array);
        $mid;
        $low=0;
        $last=$size-1;
        for($i=0;$i<$size;$i++){
            while($low<=$last){
                $mid=round(($low+$last)/2);
                if($word==$array[$mid])
                    return $mid;
                else if($word > $array[$mid])
                    $low=$mid+1;
                else
                    $last=$mid-1;
            }
        }
        if(count($array)==0)
            return false;
    return false;
    }

    /*
    *@description : sorting the set of words using InsertionSort 
    *$parameter : reads the input words of an array from the user  
    */
    public static function insertionSort($array)
    {
        for($i=1;$i<count($array);$i++)
		{
			$temp=$array[$i];
		    $j=$i-1;
			while($j>=0 && $array[$j] > $temp)
			{
				$array[$j+1]=$array[$j];
				$j=$j-1;
			}
			$array[$j+1]=$temp;
        }
        for($i=0;$i<count($array);$i++){
            echo $array[$i]," ";
        }
    }
    
    /*
    *@description : sorting the set of words using BubbleSort 
    *$parameter : reads the input words of an array from the user  
    */
    public static function bubbleSort($array)
    {
        for($i=0;$i<count($array);$i++){
           for($j=0;$j<count($array)-$i-1;$j++){
                if ($array[$j] > $array[$j+1]){ 
                 $t = $array[$j]; 
                 $array[$j] = $array[$j+1]; 
                 $array[$j+1] = $t; 
                } 
            }
        }
        for($i=0;$i<count($array);$i++){
            echo $array[$i]," ";
        }
    }

    /*
    *@description : sorting the set of words using MergeSort 
    *$parameter : reads the input words of an array from the user  
    */
    public static function div($array,$lb,$up)
	{
		if($lb < $up)
		{
		    $mid=floor(($lb+$up)/2);
			div($array, $lb, $mid);
			div($array, $mid+1, $up);
			merge($array, $lb, $mid, $up);
		}
	}
	public static function merge($array,$lb,$mid,$up)
	{
		$n1=$mid-$lb+1;
		$n2=$up-$mid;
		$array1=new SplFixedArray($n1);
		$array2=new SplFixedArray($n2);
		for ($i = 0; $i < count($array1); $i++) 
			$array1[$i]=$array[$lb+$i];
		for ($j = 0; $j < count($array2); $j++) 
			$array2[$j]=$array[$mid+1+$j];	
		$i=0;$j=0;$k=$lb;
		    while($i < $n1 && $j < $n2)
			{
				if($array1[$i] > $array2[$j])
				{
					$array[$k]=$array2[$j];
					$k++;$j++;
				}
				else {
					$array[$k]=$array1[$i];
					$i++;$k++;
				}
			}
			while($i<$n1)
			{
				$array[$k]=$array1[$i];
				$i++;
				$k++;
			}
			while($j<$n2)
			{
				$array[$k]=$array2[$j];
				$j++;
				$k++;
            }
            return $array;
    }
    
     /*
    *@description : vending Machine  
    *$parameter : reads the input amount and notes from the user  
    */
    public static function vendingMachine($array,$amount)
    {
        $notes=array();
        $money=$amount;
        $count=0;
        $c=0;
        for($i=count($array)-1;$i>=0;$i--){
            if($array[$i] <=$money ){
                $count=$count+floor($money/$array[$i]);
                $money=$money%$array[$i];
                $notes[$c]=$array[$i];
                $c++;
            }
        }
        echo "the minimum number of notes are : ",$count,"\n";
        for($i=0;$i<count($notes);$i++)
        echo $notes[$i]," ";
        echo "\n";
    }

     /*
    *@description : finding the day of the week   
    *$parameter : reads the year, month and date from the user  
    */
    public static function dayOfWeek($year,$month,$date)
    {
        $y=$year-(14-$month)/12;
		$x=$y+$y/4-$y/100+$y/400;
		$m=$month+12*((14-$month)/12)-2;
        $day=($date+$x+31*$m/12)%7;
        BusinessLogic::day($day);
    }

    /*
    *@description : finding the day of the week   
    *$parameter : reads the year, month and date from the user  
    */
    public static function temperatureConv($celsius,$fahrenheit) 
    {
        $fah=($celsius * 9/5) + 32 ;
        $cel=($fahrenheit - 32) * 5/9;
        echo "fahrenheit-----$fah\n";
        echo "celsiud-----$cel\n";
    }

    /*
    *@description : calculating the monthly intrest payment on principle amount    
    *$parameter : reads the years, money and rate of intrest from the user  
    */
    public static function monthlyPayment($years,$money,$intr)
    {
        $n=12*$years;
        $r=$intr/(12*100);
        $payment=($money*$r)/1-pow(1+$r,-$n);
        echo "monthly payment is----$payment\n";
    }

     /*
    *@description : converting decimal value to binary value    
    *$parameter : reads the decimal value  from the user  
    *@return : returns the array which consists of binary value in reverse order
    */
    public static function decmalToBinary($dec)
    {
        $binary=array();
        $c=0;
        $dup=$dec;
        while($dup != 0){
            $val=$dup%2;
            $binary[$c]=$val;
            $c++;
            $dup=floor($dup/2);
        }
        for($i=count($binary)-1;$i>=0;$i--)
            echo $binary[$i];
        echo "\n";
        return $binary;
    }

    /*
    *@description : converting decimal value to binary value    
    *$parameter : reads the decimal value  from the user  
    *@return : return the decimal value after operation of swaping nibbles and converting into binary
    */
    public static function binaryNibbles($binary)
    {
        for($i=count($binary);$i<8;$i++)//adding 0 for starting when the length of the number is below 8
              $binary[$i]=0;
        for($i=count($binary)-1;$i>=0;$i--)//swaping the two halfs of the number
        echo $binary[$i];
        echo "\n";
        for($i=0;$i<4;$i++){
            $t=4+$i;
            $temp=$binary[$i];
            $binary[$i]=$binary[$t];
            $binary[$t]=$temp;
        }
        // for($i=count($binary)-1;$i>=0;$i--)
        // echo $binary[$i];
        echo "\n";
        $t=0;
        for($i=count($binary)-1;$i>=1;$i--)
            $t=($t+$binary[$i])*2;
        echo $t,"\n";
        return $t;
    }
}
?>