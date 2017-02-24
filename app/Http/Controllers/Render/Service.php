<?php

namespace App\Http\Controllers\Render;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Libs\Data\Aggregator;

class Service extends Controller
{
    public function index()
    {
        return Aggregator::Build('kl.service.index', []);
    }
    public function detail($servID)
    {

        $serviceIQ = DB::table('services')->where('id', $servID)->get();
        if ($serviceIQ->count() != 0){
            return Aggregator::Build('kl.service.detail', $serviceIQ->first());
        }else{
            abort(404);
        }
    }
}