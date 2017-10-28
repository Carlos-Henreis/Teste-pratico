<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Http\Requestssss;
use App\Http\Requests\TravelRequest;

use App\Http\Requests;
use App\Travel​;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function index () {
    	return view('Home');
    }

    public function store (TravelRequest $request)
	{
		$input = $request->all();
		Travel​::create($input); 
		return view('Sucess');
	}
}
