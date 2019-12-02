<?php

class PageTypeBase extends Model {
    public $page_id;

    private function SetTypes() {
        $this->page_id = new PageTree();
    }
}