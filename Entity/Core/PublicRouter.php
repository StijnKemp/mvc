<?php

class PublicRouter {
    public static function Submit() {
        if(isset($_GET['url'])) {
            $url = explode("/", $_GET['url']);
            $slug = end($url);
            array_pop($url);

            $parent_slug = "NULL";            
            if(!empty($url)) {
                $parent_slug = join("/", $url);
            }

            $page = self::GetPageDirections($slug, $parent_slug);

            if($page) {
                $controller_name = "{$page->document_type}Controller";
                Load::Controller($controller_name);

                $controller = new $controller_name;
                $view_result = $controller->{$page->view}($page);

                Render::View($view_result);
            } else {
                echo "Page not found";
            }
        } else {
            // Default
        }
    }

    private function GetPageDirections($slug, $parent_slug) {
        $result = Database::Query("SELECT * 
            FROM ez_pages 
            WHERE slug = '{$slug}'
            AND parent_slug = '{$parent_slug}'
        ");

        if(!empty($result)) {
            return $result[0];
        }
    }
}