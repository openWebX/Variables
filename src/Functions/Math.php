<?php


namespace openWebX\Variables\Functions;


use openWebX\Variables\Variable;

trait Math {

    public function abs() : self {
        $this->value = abs($this->value);
        return $this;
    }

    public function sqrt() : self {
        $this->value = sqrt($this->value);
        return $this;
    }

}