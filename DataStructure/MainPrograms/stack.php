<?php
class Stack{
    public $stack=array();
    public  $top;
    function __construct()
    {
        $top=-1;
    }
    function push($data)
    {
        $this->stack[$this->top+1]=$data;
        echo $stack[0];
    //    $this->top=$top+1;
        // echo $top,"\n";
    }
    function pop($data)
    {
       
    }

}
echo "enter expresssion: ";
$exp=readline();
$obj=new Stack();
for($i=0;$i<strlen($exp);$i++){
    // if($exp[$i]=='('){
    $obj->push($exp[$i]);
    // $obj->display();
}
    // else if($exp[$i]==')'){
    // $obj->pop($exp[$i]);
    // $obj->display()
    // }

?>