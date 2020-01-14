<?php
/********************************************************************
* @Execution : Fellowship/OOps/Oops/MainPrograms $ php deckOfCards.php
* @description :Write a Program DeckOfCards.php , to initialize deck of cards having suit ("Clubs",
    "Diamonds", "Hearts", "Spades") & Rank ("2", "3", "4", "5", "6", "7", "8", "9", "10",
    "Jack", "Queen", "King", "Ace"). Shuffle the cards using Random method and then
    distribute 9 Cards to 4 Players and Print the Cards the received by the 4 Players
    using 2D Array
* @Purpose : displaying who got which cards 
* @function : Utility/utility
* @file : deckOfCards.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 11-01-2020
*********************************************************************/
function check($cards,$player)
{
    global $player;
    global $cards;
    $row=random_int(0,3);
    $col=random_int(1,13);
    if($cards[$row][$col] == ' '){
    check($cards,$player);      
    }
    else 
    {
        $t=array();
        $array=array();
        $temp=$cards[$row][$col]."-".$cards[$row][0];
        $cards[$row][$col]=' ';
        echo $temp,"     ";
    }
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

    for( $i=0;$i<9;$i++){
        check($cards,$player);
        check($cards,$player);
        check($cards,$player);
        check($cards,$player);
        echo "\n";
    }
    echo count($player);
}
run($cards);

?>