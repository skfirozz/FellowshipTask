<?php
class Utility{
    public function nameValidation($name)
    {
        if(!preg_match("/^[a-z\tA-Z]+$/",$name))
            return false;
        return true;
    }
/*
*/
    public function replaceName()
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

    static public function leapYearOrNot($year)
    {
        if($year%400==0||$year%4==0 && $year%100 != 0)
        echo "$year is a leap year\n";
        else echo "$year is not a leap year\n";
    }
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

    static public function harmonicNumber($number)
    {
        $value=0;
        for($i=1;$i<=$number;$i++)
    $value=$value+1.0/$i;
        echo "harmonic value:  $value\n";
    }
}
?>