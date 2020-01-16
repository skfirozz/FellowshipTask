<?php
class Utility
{
    /*
     *@description : validating the word is string with out numbers without spaces
     *$parameter : no parameters
     *$return : returns the word if it is valid
     */
    public static function nameValidation()
    {

        $name = readline();
        if (preg_match("/^[a-zA-Z\-\']+$/", $name)) {
            return $name;
        } else {
            Utility::nameValidation();
        }

    }

    /*
     *@description : validating the input is integer or not
     *$parameter : no parameter
     *$return : returns the integer value
     */
    public static function numberValidation()
    {

        fscanf(STDIN, "%d\n", $n);
        while (!is_numeric($n)) {
            fscanf(STDIN, "%d\n", $n);
        }
        return $n;
    }

    /*
     *@description : validating the input is integer or not
     *$parameter : no parameter
     *$return : returns the integer value
     */
    public static function getInt()
    {
        fscanf(STDIN, "%d\n", $n);
        while (!is_numeric($n)) {
            echo "enter numeric value" . "\n";
            fscanf(STDIN, "%d\n", $n);
        }
        return $n;
    }

}
