<?php 

namespace App\Helpers;

class Validate {
    public static function action($fields, $rules) {
        $result = [];

        foreach ($rules as $key => $value) {
            switch ($value) {
                case 'string':
                    $result['key'] = strip_tags($fields[$key]);
                    break;
                
                default:
                    break;
            }
        }

        return $result;
    }
}

?>