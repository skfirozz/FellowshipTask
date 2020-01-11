<?php
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/Queue.php';
function check($cards,$player)
{
    global $player;
    global $cards;
    global $obj1;global $obj2;global $obj3;global $obj4;
    $row=random_int(0,3);
    $col=random_int(1,13);
    // $temp="";
    $temp=0;
    if($cards[$row][$col] == 1){
    check($cards,$player);      
    }
    else 
    {
        $t=array();
        $array=array();
        $temp=$cards[$row][$col];//.$cards[$row][0];
        // echo $temp,"   ";
        $cards[$row][$col]=1;
        // $object->queue($temp);
       
    }
    return  $temp;
}
$cards=array(array('Clubs','2','3','4','5','6','7','8','9','10','11','12','13','14'),
            array('Dimonds','2','3','4','5','6','7','8','9','10','11','12','13','14'),
            array('Hearts','2','3','4','5','6','7','8','9','10','11','12','13','14'),
            array('Spades','2','3','4','5','6','7','8','9','10','11','12','13','14'));
    
function run()
{
    global $cards;
    $player1=array();
    $player2=array();
    $player3=array();
    $player4=array();
    $player=array();
    $obj1=new Queue();$obj2=new Queue();$obj3=new Queue();$obj4=new Queue();
    for( $i=0;$i<9;$i++){
        $name=check($cards,$player);
        // echo $name,"  ";
        $obj1->queue($name);
        check($cards,$player);
        check($cards,$player);
        check($cards,$player);
        echo "\n";
    }
    ECHO "\n\n";
    
    // $obj1->display();
    echo "\n\n";
}
run($cards);
