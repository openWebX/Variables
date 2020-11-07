<?php


namespace openWebX\Variables;

use openWebX\Variables\Functions\Math;

class Variable_Integer extends Variable {

    use Math;

    /**
     * Variable_Integer constructor.
     *
     * @param int|null $value
     */
    public function __construct(?int $value = null) {
        parent::__construct($value);
    }

    /**
     * @return int|null
     */
    public function get() : ?int {
        return $this->value;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function set(int $value) : self {
        $this->value = $value;
        return $this;
    }

}