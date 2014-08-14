<?php
class Example
{
    public function __construct()
    {
        $this->version = '1.0.0';
    }

    public function print_version()
    {
        print $this->version;
    }
}
