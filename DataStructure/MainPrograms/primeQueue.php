<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php primeQueue.php
* @description :  Take a range of 0 ­ 1000 Numbers and find the Prime numbers in that range. Store
    the prime numbers in a queue and print reverse 
*@purpose : printing prime anagrams using queue in reverse manner
* @function : Utility/utility
* @file : prime2DArray.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
include "/home/admin1/Documents/Fellowship/Data/DataStructure/Utility/utility.php";
include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
// include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/queue.php";
$array=Utility::primeRange1();
$anagram=Utility::primeAnagram($array);
class Queu{
    public $firstNode;
    public  function __construct()
    {
        $this->firstNode = NULL;
        
    }
    function enqueue($name)
    {
        $newNode = new ListNode($name); 
        if($this->firstNode==null)
            $this->firstNode=&$newNode;
        else{
            $ta=$this->firstNode;
            while($ta != null){
                if($ta->next==null){
                    $ta->next=&$newNode;
                break;
                }
                $ta=$ta->next;
            }
        }    
    }
    function displayQueue()
    {
        $ta=$this->firstNode;
        while($ta != null){
            echo $ta->data," ";
            $ta=$ta->next;
        }
        echo "\n";
    }
}
$obj=new Queu();
for($i=0;$i<count($anagram);$i++){
    $obj->enqueue($anagram[$i]);
}
$obj->displayQueue();
?>