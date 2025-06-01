<?php 

namespace App\Helpers;

class Validate {
    public static function action($fields, $rules) {
        $result = [];

        foreach ($rules as $key => $value) {
            switch ($value) {
                case 'string':
                    $result[$key] = filter_var($key, FILTER_SANITIZE_STRING);
                    break;

                case 'email':
                    $result[$key] = filter_var($key, FILTER_SANITIZE_EMAIL);
                    break;
                    
                case 'float':
                    $result[$key] = filter_var($key, FILTER_SANITIZE_NUMBER_FLOAT);
                    break;
                    
                case 'int':
                    $result[$key] = filter_var($key, FILTER_SANITIZE_NUMBER_INT);
                    break;
                
                default:
                    break;
            }
        }

        return $result;
    }
}

?>