<?php

namespace App\Helpers;

use League\Plates\Engine;

class View
{
    public static function page($page, $data = [], $hasWords = true)
    {
        $templates = new Engine(__DIR__ . '/../Views');

        if ($hasWords) {
            $file = PATH_MAIN . "/lang/" . USER_LANG . "/$page.json";
            $words = is_file($file) ? json_decode(file_get_contents($file)) : [];
        } else {
            $words = [];
        }

        $data["lang"] = $words;

        echo $templates->render($page, $data);
    }
}
