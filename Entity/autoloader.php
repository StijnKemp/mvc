<?php

class Load {
    public static function class($c) {
        require_once "classes/{$c}.php";
    }
}

Load::class("DataType");

$var = new DataType("Twitter account", "", "");
