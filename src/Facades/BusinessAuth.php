<?php

namespace AntFoot\BusinessAuth\Facades;

use Illuminate\Support\Facades\Facade;

class BusinessAuth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'businessauth';
    }
}
