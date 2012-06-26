<?php

/**
 * Simple user class implementation for purpose of testing differences between class implementations
 * - using protected properties implemented as object instances
 */
class User
{

    protected $userId;

    protected $userName;

    protected $userPassword;

    protected $userRegistrationTs;

    protected $userActivationDateTime;

    public function __construct()
    {

        $this->userId                 = new Integer();
        $this->userName               = new String();
        $this->userPassword           = new String();
        $this->userRegistrationTs     = new String();
        $this->userActivationDateTime = new String();

    }


    public function setUserActivationDateTime($userActivationDateTime)
    {

        $this->userActivationDateTime->setValue($userActivationDateTime);
    }

    public function getUserActivationDateTime()
    {

        return $this->userActivationDateTime->getValue();
    }

    public function setUserId($userId)
    {

        $this->userId->setValue($userId);
    }

    public function getUserId()
    {

        return $this->userId->getValue();
    }

    public function setUserName($userName)
    {

        $this->userName->setValue($userName);
    }

    public function getUserName()
    {

        return $this->userName->getValue();
    }

    public function setUserPassword($userPassword)
    {

        $this->userPassword->setValue($userPassword);
    }

    public function getUserPassword()
    {

        return $this->userPassword->getValue();
    }

    public function setUserRegistrationTs($userRegistrationTs)
    {

        $this->userRegistrationTs->setValue($userRegistrationTs);
    }

    public function getUserRegistrationTs()
    {

        return $this->userRegistrationTs->getValue();
    }

}

?>
