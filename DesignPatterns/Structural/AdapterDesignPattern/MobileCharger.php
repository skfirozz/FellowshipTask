<?php
include '/home/admin1/Documents/Fellowship/Design Patterns/DesignPatterns/Structural/AdapterDesignPattern/adapter.php';
class MobileCharger
{
    public $volts;
    public function __construct($volts)
    {
        $this->volts = $volts;
    }
    public function charge($volts)
    {
        if ($this->volts == $volts) {
            echo "Charging \n";
        } else {
            echo "No Charging\n";
        }
    }
}
echo "enter volts: ";
$volts = readline();
$objMobile = new MobileCharger($volts);
$adapter = new SocketAdapter();
$vol = $adapter->get3Vlots();
$objMobile->charge($vol);
