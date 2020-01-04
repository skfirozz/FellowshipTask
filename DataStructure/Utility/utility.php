<?php
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
class Utility
{
    public $firstNode;
    public $lastNode;
    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }

    /*
     *@description : reading words file
     *$parameter : no parameter and this is for unsorted orderLinked list
     */
    public static function readWords()
    {
        $file = "/home/admin1/Documents/Fellowship/Data/DataStructure/files/words.txt";
        $open = fopen($file, "r") or die("can't open the file");
        $word = fread($open, filesize($file));
        fclose($open);
        return $word;
    }

    /*
     *@description : reading numbers from  file
     *$parameter : no parameter and this is for Ordered linked list
     */
    public static function readNumbers()
    {
        $file = "/home/admin1/Documents/Fellowship/Data/DataStructure/files/numbers.txt";
        $open = fopen($file, "r") or die("can't open the file");
        $word = fread($open, filesize($file));
        fclose($open);
        return $word;
    }

    /*
     *@description : finding the year is leap year or not
     *$parameter : parameter is year
     *@return : boolean
     */
    public static function leapYear($n)
    {
        if (strlen((string) $n) == 4) {
            if (($n % 4 == 0) && ($n % 100 != 0) || ($n % 400 == 0)) {
                return true;
            }

        }
        return false;
    }

    /*
     *@description : getting the day of the date
     *$parameter : parameters are year month and date
    @return : integer
     */
    public static function printDay($d, $m, $y)
    {
        $y0 = $y - (int) ((14 - $m) / 12);
        $x = $y0 + (int) ($y0 / 4) - (int) ($y0 / 100) + (int) ($y0 / 400);
        $m0 = $m + 12 * (int) ((14 - $m) / 12) - 2;
        $d0 = ($d + $x + (int) ((31 * $m0) / 12)) % 7;
        return $d0;
    }

    /*
     *@description : getting the value
     *$parameter : no parameter
    @return : integer
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

    /*
     *@description : generating the prime values for 0-1000
     *$parameter : no parameters
    @return : returning the 2Darray which consists of only prime numbers
     */
    public static function primeRange()
    {
        $array = array(array());
        $col = 0;
        $row = 0;
        $temp = 0;
        for ($i = 2; $i <= 1000; $i++) {
            $c = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $c++;
                }

            }
            if ($c == 2) {
                $temp = $row;
                $row = floor($i / 100);
                if ($temp != $row) {
                    $col = 0;
                }

                $array[$row][$col] = $i;
                $col++;
            }
        }
        return $array;
    }

    /*
     *@description : generating the prime values for 0-1000
     *$parameter : no parameters
    @return : returning the 1Darray which consists of only prime numbers
     */
    public static function primeRange1()
    {
        $array = array();
        $count = 0;
        for ($i = 2; $i <= 1000; $i++) {
            $c = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $c++;
                }
            }
            if ($c == 2) {
                $array[$count] = $i;
                $count++;
            }
        }
        return $array;
    }

    public static function primeAnagramNotAnagram($array)
    {
        $array1 = Utility::primeRange1();
        $count1 = 0;
        $count2 = 0;
        $primeAnagram = array();
        $primeNotAnagram = array();

        for ($i = 0; $i <= 9; $i++) {
            for ($j = 0; $j < count($array[$i]); $j++) {
                $temp = $array[$i][$j];
                $finValue = 0;
                while (floor($temp != 0)) {
                    $t = floor($temp % 10);
                    $temp = floor($temp / 10);
                    $finValue = $finValue * 10 + $t;

                }
                $bool = false;
                for ($l = 0; $l < count($array1); $l++) {
                    if ($finValue == $array1[$l] && $finValue > 11) {
                        $bool = true;
                        $primeAnagram[$count1] = $array[$i][$j];
                        $count1++;
                        break;
                    }
                }
                if ($bool == false) {
                    $primeNotAnagram[$count2] = $array[$i][$j];
                    $count2++;
                }
            }
        }
        echo "anagrams are:\n";
        echo implode(" ", $primeAnagram), "\n\n";
        echo "not anagrams are:\n";
        echo implode(" ", $primeNotAnagram), "\n\n";
    }

    /*
     *@description : generating the prime anagrams for 0-1000
     *$parameter : array is the parameter in that array only prime numbers
    @return : returning the 1Darray which consists of only prime Anagrams
     */
    public static function primeAnagram($array)
    {
        $c = 0;
        $primePal = array();
        for ($i = 0; $i < count($array); $i++) {
            $temp = $array[$i];
            $finValue = 0;
            while (floor($temp != 0)) {
                $t = floor($temp % 10);
                $temp = floor($temp / 10);
                $finValue = $finValue * 10 + $t;
            }
            for ($j = 0; $j < count($array); $j++) {
                if ($finValue == $array[$j] && $finValue > 11) {
                    $primePal[$c] = $array[$i];
                    $c++;
                }
            }
        }
        return $primePal;
    }

    /*
     *@description : reading the numbers from a file and this is for hashing function program
     *$parameter : no parameters
    @return : returns the array which consists of numbers which are exist in readed file
     */
    public static function readHashNumbers()
    {
        $file = "/home/admin1/Documents/Fellowship/Data/DataStructure/files/hashingNumbers.txt";
        $open = fopen($file, "r") or die("can't open the file");
        $word = fread($open, filesize($file));
        fclose($open);
        return $word;
    }

    /*
     *@description : creating a new node and linking to next Linked List
     */
    public function insert($data)
    {
        $newNode = new ListNode($data);
        $newNode->next = $this->firstNode;
        $this->firstNode = &$newNode;
    }

    /*
     *@description : deleting a node from a linked list
     *@parameter : parameter is data
     */
    public function delete($data)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
        while ($current->data != $data) {
            if ($current->next == null) {
                return null;
            } else {
                $previous = $current;
                $current = $current->next;
            }
        }
        if ($current == $this->firstNode) {
            $this->firstNode = $this->firstNode->next;
        } else {
            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }

            $previous->next = $current->next;
        }
    }

    /*
     *@description : searching a data weatheer the data is exist or not if it is exist adding else deleting that node
     *@parameter : parameter is data
     */
    public function search($data)
    {
        $bool = true;
        $ta = $this->firstNode;
        while ($ta != null) {

            if ($ta->data == $data) {
                Utility::delete($data);
                echo "deleted $data\n";
                $bool = false;
                break;
            } else {
                $ta = $ta->next;
            }

        }
        if ($bool) {
            Utility::insert($data);
            $open = fopen("/home/admin1/Documents/Fellowship/Data/DataStructure/files/words.txt", "a") or die("can't open the file");
            fwrite($open, $data . "  ");
            echo "$data added\n";
        }
    }

    /*
     *@description : displaying the linked list
     */
    public function display()
    {
        $ta = $this->firstNode;
        while ($ta != null) {
            echo $ta->data, " ";
            $ta = $ta->next;
        }
        echo "\n\n";
    }
}
