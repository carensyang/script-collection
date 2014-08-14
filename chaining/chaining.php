<?php

class StrLib
{
    private $_value;

    public function __construct($string) 
    {
        $this->_value = $string;
    }

    public function trim($char_list = ' ')
    {
        $this->_value = trim($this->_value, $char_list);
    
        return $this;
    }

    public function length()
    {
        return strlen($this->_value);
    }

    public function __toString()
    {
        return $this->_value;
    }

}

$str = new StrLib('abcd ');
print $str->length();
print $str->trim()->length();
