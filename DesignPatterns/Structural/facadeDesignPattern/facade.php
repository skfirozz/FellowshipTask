<?php
interface Hotel
{
    public function getMenu();
}
class VegMenu
{

}
class NonVegMenU
{

}
class VegAndNonVeg
{

}
class VegRestaurent implements Hotel
{
    public function getMenu()
    {
        $menu = new VegMenu();
        return $menu;
    }
}
class NonVegRestaurent implements Hotel
{
    public function getMenu()
    {
        $menu = new NonVegMenU();
        return $menu;
    }
}
class VegAndNonVegRestaurent implements Hotel
{
    public function getMenu()
    {
        $menu = new VegAndNonVeg();
        return $menu;
    }
}
class HotelMenu
{
    public function getVegMenu()
    {
        $vegMenu = new VegRestaurent();
        $menu = $vegMenu->getMenu();
        echo "Here is Veg menu of this Hotel\n";
    }
    public function getNonvegMenu()
    {
        $nonVegMenu = new NonVegRestaurent();
        $menu = $nonVegMenu->getMenu();
        echo "Here is Non Veg Menu\n";
    }
    public function getVegNonVegMenu()
    {
        $vegNonVegMenu = new VegAndNonVegRestaurent();
        $menu = $vegNonVegMenu->getMenu();
        echo "Here is Veg and Non Veg Menu of this Hotel\n";
    }
}
function ready()
{
    $objHotelMenu = new HotelMenu();
    echo "enter 1.Veg Menu\n2.Non Veg Menu\n3.Veg and Non Veg Menu\n4.exit\n";
    $n = readline();
    switch ($n) {
        case 1:
            $vegMenu = $objHotelMenu->getVegMenu();
            ready();
            break;
        case 2:
            $nonVegMenu = $objHotelMenu->getNonvegMenu();
            ready();
            break;
        case 3:
            $vegNonVegMenu = $objHotelMenu->getVegNonVegMenu();
            ready();
            break;
        default:
            echo "THANK YOU\n";
            break;
    }
}
ready();
