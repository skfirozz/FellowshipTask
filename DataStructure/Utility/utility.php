<?php
class Utility{
    public static function readWords()
    {
        $file="/home/admin1/Documents/Fellowship/DataStructure/files/words.txt";
        $open=fopen($file,"r") or die("can't open the file");
        $word=fread($open,filesize($file));
        fclose($open);
        return $word;
    }
    public static function readNumbers()
    {
        $file="/home/admin1/Documents/Fellowship/DataStructure/files/numbers.txt";
        $open=fopen($file,"r") or die("can't open the file");
        $word=fread($open,filesize($file));
        fclose($open);
        return $word;
    }
    static function leapYear($n)
    {
        if(strlen((string)$n)==4){
            if(($n%4==0)&&($n%100!=0)||($n%400==0)){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
        
    static function printDay($d,$m,$y)
    {
        $y0 = $y - (int)((14 - $m) / 12);
        $x = $y0 + (int)($y0/4) - (int)($y0/100) + (int)($y0/400);
        $m0 = $m + 12 * (int)((14 - $m) / 12) - 2;
        $d0 = ($d + $x + (int)((31*$m0) / 12)) % 7;
        return $d0;
    }
        
        
    static public function getInt() 
    {
        fscanf(STDIN,"%d\n",$n);
        while(!is_numeric($n)){
            echo "enter numeric value"."\n";
            fscanf(STDIN,"%d\n",$n);
        }
        return $n;
    }

    public static function primeRange()
    {
        $array=array(array());
        $col=0; $row=0; $temp=0;
        for($i=2;$i<=1000;$i++){
            $c=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0)
                    $c++;
            }
            if($c==2){
                $temp=$row;
                $row=floor($i/100);
                if($temp !=$row)
                    $col=0;
                $array[$row][$col]=$i;
                $col++;
            }   
        }
        return $array;
    }

    public static function check($value)
    {
        $bool=false;
        $array=Utility::primeRange();
        for($i=0;$i<count($array);$i++)
        {
            if($array[$i]==$value){
                $bool=true;
            break;
            }
        }
        if($bool==true)
        return true;
        else 
        return false;
    }

    public static function primeAnagram($array)
    {
        $count1=0;$count2=0;
        $primeAnagram=array();
        $primeNotAnagram=array();
       for($i=0;$i<=9;$i++){
           for($j=0;$j<count($array[$i]);$j++){
            $temp=$array[$i][$j];
            $finValue=0;
            while(floor($temp !=0)){
                $t=floor($temp%10);
                $temp=floor($temp/10);
                $finValue=$finValue*10+$t;
            }
            if(Utility::check($finValue)){
                $primeAnagram[$count1]=$array[$i][$j];
                $count1++;
            }
            else {
                $primeNotAnagram[$count2]=$array[$i][$j];
                $count2++;
            }
           }
        }
        echo "anagrams are:\n";
        echo implode(" ", $primeAnagram),"\n";
        echo "not anagrams are:\n";
        echo implode(" ", $primeNotAnagram),"\n";
    }
}
?>