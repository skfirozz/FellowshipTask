<?php
class Utility
{
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
