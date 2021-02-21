<?php

namespace App\Http\Controllers;

use App\Models\AppKey;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create(Request $req)
    {
    	AppKey::create([
    		'owner' => 'testing cron',
    		'app_code' => Str::random(30),
    	]);
    	return response()->json('ok');
    }
}
