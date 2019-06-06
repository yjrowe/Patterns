<?php

$event = new Event();
$event->add(new Observer1());
$event->add(new Observer2());
$event->trigger();