<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    public function index()
    {
        $notes = Note::query()->get();
      return view('index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(NoteRequest $request)
    {
        $note = $request->user()->notes()->create($request->validated());
        return redirect()->route('notes.show', $note->id);
    }

    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }
    public function edit(Note $note)
    {
        $this->authorize('update', $note);
        return view('notes.edit', compact('note'));
    }

    public function update(NoteRequest $request, Note $note)
    {
        $this->authorize('update', $note);
        $note->update($request->validated());
        return redirect()->route('notes.show', $note->id);
    }

    public function destroy(Note $note)
    {
        $this->authorize('delete', $note);
        $note->delete();
        return redirect()->route('notes.index');
    }

}
