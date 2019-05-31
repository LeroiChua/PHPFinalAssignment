<?php

class Notification
{
    private $counter;
    private $hasNotification;
    
    public function __construct ($number)
    {
        $this->counter = $number;
        $this->hasNotification = false;
    }
    
    public function drawNotificationBox()
    {
        $this->setHasNotification();
        if (! $this->hasNotification)
        {
            return "<div style='border: 5px solid #aaa;'><p>{$this->counter}</p><div>";
        }
        else 
        {
            return "<div style='border: 5px solid #FF0000;'><p>{$this->counter}</p><div>";
        }
    }
    
    private function setHasNotification()
    {
        if ($this->counter == 0)
        {
            $this->hasNotification = false;
        }
        else
        {
            $this->hasNotification = true;
        }
    }
}


$aNotification = new Notification(2);
echo $aNotification->drawNotificationBox();

?>