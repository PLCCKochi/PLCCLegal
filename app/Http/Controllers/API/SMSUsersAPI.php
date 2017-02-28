<?php 

namespace App\Http\Controllers\API;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Libs\Data\Aggregator;

class SMSUsersAPI extends Controller {
	public function json()
    {
        $SMSUsers = DB::table('sms')->get();
        return $SMSUsers;
    }	
}