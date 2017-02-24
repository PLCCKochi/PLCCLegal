<?php

namespace App\Http\Controllers\Render;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Libs\Data\Aggregator;

class Post extends Controller
{
    public function index()
    {
        return Aggregator::Build('kl.blog.index', []);
    }
    public function detail($postID)
    {

        $postIQ = DB::table('posts')->where('id', $postID)->get();
        if ($postIQ->count() != 0){
            return Aggregator::Build('kl.blog.post', $postIQ->first());
        }else{
            abort(404);
        }
    }
}