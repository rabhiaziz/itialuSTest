<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Note;
use Illuminate\Http\Request;
use Auth;

class NoteController extends Controller
{
    //

    public function index()
    {
        $notes = Note::where('user_id', Auth::user()->id)->get();
        return view('notes/my-notes', ['notes' => $notes]);
    }

    public function create()
    {
        return view('notes/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'note' => 'required',
        ], [
            'note.required' => 'the note text is required',
        ]);

        Note::create([
            'note' => $request->note,
            'is_public' => ($request->is_public) ? true : false,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('home');
    }

    public function show($id)
    {
        $note = Note::findByHashidOrFail($id);

        if(!$note->is_public && $note->user_id !== Auth::user()->id){
            return redirect()->route('home');
        }

        return view('notes/show', ['note' => $note]);
    }

    public function storeComment(Request $request, $noteId)
    {
        $note = Note::findByHashidOrFail($noteId);
        $request->validate([
            'comment' => 'required',
        ], [
            'comment.required' => 'the comment text is required',
        ]);

        Comment::create([
            'comment' => $request->comment,
            'note_id' => $note->id,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->back();

    }

    public function destroy($id)
    {
        $note = Note::findByHashidOrFail($id);
        $note->delet();
        return redirect()->route('my-notes');

    }
}
