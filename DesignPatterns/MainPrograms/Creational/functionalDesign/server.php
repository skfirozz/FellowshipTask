<?php
class Server{
    public $IP;
    public $loc;
    public $name;
    public function Server($name,$loc,$IP)
    {
        $this->name=$name;
        $this->loc=$loc;
        $this->IP=$IP;
    }
    public function name($name){
        return $this->name;
    }
    public function loc($loc){
        return $this->loc;
    }
    public function IP($IP){
        return $this->IP;
    }
}