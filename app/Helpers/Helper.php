<?php
namespace App\Helpers;


class Helper {
    public static function human_filesize($size, $precision = 2){
        $units = ['B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
        $step = 1024;
        $i = 0;
        while (($size / $step) > 0.9) {
            $size = $size / $step;
            $i++;
        }
        return round($size, $precision) . $units[$i];
    }

    public static function clean_string($string){
        $table = [
            'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
            'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
            'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
            'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b',
            'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', ' ' => '-', '/' => '', '(' => ' ', ')' => ' '
        ];

        $text_sanitize = str_replace('</p>', '</p>&nbsp;', $string);
        $text_sanitize = strip_tags(strtolower(strtr(html_entity_decode($text_sanitize), $table)));
        $text_sanitize = preg_replace('#[^_0-9a-z\/^.]+#i', " ", $text_sanitize);
        $text_sanitize = str_replace('.','',trim($text_sanitize));
        return $text_sanitize;
    }

    public static function to_slug($str){
        $table = array(
            'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
            'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
            'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
            'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b',
            'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', ' ' => '-'
        );
        $text2url = strtolower(strtr($str, $table));
        $text2url = preg_replace('#[^0-9a-z\/\_]+#i', " ", $text2url);
        $text2url = str_replace(' ','-',trim($text2url));
        return $text2url;
    }

    public static function to_link($str){
        return url(Helpers::to_slug($str));
    }

   public static function getList($list){
        $autores = implode(', ', $list->map(function ($autor){ return $autor->nombre .' '.$autor->apellidos; })->toArray());
        $ultimaComa = strrpos($autores, ",");
        if($ultimaComa!=0)
            $cadenaAutores = substr_replace($autores,' y ',$ultimaComa, 1);
        else
            $cadenaAutores = $autores;
        return $cadenaAutores;
    }

    public static function getProfessionList($list){
        $tiposAutoresClasificados = [];
        $cadenaAutores = '';
        foreach ($list as $autor) {
            if(!in_array($autor->tipo_id, $tiposAutoresClasificados)){
                array_push($tiposAutoresClasificados, $autor->tipo_id);
                 $cadenaAutores .= \App\AutoresTipos::getNombre($autor->tipo_id) .': '.$autor->nombre .' '.$autor->apellidos;
                if($list->count() > 1 )
                   $cadenaAutores .= '; ';
            }
            else
                $cadenaAutores .= ' '.$autor->nombre .' '.$autor->apellidos.'; ';
        }
        $autores = str_replace(";", ",", trim($cadenaAutores));
        return rtrim($autores, ',');
    }

    public static function getYoutubeCode($url){
        preg_match_all("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $url, $match);
        return (count($match)) ? $match[0][0] : null;
    }

    public static function send_email($emails_to, $subject, $template, $keystoreplace = null, $attachments = null, $from = null, $emails_cc = null, $emails_bcc = null){
        try{
                
                $sendgrid = new \SendGrid("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");
                $email = new \SendGrid\Mail\Mail();
                if(!empty($from))
                    $email->setFrom($from['email'], $from['name']);
                else
                    $email->setFrom('contact@notainclusion.com', '[Nota Platform] - Ingrid Harb');
                foreach ($emails_to as $to)
                    $email->addTo($to);
                if(!empty($keystoreplace)){
                    $template_html = file_get_contents(URL_ROOT . "emails/$template.html");
                    foreach ($keystoreplace as $key => $content)
                        $template_html = str_replace("@$key@", $content, $template_html);
                }

                $email->setSubject($subject);
                $email->addContent('text/html', $template_html);
                $response = $sendgrid->send($email);
                return ['status' => true, 'message' => $response];
           
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => $exception->getMessage()];
        }
        return $response;
    }
}
