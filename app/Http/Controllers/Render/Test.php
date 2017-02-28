<?php

namespace App\Http\Controllers\Render;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Libs\Data\Aggregator;

class Test extends Controller
{
    public function index()
    {
        return Aggregator::Build('kl.test.index', []);
    }
}