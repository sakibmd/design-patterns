<?php

class Singleton{
    static $instance;
    function __construct()
    {
        echo "New Instancce Created <br>";
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

//protect us to create multiple instance which can save our memory space