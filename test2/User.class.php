<?php

/**
 * Simple user class implementation for purpose of testing differences between class implementations
 * - using protected properties with magic getters and setters without testing
 */
class User
{

    protected $userId;

    protected $userName;

    protected $userPassword;

    protected $userRegistrationTs;

    protected $userActivationDateTime;

    /**
     * Method setting up properties with given data
     *
     * @param array $data
     *
     * @return bool
     */
    public function load(array $data)
    {

        $this->__set('userId', $data['userId']);

        $this->__set('userName', $data['userName']);
        $this->__set('userPassword', $data['userPassword']);
        $this->__set('userRegistrationTs', $data['userRegistrationTs']);
        $this->__set('userActivationDateTime', $data['userActivationDateTime']);

        return true;

    }

    /**
     * @param string $propertyName
     *
     * @return mixed
     */
    public function __get($propertyName)
    {

        return $this->$propertyName;
    }

    /**
     * @param string $propertyName
     * @param mixed  $propertyValue
     *
     * @return bool
     */
    public function __set($propertyName, $propertyValue)
    {

        $this->$propertyName = $propertyValue;
        return true;
    }
}

?>
