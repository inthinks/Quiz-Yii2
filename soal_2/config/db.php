<?php

function dd($var){
    if(is_object($var) || is_array($var)){
        echo '<pre>';
        print_r($var);
        die;
    } else if(is_bool($var)) {
        var_dump($var); die;
    } else {
        echo $var; die;
    }
}

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=kuis',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
