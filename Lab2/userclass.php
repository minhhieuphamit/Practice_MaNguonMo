<?php
require_once "helpers.php";

class User
{
    private $username;
    private $userEmail;
    private $userID;
    private $userStatus;

    public function __construct($newUser, $email)
    {
        $this->username = $newUser;
        $this->userEmail = $email;
        $this->userStatus = 1;
        $this->userID = GetNextUserID();
    }

    public function __destruct()
    {
        $this->username = NULL;
        $this->userEmail = NULL;
        $this->userStatus = NULL;
        $this->userID = NULL;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getUserEmail()
    {
        return $this->userEmail;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function getUserStatus()
    {
        return $this->userStatus;
    }

    public function setUserStatus($input)
    {
        if ($input > 1 || $input < 0) {
            return false;
        } else {
            $this->userStatus = $input;
            return true;
        }
    }
}

?>