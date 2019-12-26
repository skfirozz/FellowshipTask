<?php
include "/home/admin1/Documents/Fellowship/Functions/BusinessLogic/businessLogic.php";
class Utility{
    /*
    *@description : validating name Validation
    *$parameter : reads the input String from user
    *$return : returns {boolean}  
    */
    public function nameValidation($name)
    {
        if(!preg_match("/^[a-z\tA-Z]+$/",$name))
            return false;
        return true;
    }

     /*
    *@description : replacing the name in the string 
    *$return : displays the string with replaced name  
    */
    static public function replaceName()
    {
        echo "enter userName\n";
        $name=readline();
        if(Utility::nameValidation($name) && strlen($name) > 2)
        {
            $mainTemplate="Hello <<userName>>, How are you?";
            echo str_replace("<<userName>>", $name, $mainTemplate)."\n";
        }
        else {
            echo "enter valid name\t name should be minimum 3 characters\n";
            Utility::replaceName();
        }
    }

    /*
    *@description : flipping the coin for N no of times
    *$parameter : reads the input integer from user
    */
    static public function flipCoins($number)
    {
        $heads=0; $tails=0;
        for($i=0;$i<$number;$i++)
        {
           if(random_int(0,1)==1)
               $heads++;
           else 
               $tails++;
        }
        echo ($heads/$number)*100,"%\theads\n";
        echo ($tails/$number)*100,"%\ttails\n";
    }

    /*
    *@description : checking leap year or not
    *$parameter : reads the input year from user 
    */
    static public function leapYearOrNot($year)
    {
        if($year%400==0||$year%4==0 && $year%100 != 0)
        echo "$year is a leap year\n";
        else echo "$year is not a leap year\n";
    }

    /*
    *@description : power of two 
    *$parameter : reads the input integer from user
    */
    static public function powerOfTwo($power)
    {
        if($power>0 && $power <31) {
            for($i=1;$i<=$power;$i++)
            {
                $value=2**$i;
                echo $value,"\n";
            }
        } else
            echo "power should be between 0 and 31\n";
    }

    /*
    *@description : finding harmonic Number upto N 
    *$parameter : reads the input integer from user
    */
    static public function harmonicNumber($number)
    {
        $value=0;
        for($i=1;$i<=$number;$i++)
            $value=$value+1.0/$i;
        echo "harmonic value:  $value\n";
    }

    /*
    *@description : Prime factors of a number 
    *$parameter : reads the input intger from user
    */
    public static function primeFactors($number)
    {
        for($i=2;$i<=$number;$i++)
        {
            $count=0;
            if($number%$i==0)
            for($j=2;$j<=$i;$j++)
            {
                if($i%$j==0)
                $count++;
            }
            if($count==1)
            echo $i,"\n";
        }
    }

    /*
    *@description : gambler stars a game with some stake and checking win and los 
    *$parameter : reads the inputs integer number,goal,stake from user
    */
    public static function gambler($goal,$number,$stake)
    {
        $loss=0;$wins=0;$time=0;
        for($i=0;$i<$number;$i++) {
            $randcv= rand( 0,1 );
            if($randcv==1 ){
                $stake++;
                $wins++;
            } else{
               $stake--;
               $loss ++;
            }
            $time++;
            if($stake==$goal || $stake==0)
               break;
        }
        echo $wins,   " wins\n";
        echo $stake,  " stake \n";
        echo $loss  , " loss\n";  
    }

   /*
    *@description : generating random values
    *$parameter : radas the inout from the user
    */
    public static function random($number)
    {
        $array=array();
        for($i=0;$i<$number;$i++)
        {
            $value=BusinessLogic::check($i,$array);
            $array[$i]=$value;
            echo $value,"\n";
        }
    }

    /*
    *@description : Finding sum of three numbers are zeros
    *$parameter : reads the input row and col  from user
    */
    public static function twoDArr($row,$col)
    { 
        $array1=BusinessLogic::SumZero($col,$row);
        for($i=0;$i<$row;$i++){
            for($j=0;$j<$col;$j++)
             echo $array1[$i][$j]," ";
            echo "\n";
        }
    }

    /*
    *@description : counting which sum of three numbers are Zero
    *$parameter : reads the input integers  from user
    */
    public static function sumThreeZero($size)
    {
       $array=BusinessLogic::SumZero($size);
        for($i=0;$i<$size;$i++){
            for($j=$i+1;$j<$size;$j++){
                for($k=$j+1;$k<$size;$k++){
                    if($array[$i]+$array[$j]+$array[$k]==0)
                        echo $array[$i]," ",$array[$j]," ",$array[$k],"\n";
                }
            }
        }
    }

    /*
    *@description :  finding the the distance from the origin
    *$parameter : reads the input x and y from user
    */
    public static function distanceOrigin($x,$y)
    {
        $value=sqrt($x*$x+$y*$y);
        echo $value,"\n";
    }

    /*
    *@description : finding the roots in quadratic equation
    *$parameter : reads the input a, b and c from user 
    */
    public static function quadratic($a,$b,$c)
    {
        $delta=$b*$b-4.0*$a*$c;
        $delta=sqrt($delta);
        echo $delta,"\n";
        $r1=(-$b+$delta)/2.0*$a;
        $r2=(-$b-$delta)/2.0*$a;
        echo "r1  ", $r1;
        echo "\nr1  ", $r2;
    }

    /*
    *@description : windChill Calculation
    *$parameter : reads the input te,perature and speed from use 
    */
    public static function windChill($t,$v)
    {
        $pow=pow($v,0.16);
        $w=35.74+0.6215*$t+(0.4275*$t- 35.75)*$pow;
        echo $w,"\n";
    }


    

 /*
    *@description : validating name Validation
    *$parameter : reads the input String from user
    *$return : returns {boolean}  
    */
    public static function getInt()
    {
        fscanf(STDIN,"%d\n",$n);
        while(!is_numeric($n)){
            echo "enter numberic value: \n";
            fscanf(STDIN,"%d\n",$n);
        }
        return $n;
    }


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
              echo $i," ";
              $count++;
            }
        }
        return $array;
    }
    public static function primePalindrome($array)
    {
        for($i=0;$i<count($array);$i++){
            $value=$array[$i];
            while($value!=0){
                $value=$value;
            }
        }
    }

}
?>