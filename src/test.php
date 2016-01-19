<?php

namespace \ajacques_quatral\test;

class Test 
{

    private $value;

    public function __construct($_value)
    {
        $this->value = $_value;
    }

    public function isBool()
    {
        return is_bool($this->value);
    }

    public function isInt()
    {
        return is_integer($this->value);
    }

    public function isFloat()
    {
        return is_float($this->value);
    }

    public function isObject()
    {
        return is_object($this->value);
    }

    public function isArray()
    {
        return is_array($this->value);
    }

    public function isSet()
    {
        return isset($this->value);
    }

    public function isNull()
    {
        return is_null($this->value);
    }

    public function isScalar()
    {
        return is_scalar($this->value);
    }

    public function isString()
    {
        return is_string($this->value);
    }
}
