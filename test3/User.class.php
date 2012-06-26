<?php

/**
 * Simple user class implementation for purpose of testing differences between class implementations
 * - using protected properties with magic getters and setters with testing if property exists
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

        if (property_exists($this, $propertyName)) {
            return $this->$propertyName;
        }
        return null;
    }

    /**
     * @param string $propertyName
     * @param mixed  $propertyValue
     *
     * @return bool
     */
    public function __set($propertyName, $propertyValue)
    {

        if (property_exists($this, $propertyName)) {
            $this->$propertyName = $propertyValue;
            return true;
        }
        return false;
    }
}

?>
