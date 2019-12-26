<?php
class TicTacToe
{
    public static $game = array(array(0,0,0),array(0,0,0),array(0,0,0));
    public static $system = 3;
    static function check($array)
    {
        $bool = false;
       if ($array[0][0] == 1 && $array[0][1] == 1 && $array[0][2] == 1 ||$array[0][0] == 3 && $array[0][1] == 3 && $array[0][2] == 3) 
           $bool = true;
       if ($array[1][0] == 1 && $array[1][1] == 1 && $array[1][2] == 1||$array[1][0] == 3 && $array[1][1] == 3 && $array[1][2] == 3) 
           $bool = true;
       if ($array[2][0] == 1 && $array[2][1] == 1 && $array[2][2] == 1||$array[2][0] == 3 && $array[2][1] == 3 && $array[2][2] == 3) 
           $bool = true;
       if ($array[0][0] == 1 && $array[1][0] == 1 && $array[2][0] == 1||$array[0][0] == 3 && $array[1][0] == 3 && $array[2][0] == 3)
           $$b = true;
       if ($array[0][1] == 1 && $array[1][1] == 1 && $array[2][1] == 1||$array[0][1] == 3 && $array[1][1] == 3 && $array[2][1] == 3) 
           $b = true;
       if ($array[0][2] == 1 && $array[1][2] == 1 && $array[2][2] == 1||$array[0][2] == 3 && $array[1][2] == 3 && $array[2][2] == 3)
           $b = true;
       if ($array[0][0] == 1 && $array[1][1] == 1 && $array[2][2] == 1||$array[0][0] == 3 && $array[1][1] == 3 && $array[2][2] == 3)    
           $b = true;
       if ($array[0][2] == 1 && $array[1][1] == 1 && $array[2][0] == 1||$array[0][2] == 3 && $array[1][1] == 3 && $array[2][0] == 3) 
           $b = true;
       return $bool;
       }
   
    static function userInput()
    {
        echo "enter x"."\n";
        $x = readline();
        echo "enter y"."\n";
        $y = readline();
        if ($x >0 && $x < 4 && $y >0 && $y < 4 && TicTacToe::$game[$x - 1][$y - 1] != 0) 
         return false;
        TicTacToe::$game[$x - 1][$y - 1] = 1;
         return true;
    }
    static function systemInput()
    {
        $x = random_int(0,2);
        $y = random_int(0,2);      
    if(TicTacToe::$game[$x][$y] != 0)
        return false;
    TicTacToe::$game[$x][$y] = TicTacToe::$system;
    return true;
    }
    static function mainFunction()
    {
        echo "entre value of x and y between 1 and 3"."\n";
        for($i = 1; $i <= 9; $i++)
        {
            if($i % 2 == 0)
            {
                 while(!TicTacToe::userInput())
                    echo "position already occupied"."\n";
             }
            else
            {
              while(!TicTacToe::systemInput())
                {
                }
            }
            for ($j = 0; $j < 3; $j++) {
                for ($k = 0;$k < 3; $k++) {
                    echo TicTacToe::$game[$j][$k]." ";
                }
                echo "\n";
            }
            echo "\n";
            if(TicTacToe::check(TicTacToe::$game)) 
            {
                echo "***YOU WIN*** "."\n";
                break;
            }
            if (TicTacToe::check(TicTacToe::$game)) {
                echo "***SYSTEM WIN***"."\n";
                break;
            }
            if($i == 9)
                echo "***PLAY AGAIN***"."\n";
        }
    }
}
TicTacToe::mainFunction();
?>
?>