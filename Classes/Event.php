<?php

/**
 * class to interact with events
 */

class Event
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
}
