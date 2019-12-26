<?php
include "/home/admin1/Documents/Fellowship/Algorithm/Utility/utility.php";
$words=Utility::readWords();
echo $words," ";
$array=explode(" ",$words);
echo "enter the word to search: ";
$read=readline();

?>