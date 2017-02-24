<?php

namespace App\Http\Controllers\Render;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Libs\Data\Aggregator;

class Client extends Controller
{
    public function index()
    {
        return Aggregator::Build('kl.client.index', []);
    }
    public function testimonial()
    {
    	$Clients = DB::table('clients')->get();
    	$Testimonials = DB::table('testimonials')->get();
    	foreach ($Testimonials as $Testimonial) {
    		foreach ($Clients as $Client) {
    			if ($Client->id == $Testimonial->client_id){
    				$Testimonial->company = $Client->company;
                    $Testimonial->category = $Client->category;
                    $Testimonial->post = $Client->post;
                    $Testimonial->poc = $Client->poc;
                    $Testimonial->pocpic = $Client->pocpic;
                }
    		}
    	}
        return Aggregator::Build('kl.client.testimonial', $Testimonials);
    }
}