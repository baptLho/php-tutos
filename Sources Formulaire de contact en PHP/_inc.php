<?php
session_start();

function dd($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

require 'class/Form.php';
require 'class/Validator.php';
