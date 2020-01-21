<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms $ php deckOfCardsQueue.php
* @description :Write a Program DeckOfCards.php , to initialize deck of cards having suit ("Clubs",
    "Diamonds", "Hearts", "Spades") & Rank ("2", "3", "4", "5", "6", "7", "8", "9", "10",
    "Jack", "Queen", "King", "Ace"). Shuffle the cards using Random method and then
    distribute 9 Cards to 4 Players and Print the Cards the received by the 4 Players
    using 2D Array
* @Purpose : sorting the getting cards
* @function : Utility/utility
* @file : deckOfCardsQueue.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
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
$cards=array(array('Clubs','2','3','4','5','6','7','8','9','10','Jack','King','Queen','Ace'),
            array('Dimonds','2','3','4','5','6','7','8','9','10','Jack','King','Queen','Ace'),
            array('Hearts','2','3','4','5','6','7','8','9','10','Jack','King','Queen','Ace'),
            array('Spades','2','3','4','5','6','7','8','9','10','Jack','King','Queen','Ace'));
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