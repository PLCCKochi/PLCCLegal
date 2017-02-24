<?php

namespace App\Http\Controllers\Render;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Libs\Data\Aggregator;

class Advocate extends Controller
{
    public function index()
    {
        return Aggregator::Build('kl.advocate.index', []);
    }
    public function detail($advID)
    {
        $advocateIQ = DB::table('advocate')->where('username', $advID)->get();
        if ($advocateIQ->count() != 0){
            return Aggregator::Build('kl.advocate.detail', $advocateIQ->first());
        }else{
            abort(404);
        }
    }
}