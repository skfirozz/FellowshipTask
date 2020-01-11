<?php
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
        // array_push($player,$t);
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