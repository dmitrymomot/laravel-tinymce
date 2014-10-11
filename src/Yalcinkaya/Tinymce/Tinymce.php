<?php namespace Yalcinkaya\Tinymce;

Use URL;


class Tinymce {

    protected static $instance;
    private static $defaultOptions = [
        "selector" => "textarea",
        "valid_elements" => "*[*]",
        "language" => "tr_TR",
    ];
    private static function replace($string)
    {
        $string = preg_replace('/\s+/', ' ', $string);
        $string = trim($string);
        return $string;
    }
        public function make($name, array $args)
    {
        if($name == 'init'){
            $options = array_merge(self::$defaultOptions,$args);
            $options = array_merge(self::$defaultOptions,$args);
            $settings = '';
            foreach($options as $key => $value){
                $settings .= $key.':'."'".self::replace($value)."', \n";
            }
            $html = '';
            $html .= '<script type="text/javascript" src="'. URL::to('/packages/yalcinkaya/tinymce/tinymce.min.js').'"></script>
                    <script type="text/javascript">
                    tinymce.init({
                            '.$settings.'
                        });
                            </script>
                        ';
            return $html;
        }else{
            return false;
        }
    }


    public static function __callStatic($name, $args)
    {
        $args = empty($args) ? [] : $args[0];

        $instance = static::$instance;
        if ( ! $instance) $instance = static::$instance = new static;

        return $instance->make($name, $args);
    }

}
