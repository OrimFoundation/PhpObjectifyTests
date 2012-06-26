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
