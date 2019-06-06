<?php

class Event
{
    protected $observers = [];

    public function add(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function handle()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function trigger()
    {
        $this->handle();
    }
}