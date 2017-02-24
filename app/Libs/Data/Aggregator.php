<?php

namespace App\Libs\Data;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Aggregator
{
    public static function Build($view, $model)
    {
        $advocates = DB::table('advocate')->get();
        $settings = DB::table('settings')->get();
        $services = DB::table('services')->get();
        $clients = DB::table('clients')->get();
        $tweets = DB::table('tweets')->get();
        $posts = DB::table('posts')->get();
        $parsedsettings = [];
        foreach ($settings as $setting) {
            $parsedsettings[$setting->key] = $setting->value;
        }
        return view($view,[
                'model' => $model,
                'settings' => $parsedsettings,
                'advocates' => $advocates,
                'services' => $services,
                'clients' => $clients,
                'posts' => $posts,
                'tweets' => $tweets,
            ]);
    }
}