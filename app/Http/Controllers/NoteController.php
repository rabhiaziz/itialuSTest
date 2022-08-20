<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    //

    public function index()
    {
        return view('notes/my-notes');
    }

    public function create()
    {
        return view('notes/create');
    }

    public function store(Request $request)
    {
        dump($request->all());
    }

    public function show($id)
    {
        return view('notes/show');

    }

    public function destroy($id)
    {
        dump($id);
    }
}
