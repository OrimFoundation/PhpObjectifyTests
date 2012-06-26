<?php

/**
 * Class used for implementing integer property inside class
 */
class Integer
{

    protected $value;

    /**
     * Simple setter
     *
     * @param $value
     *
     * @return bool
     */
    public function setValue($value)
    {

        $this->value = $value;

        return true;
    }

    /**
     * Simple getter
     *
     * @return mixed
     */
    public function getValue()
    {

        return $this->value;
    }
}

?>
