<?php
/********************************************************************
* @Execution : Fellowship/Data/DataStructure/MainPrograms $ php balancedParenthesis.php
* @description : Take an Arithmetic Expression such as
    (5+6)∗(7+8)/(4+3)(5+6)∗(7+8)/(4+3) where parentheses are used to order the
    performance of operations. Ensure parentheses must appear in a balanced
    fashion.
* @Purpose : parenthsis balanced or not....
* @function : Utility/utility
* @file : balancedParentsis.php
* @author : skfirozz <shaikfiroz838@gmail.com>
* @version : 7.2.24
* @since : 24-12-2019
*********************************************************************/
// include "/home/admin1/Documents/Fellowship/Data/DataStructure/MainPrograms/node.php";
include "/home/admin1/Documents/Fellowship/Data/DataStructure/BusinessLogic/businessLogic.php";
echo "enter expresssion: ";
$exp=readline();
$bool=true;
$obj=new BusinessLogic();
for($i=0;$i<strlen($exp);$i++){
    if($exp[$i]=='(')
        $obj->push($exp[$i]);
    else if($exp[$i]==')' ){
        $bool=$obj->pop($exp[$i]);
        if($bool==false)
        break;
    }
}
$obj->peek();
$boolis=$obj->isEmpty();
if($boolis && $bool)
    echo "balanced\n";
else 
    echo "not balanced\n"
?>