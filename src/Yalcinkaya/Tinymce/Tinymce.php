<?php namespace Yalcinkaya\Tinymce;

Use URL;


class Tinymce {

    protected static $instance;

    public function make($name, array $args)
    {
        if($name == 'init'){

            $html = '';
            $html .= '<script type="text/javascript" src="'. URL::to('/packages/yalcinkaya/tinymce/tinymce.min.js').'"></script>
                    <script type="text/javascript">
                    tinymce.init({
                            selector: "textarea",
                            valid_elements :"*[*]",
                            plugins: [
                                "advlist autolink lists link image charmap print preview anchor",
                                "searchreplace visualblocks code fullscreen",
                                "insertdatetime media table contextmenu paste" // jbimages
                            ],
                            height : "350px",
                            language : "tr_TR",

                            remove_script_host: false,

                            forced_root_block : "",
                            force_br_newlines : true,
                            force_p_newlines : true,



                            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",



                            relative_urls: false
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
