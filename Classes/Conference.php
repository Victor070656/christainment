<?php

/**
 * class to interact with conferences
 */

class Conference
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
}
