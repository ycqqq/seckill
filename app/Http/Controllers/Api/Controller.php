<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use Illuminate\Support\Carbon;

class Controller extends BaseController
{
    public function kill()
    {
        if (\Cache::get('count') < 0) return 0;

        if (\Cache::decrement('count') >= 0) {
            return microtime(true) - LARAVEL_START;
        }

        return 0;
    }

    public function get()
    {
        return 'qyc:'.rand(0,100);
//        return \Cache::get('count');
    }

    public function set()
    {
        \Cache::put('count', 100, Carbon::tomorrow());

        return 'ok';
    }

    public function test()
    {
        return 1;
    }
}
