<!-- resources/views/notes/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>All Notes</h1>

    <!-- Display a table of all notes -->
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)
                <tr>
                    <td>{{ $note->title }}</td>
                    <td>
                        <a href="{{ route('notes.show', $note) }}">View</a>
                        <a href="{{ route('notes.edit', $note) }}">Edit</a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
