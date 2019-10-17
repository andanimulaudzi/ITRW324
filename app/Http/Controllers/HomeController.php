<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Order;
use App\Give;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	//$people = Customer::raw()->distinct('Region')->count('Region');
    	$people = Customer::raw()->distinct('Region');

    	$count = [];

    	foreach ($people as $reg) {
    		array_push($count, Customer::where('Region', '=', $reg)->count());
    	}
    	return view('welcome', compact('people', 'count'));
    }
}
