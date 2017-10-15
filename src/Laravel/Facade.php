<?php

/*
 * This file is part of the wuyumin/file2base64.
 * (c) Yumin Wu
 * Github: https://github.com/wuyumin
 */

namespace File2base64\Laravel;

use File2base64\File2base64;

class Facade extends \Illuminate\Support\Facades\Facade
{
    public static function getFacadeAccessor()
    {
        return File2base64::class;
    }
}
