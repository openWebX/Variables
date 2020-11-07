<?php


namespace openWebX\Variables;


/**
 * Class Variable
 *
 * @package openWebX\Variables
 */
abstract class Variable {

    /**
     * @var
     */
    protected $value;

    /**
     * Variable constructor.
     *
     * @param null $value
     */
    public function __construct($value = null) {
        if ($value) {
            $this->set($value);
        }
    }

    /**
     * @return string
     */
    public function __toString() : string {
        return (string) $this->value;
    }

}