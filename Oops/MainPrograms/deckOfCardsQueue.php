<?php
include '/home/admin1/Documents/Fellowship/OOps/Oops/MainPrograms/Queue.php';
function check($cards)
{
    $t=0;
    global $mainArray;
    global $cards;
    $row=random_int(0,3);
    $col=random_int(1,13);
    if($cards[$row][$col] == 1){
        check($cards);      
    }
    else 
    {
        $t=$cards[$row][$col];
        $mainArray[]=$t;
        $temp=$cards[$row][$col].$cards[$row][0];
        $cards[$row][$col]=1;
    }
    return $t;
}
$cards=array(array('Clubs','2','3','4','5','6','7','8','9','10','11','12','13','14'),
            array('Dimonds','2','3','4','5','6','7','8','9','10','11','12','13','14'),
            array('Hearts','2','3','4','5','6','7','8','9','10','11','12','13','14'),
            array('Spades','2','3','4','5','6','7','8','9','10','11','12','13','14'));
$mainArray=array();
function run()
{
    global $mainArray;
    
    $obj1=new Queue();$obj2=new Queue();$obj3=new Queue();$obj4=new Queue();
    global $cards;
    for( $i=0;$i<9;$i++){
        check($cards);
        check($cards);
        check($cards);
        check($cards);
    }   
    $i=0;
    while($i<36){
        $obj1->enqueue($mainArray[$i]);
        $i++;
        $obj2->enqueue($mainArray[$i]);
        $i++;
        $obj3->enqueue($mainArray[$i]);
        $i++;
        $obj4->enqueue($mainArray[$i]);
        $i++;
    }
    echo "\n";
    $obj1->display();
    echo "\n";
    $obj2->display();
    echo "\n";
    $obj3->display();
    echo "\n";
    $obj4->display();
    echo "\n";
        

}
run($cards);
?>