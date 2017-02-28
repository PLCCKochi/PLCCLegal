<?php

namespace App\Libs\Data;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Aggregator
{
    public static function Build($view, $model)
    {
        $testimonials = DB::table('testimonials')->get();
        $advocates = DB::table('advocate')->get();
        $settings = DB::table('settings')->get();
        $services = DB::table('services')->get();
        $clients = DB::table('clients')->get();
        $tweets = DB::table('tweets')->get();
        $posts = DB::table('posts')->get();
        foreach ($testimonials as $testimonial) {
            foreach ($clients as $client) {
                if ($client->id == $testimonial->client_id){
                    $testimonial->company = $client->company;
                    $testimonial->category = $client->category;
                    $testimonial->post = $client->post;
                    $testimonial->poc = $client->poc;
                    $testimonial->pocpic = $client->pocpic;
                }
            }
        }
        foreach ($posts as $post) {
            foreach ($advocates as $advocate) {
                if ($post->id == $post->advocate_id){
                    $post->advocate_name = $advocate->name;
                    $post->advocate_username = $advocate->username;
                }
            }
        }
        $parsedsettings = [];
        foreach ($settings as $setting) {
            $parsedsettings[$setting->key] = $setting->value;
        }
        return view($view,[
                'model' => $model,
                'settings' => (object) $parsedsettings,
                'advocates' => $advocates,
                'services' => $services,
                'clients' => $clients,
                'posts' => $posts,
                'tweets' => $tweets,
                'testimonials' => $testimonials
            ]);
    }
}