@extends('layouts.app')

@section('content')
    <h1>Lista de Libros</h1>
    <a href="{{ route('books.create') }}">Nuevo Libro</a>
    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} - {{ $book->author }}
                <a href="{{ route('books.edit', $book) }}">Editar</a>
            </li>
        @endforeach
    </ul>
@endsection
