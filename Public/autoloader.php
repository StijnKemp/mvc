<?php

class Load {
    public static function Core($c) {
        require_once "../Entity/core/{$c}.php";
    }

    public static function Controller($c) {
        require_once "Controllers/{$c}.php";
    }
}


// Testing

Load::Core("PublicRouter");
Load::Core("Database");
Load::Core("Controller");
Load::Core("Render");

PublicRouter::Submit();