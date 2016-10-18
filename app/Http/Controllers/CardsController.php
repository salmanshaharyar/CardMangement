<?php

namespace App\Http\Controllers;




use App\Card;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controllers;


class CardsController extends Controller
{
    //
    public function index()
    {
    	$cards = Card::all();

    	return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        //Below line is an example of eager loading 
    	//$card = Card::with('notes.user')->find(1);
        $card->load('notes.user');
        //return $card;
    	//$card = Card::find($id);
    	return view('cards.show', compact('card'));
    }
}
