<?php

class Admin
{
    public function showDashboard()
    {
        echo 'Welcome to the admin panel.';
    }
}

function name()
{
    /**
 * @before  Admin->showDashboard()
 *
 */
    echo "name\n";
}
name();
