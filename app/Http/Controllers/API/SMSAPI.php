<?php 

namespace App\Http\Controllers\API;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Libs\Data\Aggregator;

class SMSUsersAPI extends Controller {
	public function user()
    {
        $SMSUsers = DB::table('sms')->get();
        return $SMSUsers;
    }	
    public function reps()
    {
        $SMSReps = DB::table('sms_rep')->get();
        return $SMSReps;
    }	
}