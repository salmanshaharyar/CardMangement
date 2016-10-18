<?php

namespace App\Http\Controllers;


use App\Note;
use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
    //
    public function store(Request $request, Card $card)
    {
    	//1
    	//$note = new Note;
    	//$note->body = $request->body;
    	//$card->notes()->save($note);


    	//2
    	//$note = new Note(['body' => $request->body]);
    	//$card->notes()->save($note);

    	//3
    	//$card->notes()->save(
    	//	new Note(['body' => $request->body])
    	//	);

    	//4
    	//$card->notes()->create([
    	//	'body' => $request->body
    	//	]);

    	//5
    	//$card->notes()->create($request->all());

    	//6
        $this->validate($request, [
            'body' => 'required|min:10'

            ]);

        $note = new Note($request->all());

    	$card->addNote($note, 1);

    	//Create function in Card model
    	/*
		pubic function addNote(Note $note)
		{
			return $this->notes()->save($note);
		}

    	*/

    	return back();
    }

    public function edit(Note $note)
    {
    	return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
    	$note->update($request->all());
    	$request->all();
    	return back();
    }
}
