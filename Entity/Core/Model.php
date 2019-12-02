<?php

abstract class Model {

    function __construct($init = true) {
        if($init === true) {
            $this->Init();
        }
    }

    private function Init() {
        $this->SetTypes();
    }

    abstract function SetTypes();
}