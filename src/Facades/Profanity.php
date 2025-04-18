<?php

namespace Xavizera\Profanity\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Xavizera\Profanity\Profanity
 */
class Profanity extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Xavizera\Profanity\Profanity::class;
    }
}
