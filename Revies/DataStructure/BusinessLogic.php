<?php
class BusinessLogic
{
    public $head;
    public function __construct()
    {
        $this->head = null;
    }
    public function insert($data)
    {
        $newNode = new ListNode($data);
        if ($this->head == null) {
            $this->head = &$newNode;
        } else {
            $temp = $this->head;
            while ($temp != null) {
                if ($temp->next == null) {
                    $temp->next = &$newNode;
                    break;
                }
                $temp = $temp->next;
            }
        }
    }
    public function delete()
    {
        $count = 0;
        $temp = $this->head;
        while ($temp != null) {
            if ($temp->next == null) {
                break;
            } else if ($count / 2 == 0 && $temp->next->next != null) {
                $temp->next = $temp->next->next;
            }

            $temp = $temp->next;
        }
    }
    public function display()
    {
        $temp = $this->head;
        while ($temp != null) {
            echo $temp->data, " ";
            $temp = $temp->next;
        }
        echo "\n";

    }
}
