<?php

/**
 * class to interact with News posts
 */

class News
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
}
