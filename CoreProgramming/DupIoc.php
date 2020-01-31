<?php
class EmailNotifier
{
    public function notify()
    {
        echo "Sending  payment  notification via email\n";
    }
}
class Billing 
{
    protected $notifier;
    public function __construct(EmailNotifier $notifier)
    {
        $this->notifier = $notifier;
    }
    public function pay()
    {
        $this->notifier->notify();
    }
}
$notifier = new EmailNotifier();
$biller = new Billing($notifier);
$biller->pay();
?>