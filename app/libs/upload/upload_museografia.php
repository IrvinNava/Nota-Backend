<?php
ini_set('memory_limit', -1);

setlocale(LC_CTYPE, 'es');
date_default_timezone_set('America/Mexico_City');

session_start();

require dirname(__FILE__) . '/ImgPicker.php';

$options = array(
    'upload_dir' => dirname(__FILE__).'/../../../public/img/museografia/',
    'upload_url' => '',
    'accept_file_types' => 'png|jpg|jpeg|gif',
    'mkdir_mode' => 0777,
    'max_file_size' => null,
    'min_file_size' => 1,
    'max_width'  => null,
    'max_height' => null,
    'min_width'  => 1,
    'min_height' => 1,
    'versions' => array(
        'museografia' => array(
            'max_width' => 1920,
            'max_height' => 1080
        ),
        'tmb' => array(
            'crop' => true,
            'max_width' => 420,
            'max_height' => 420
        )
    ),

    'load' => function($instance) {
        //return 'avatar.jpg';
    },

    'delete' => function($filename, $instance) {
        return true;
    },

    'upload_start' => function($image, $instance) {
        $fecha = date("Y-m-d_h-i-s", time());
        $image->name = '~producto_'.$fecha.'.' . $image->type;
    },

    'upload_complete' => function($image, $instance) {
    },

    'crop_start' => function($image, $instance) {
        $titulo = $_POST['data']['titulo'];
        $fecha = date('Ymd_his', time());
        $archivo = to_slug($titulo.'_museoamparo_puebla_'.$fecha);
        $image->name = $archivo.'.'.$image->type;
    },

    'crop_complete' => function($image, $instance) {
        if(file_exists(dirname(__FILE__).'/../../../public/img/museografia/'.$image->name)){
            unlink(dirname(__FILE__).'/../../../public/img/museografia/'.$image->name);
        }
    }
);

function to_slug($string){
    $table = array(
        'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
        'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
        'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
        'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
        'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
        'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b',
        'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', ' ' => '-', '/' => '-'
    );
    $text2url = strtolower(strtr($string, $table));
    $text2url = preg_replace('#[^0-9a-z\/]+#i', " ", $text2url);
    $text2url = str_replace(' ','-',trim($text2url));
    return $text2url;
}

new ImgPicker($options);