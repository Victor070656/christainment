<?php

/**
 * class to interact with blog posts
 */

class Blog
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
}
