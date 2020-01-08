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
  
        $number = readline();
        if (preg_match("/^[0-9\-\']+$/", $number))
            return $number;
        else 
            Utility::numberValidation();
    }
}
