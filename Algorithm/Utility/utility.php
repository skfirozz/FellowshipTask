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
        // echo "\n\nfrom 0 to 1000 there are : $count\n";
        return $array;
    }
    /*
    *@description : prime palindrome numbers
    *$parameter : reads the input prime number array 
    *$return : returns the prime palindrome numbers  
    */
    public static function primeAnagram($array)
    {
        $c=0;
        $primePal=array();
        for($i=0;$i<count($array);$i++){
            $temp=$array[$i];
            $finValue=0;
            while(floor($temp !=0)){
                $t=floor($temp%10);
                $temp=floor($temp/10);
                $finValue=$finValue*10+$t;
            }
            for($j=0;$j<count($array);$j++){
                if( $finValue==$array[$j] && $finValue>11 ){
                    $primePal[$c]=$array[$j];
                    echo $array[$j]," ",$array[$i],"\n";
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
    public static function primePalindrome($array)
    {
        $rev = 0;
        for ($i = 0; $i <count($array); $i++){
            $n = $array[$i];
            while (floor($n)){
                $b = $n%10;
                $rev = $rev*10 + $b;
                $n /= 10;
            }
            if ($rev == $array[$i])
                echo $array[$i] . " ";
            $rev=0;
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
        $mid;$low=0;
        $last=$size-1;
        for($i=0;$i<$size;$i++){
            while($low<=$last){
                $mid=round(($low+$last)/2);
                if($word==$array[$mid])
                    return true;
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
        for($i=1;$i<count($array);$i++){
			$temp=$array[$i];
		    $j=$i-1;
			while($j>=0 && $array[$j] > $temp){
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
        // for($i=0;$i<count($array);$i++){
            // echo $array[$i]," ";
        // }
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
                echo $array[$i],"----",floor($money/$array[$i]);
                echo "\n";
                $money=$money%$array[$i];
                $notes[$c]=$array[$i];
                $c++;
            }
        }
         echo "the minimum number of notes are : ",$count,"\n";
    }

     /*
    *@description : finding the day of the week   
    *$parameter : reads the year, month and date from the user  
    */
    public static function dayOfWeek($year,$month,$date)
    {
        $y=$year- ((14-$month)/12);
		$x=$y+($y/4)-($y/100)+($y/400);
		$m=$month+(12*((14-$month)/12))-2;
        $day=($date+$x+f((31*$m)/12))%7;
        echo $day,"  "; 
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

    /*
    *@description : converting decimal value to binary value    
    *$parameter : reads the decimal value  from the user  
    */
    public static function sqrt($c)
    {
        $t=$c;
        $epsilon=1e-15;
        while(abs($t-$c/$t) > $epsilon*$t)
        $t=(($c/$t)+$t)/2;
        echo "$t\n";
    }

    /*
    *@description : just for displaying array    
    *$parameter :passing an array  
    */
    public static function dispayArray($array)
    {
        for($i=0;$i<count($array);$i++)
        echo $array[$i]," ";
        echo "\n";
    }
    /*
    *@description : guess game using binary search     
    *$parameter : reads the number and search number from the user  
    */
    public static function guessNumber($number,$search)
    {
        $start=0;
        $value=pow(2,$number);
        $end=$value;
        $mid=floor($start+$end)/2;
        $bool=true;
        while($bool){
            echo "enter 1 if =$mid\nenter 2 if <$mid\nenter 3 if >$mid\n";
            $user=readline();
            if($user==1){
                echo "your number is: $mid\n";
                $bool=false;
                break;
            }
            else if($user==2)
                $mid=floor($mid)/2;
            else if($user==3)
                $mid=floor($mid+$end)/2;
        } 
    }
}
?>