<?php

class Controller {
    protected function View($model = array()) {
        $calling_object = ($this->getCallingObject());
        return array(
            'view_path' => "Views/{$calling_object['controller']}/{$calling_object['view']}.php",
            'state' => $calling_object,
            'model' => $model
        );
    }

    private function getCallingObject() {
        $e = new Exception();
        $trace = $e->getTrace();

        return array(
            'controller' => str_replace("Controller", "", $trace[2]['class']),
            'view' => $trace[2]['function']
        );
    }
}