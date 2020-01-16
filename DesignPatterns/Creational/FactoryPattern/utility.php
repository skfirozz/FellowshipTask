<?php
class Utility{
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
?>