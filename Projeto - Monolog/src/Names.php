<?php

declare(strict_types=1);

namespace Projeto\Classes;

class Names
{
    private const NAMES = [
        'Thomaz',
        'Roberto',
        'Mario',
        'Aline'
    ];
    
    public function listNames()
    {
        foreach(self::NAMES as $name){
            echo $name . '<br>';
        }
    }
}