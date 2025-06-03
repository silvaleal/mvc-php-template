<?php 

function flash($name) {
    if(isset($_SESSION[$name])) {
        $message = $_SESSION[$name];
        unset($_SESSION[$name]);
        return $message;
    }
    }