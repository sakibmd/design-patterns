<?php

class Singleton{
    static $instance;
    function __construct()
    {
        echo "New Instance Created <br>";
    }

    static function getInstance(){
        if(!self::$instance){
            self::$instance = new Singleton();
        }else{
            echo "Old Instance Supplied <br>";
        }
        return self::$instance;
    }
}

$sn1 = Singleton::getInstance();
$sn2 = Singleton::getInstance();
$sn3 = Singleton::getInstance();
$sn4 = Singleton::getInstance();

//protect us to create multiple instance which can save our memory space