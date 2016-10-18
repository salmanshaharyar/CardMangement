<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
	public function about()
	{
		$people =['Salman', 'Muhammad' ,' Shaharyar'];
		
		return view('about', compact('people'));
	}
	public function home()
	{
		return view('welcome');
	}
	
}
