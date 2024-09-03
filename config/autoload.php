<?php 

class Autoloader 
{
    public static function register() {
        spl_autoload_register(function ($class) {
            $path = lcfirst(str_replace("\\", "/", $class) . '.php');

            if (file_exists($path)) {
                require $path;
                return true;
            } 

            return false;
        });
    }
}

Autoloader::register();

