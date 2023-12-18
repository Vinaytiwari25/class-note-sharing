<?php

namespace App\Http\Controllers;
use App\Models\Note;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    // Index method to display all notes
    public function index()
    {
        // Retrieve all notes from the database
        $notes = Note::all();

        // Pass notes to the view for display
        return view('notes.index', compact('notes'));
    }

    // Show method to display a single note
    public function show(Note $note)
    {
        // Pass the selected note to the view for display
        return view('notes.show', compact('note'));
    }

    // Create method to show the form for creating a new note
    public function create()
    {
        // Show the create form
        return view('notes.create');
    }

    // Store method to store a newly created note in the database
    public function store(Request $request)
    {
        // Validate the input from the form
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'file_path' => 'required|string',
        ]);

        // Create a new note in the database
        Note::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('notes.index')->with('success', 'Note created successfully.');
    }

    // Edit method to show the form for editing a note
    public function edit(Note $note)
    {
        // Show the edit form with the selected note
        return view('notes.edit', compact('note'));
    }

    // Update method to update the specified note in the database
    public function update(Request $request, Note $note)
    {
        // Validate the input from the form
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'file_path' => 'required|string',
        ]);

        // Update the note in the database
        $note->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('notes.index')->with('success', 'Note updated successfully.');
    }

    // Destroy method to remove the specified note from the database
    public function destroy(Note $note)
    {
        // Delete the note from the database
        $note->delete();

        // Redirect to the index page with a success message
        return redirect()->route('notes.index')->with('success', 'Note deleted successfully.');
    }

}
