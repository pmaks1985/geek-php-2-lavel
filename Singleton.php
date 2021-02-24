<?php

trait getInstance
{
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

}

class Singleton
{
    protected static $_instance;

    private function __construct()
    {

    }

    use getInstance;
}