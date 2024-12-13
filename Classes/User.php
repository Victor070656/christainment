<?php

/**
 * class to interact with the users table
 * 
 */
class User
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function register($firstname, $lastname, $email, $password)
    {
        $checkEmail = $this->conn->query("SELECT * FROM `users` WHERE `email` = '$email'");
        if ($checkEmail->num_rows > 0) {
            return "duplicate";
        }
        $register = $this->conn->query("INSERT INTO `users` (`firstname`,`lastname`,`email`,`password`) VALUES ('$firstname','$lastname','$email','$password')");
        if ($register) {
            return "success";
        } else {
            return "failed";
        }
    }

    public function login($email, $password)
    {
        $checkUser = $this->conn->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
        $res = [];
        if ($checkUser->num_rows > 0) {
            $user = $checkUser->fetch_assoc();
            $res["status"] = true;
            $res["data"] = $user;
            return $res;
        } else {
            $res["status"] = false;
            return $res;
        }
    }


    public function getUser($id)
    {
        $checkUser = $this->conn->query("SELECT * FROM `users` WHERE `id` = '$id'");
        $res = [];
        if ($checkUser->num_rows > 0) {
            $res["status"] = true;
            $res["data"] = $checkUser->fetch_assoc();
            return $res;
        } else {
            $res["status"] = false;
            return $res;
        }
    }
}
