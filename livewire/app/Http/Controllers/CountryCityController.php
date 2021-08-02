<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryCityController extends Controller
{
    public function getCountryCity()
	{
		return view('country-city');
	}
}
