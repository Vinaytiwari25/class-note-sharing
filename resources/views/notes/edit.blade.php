<!-- resources/views/notes/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Note - {{ $note->title }}</h1>

    <!-- Form to edit an existing note -->
    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $note->title }}" required>

        <label for="content">Content:</label>
        <textarea name="content" required>{{ $note->content }}</textarea>

        <label for="file_path">File Path:</label>
        <input type="text" name="file_path" value="{{ $note->file_path }}" required>

        <button type="submit">Update Note</button>
    </form>

    <a href="{{ route('notes.index') }}">Back to All Notes</a>
@endsection
