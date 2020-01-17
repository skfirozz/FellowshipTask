<?php
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/Structural/AdapterDesignPattern/Socket.php';
interface Adapter{
    public function get120Volts();
    public function get3Vlots();
    public function get12Volts();
}

class SocketAdapter extends socket implements Adapter{
    public function get120Volts()
    {
        return $this->getVolts();
    }
    public function get3Vlots()
    {
        return $this->getVolts()/40;
    }
    public function get12Volts()
    {
        return $this->getVolts()/10;
    }
}
?>