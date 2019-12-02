<?php

class PageTree extends Model {
    public $title;
    public $slug;
    public $page_type;
    public $template;

    private function SetTypes() {
        $this->title = new TextString();
        $this->slug = new TextString();
        $this->page_type = new TextString();
        $this->template = new TextString();
    }
}

