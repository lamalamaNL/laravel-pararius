<?php

namespace LamaLama\Pararius;

use Illuminate\Support\Facades\Facade;

class ParariusFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pararius';
    }
}
