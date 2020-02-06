<?php
class Admin
{
   public function showDashboard()
   {
       echo 'Welcome to the admin panel.';
   }
}

function restrictAccessAdvice()
{
   if ($_SESSION['user_type'] !== 'admin') {
       throw new Exception('Access denied!');
   }
   aop_add_before('Admin->showDashboard()', 'restrictAccessAdvice');
}

$_SESSION['user_type'] = 'user';
$admin = new Admin();

try {
   $admin->showDashboard();
} catch (Exception $e) {
   echo $e->getMessage();
}
?>