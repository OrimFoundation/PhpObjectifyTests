<?php

/**
 * Simple user class implementation for purpose of testing differences between class implementations
 * - using protected properties with implemented getters and setters
 */
class User
{

    protected $userId;

    protected $userName;

    protected $userPassword;

    protected $userRegistrationTs;

    protected $userActivationDateTime;


    public function setUserActivationDateTime($userActivationDateTime)
    {

        $this->userActivationDateTime = $userActivationDateTime;
    }

    public function getUserActivationDateTime()
    {

        return $this->userActivationDateTime;
    }

    public function setUserId($userId)
    {

        $this->userId = $userId;
    }

    public function getUserId()
    {

        return $this->userId;
    }

    public function setUserName($userName)
    {

        $this->userName = $userName;
    }

    public function getUserName()
    {

        return $this->userName;
    }

    public function setUserPassword($userPassword)
    {

        $this->userPassword = $userPassword;
    }

    public function getUserPassword()
    {

        return $this->userPassword;
    }

    public function setUserRegistrationTs($userRegistrationTs)
    {

        $this->userRegistrationTs = $userRegistrationTs;
    }

    public function getUserRegistrationTs()
    {

        return $this->userRegistrationTs;
    }

}

?>
