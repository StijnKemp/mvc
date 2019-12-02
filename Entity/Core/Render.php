<?php 

class Render {
    private static $layout_path = "Views/Layout/master.php";

    private static $view_result;

    public static function View($view_result) {
        if(file_exists(self::$layout_path)) {
            self::$view_result = $view_result;
            $content = file_get_contents(self::$layout_path);

            print_r($view_result);

            self::Eval($content);
        } else {
            exit("Layout not found");
        }
    }

    public static function Body() {
        if(file_exists(self::$view_result['view_path'])) {
            $content = file_get_contents(self::$view_result['view_path']);

            self::Eval($content);
        } else {
            exit("Template not found");
        }
    }

    private static function Eval(string $content) {
        $state = (object)self::$view_result['state'];
        $model = self::$view_result['model'];

        // do stuff

        eval(' ?>' . $content . '<?php ');
    }
}

