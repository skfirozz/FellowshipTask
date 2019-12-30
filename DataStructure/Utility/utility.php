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
}
?>