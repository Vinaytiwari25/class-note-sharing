<!-- resources/views/notes/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $note->title }}</h1>
    <p>{{ $note->content }}</p>
    <p>File Path: {{ $note->file_path }}</p>
    <a href="{{ route('notes.index') }}">Back to All Notes</a>
@endsection
