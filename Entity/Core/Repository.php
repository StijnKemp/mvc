<?php

class Repository {
    function __construct() {
        //
    }

    public function Select($model) {
        $foreign_querys = array();

        foreach($model as $field) {
            if($field instanceof Model) {
                //
            } else if(is_array($field)) {
                //
            }
        }

        return new SelectQuery("SELECT * FROM {$model->table_name}");
    }
    
    public function Update($id) {
        return new UpdateQuery("SELECT ");
    }

    public function Delete($id) {

    }

    private function GetFields($model) {
        
    }
}