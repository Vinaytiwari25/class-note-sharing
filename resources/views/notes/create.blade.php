<!-- resources/views/notes/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create a New Note</h1>

    <!-- Form to create a new note -->
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="content">Content:</label>
        <textarea name="content" required></textarea>

        <label for="file_path">File Path:</label>
        <input type="text" name="file_path" required>

        <button type="submit">Create Note</button>
    </form>

    <a href="{{ route('notes.index') }}">Back to All Notes</a>
@endsection
