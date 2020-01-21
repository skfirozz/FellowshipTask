<?php
class BusinessLogic{
    function addShares($filename)
    {
        echo "enter the number of stocks you want to add: ";
        $number=readline();
        $array=array();
        for($i=0;$i<$number;$i++)
        {
            $arr=array();
            echo "enter the symbol name: ";
            $arr['symbol']=Utility::nameValidation();
            echo "enter the number of shares :   ";
            $arr['shares']=Utility::getInt();
            echo "enter the price of each share: ";
            $arr['price']=Utility::getInt();
            array_push($array,$arr);
        }
    return $array;
    }
    function addUsersData()
    {
        echo "enter number of users: ";
        $array=array();
        $users=Utility::getInt();
        for($i=0;$i<$users;$i++){
            $arr=array();
            echo "enter name :";
            $arr['name']=Utility::nameValidation();
            echo "enter the shares: ";
            $arr['shares']=Utility::getInt();
            echo "enter balance : ";
            $arr['balance']=Utility::getInt();
            array_push($array,$arr);
        }
        return $array;
    }
    function buy($amount,$symbol)
    {
        // echo "enter the shares file name: ";
        $fileShare='shares.json';
        // echo "enter the user filename: ";
        $fileUser='users.json';
        echo "enter the user name: ";
        $username=Utility::nameValidation();
        $userData=json_decode(file_get_contents($fileUser));
        if($fileShare){
            $data=json_decode(file_get_contents($fileShare));
            $bool=true;
            for($i=0;$i<count($data);$i++){
                if($data[$i]->symbol == $symbol){
                    $share=($data[$i]->price*$data[$i]->shares)-$amount;
                    $data[$i]->shares=floor($share/$data[$i]->price);
                    echo $data[$i]->shares,"\n";
                    $bool=false;
                break;
                }
            }
            for($i=0;$i<count($userData);$i++){
                if($userData[$i]->name == $username &&  $userData[$i]->balance >= $amount){
                    $userData[$i]->balance -= $amount;
                break;
                }
            }
            if($bool==true)
            echo "$symbol is not exist in $fileShare.......\n\n"; 
        }
        else echo "not found file name..";
        $fp=fopen($fileShare,'w');
        fwrite($fp,json_encode($data));
        fclose($fp);
        $fp1=fopen($fileUser,'w');
        fwrite($fp1,json_encode($userData));
        fclose($fp1);
    }
    static function saveFile($filename,$array)
    {
        $previousdata=json_decode(file_get_contents($filename));
        $currentData=array_merge($previousdata,$array);
        file_put_contents($filename,json_encode($currentData));
    }
    function sell($amount,$symbol)
    {
        // echo "enter the shares file name: ";
        $fileShare='shares.json';
        // echo "enter the user filename: ";
        $fileUser='users.json';
        echo "enter the user name: ";
        $username=Utility::nameValidation();
        $userData=json_decode(file_get_contents($fileUser));
        if($fileShare){
            $data=json_decode(file_get_contents($fileShare));
            $bool=true;
            for($i=0;$i<count($data);$i++){
                if($data[$i]->symbol == $symbol){
                    $data[$i]->shares+=floor($amount/$data[$i]->price);
                    $bool=false;
                break;
                }
            }
            for($i=0;$i<count($userData);$i++){
                if($userData[$i]->name == $username ){
                    $userData[$i]->balance += $amount;
                    // $userData[$i]->shares-=floor($amount/$userData[$i]->price);
                break;
                }
            }
            if($bool==true)
            echo "$symbol is not exist in $fileShare.......\n\n"; 
        }
        else echo "not found file name..";
        file_put_contents( $fileShare,json_encode( $data));
        file_put_contents(  $fileUser,json_encode(  $userData));
    }
}
?>