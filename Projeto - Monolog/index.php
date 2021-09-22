<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Projeto\Classes\Names;


class Hello
{
    public function say(string $msg)
    {
        if(str_contains($msg, 'Thomaz'))
            throw new Exception('Ops, não pode falar Th***z');
        
        return htmlentities($msg) . '<br>';
    }
}


$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/myLog.log', Logger::WARNING));

try{
    echo (new Hello)->say('Adalberto');
    (new Names)->listNames();
}catch(Exception $e){
    $log->error($e->getMessage());
}
