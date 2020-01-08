<?php
class Utility
{
    public static function nameValidation()
    {
       
        $name = readline();
        if (preg_match("/^[a-zA-Z\-\']+$/", $name))
            return $name;
        else 
            Utility::nameValidation();
    }
    public static function fullNameValidation()
    {
      
        $fName = readline();
        if (preg_match("/^[a-zA-Z\- \']+$/", $fName))
            return $fName;
        else 
            Utility::fullNameValidation();
    }
    public static function numberValidation()
    {
  
       fscanf(STDIN,"%d\n",$n);
       while(!is_numeric($n)){
           fscanf(STDIN,"%d\n",$n);
       }
    return $n;
    }
}
