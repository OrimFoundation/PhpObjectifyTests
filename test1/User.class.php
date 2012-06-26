<?php

/**
 * Simple user class implementation for purpose of testing differences between class implementations
 * - using public properties
 */
class User
{

    public $userId;

    public $userName;

    public $userPassword;

    public $userRegistrationTs;

    public $userActivationDateTime;

    /**
     * Method setting up properties with given data
     *
     * @param array $data
     *
     * @return bool
     */
    public function load(array $data)
    {

        $this->userId                 = $data['userId'];
        $this->userName               = $data['userName'];
        $this->userPassword           = $data['userPassword'];
        $this->userRegistrationTs     = $data['userRegistrationTs'];
        $this->userActivationDateTime = $data['userActivationDateTime'];

        return true;

    }
}

?>
