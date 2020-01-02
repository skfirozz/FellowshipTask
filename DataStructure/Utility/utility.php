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
        
}
?>