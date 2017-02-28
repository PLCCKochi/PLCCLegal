<?php

namespace App\Http\Controllers\Render;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Libs\Data\Aggregator;

class Misc extends Controller
{
    public function contact()
    {
        return Aggregator::Build('kl.misc.contact', []);
    }
    public function error()
    {
        return Aggregator::Build('kl.misc.error', []);
    }
    public function consult()
    {
        return Aggregator::Build('kl.misc.consult', []);
    }
}