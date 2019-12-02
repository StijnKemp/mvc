<?php

class HomeController extends Controller {
    public function HomePage($page) {

        return $this->View($page);
    }
}