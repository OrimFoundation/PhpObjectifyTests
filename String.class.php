<?php

/**
 * Class used for implementing string property inside class
 */
class String
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
