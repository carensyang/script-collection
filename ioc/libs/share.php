<?php
class Share
{
    public function __construct()
    {
        $this->version = '2.0.0';
    }

    public function print_version()
    {
        print $this->version;
    }
}
