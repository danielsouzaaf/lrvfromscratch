<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
//        $note = new Note;
//        $note->body = $request->body;
//        $card->notes()->save($note);
        $card->addNote(new Note(
            ['body' => $request->body]
        ));
        return back();
    }
}
