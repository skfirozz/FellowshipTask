<?php
class MyService
{
    public function doAdminStuff1()
    {
        echo "calling doAdmin1";
    }
    public function doAdminStuff2()
    {
        echo "calling doAdmin2";
    }
}
function adviceForDoAdmin()
{
    if ((!isset($_SESSION['user_type'])) || ($_SESSION['user_type'] !== 'admin')) {
        throw new Exception('Sorry, you should be an admin to do this');
    }
}
// aop_add_before('MyServices->doAdmin*()', 'adviceForDoAdmin');
