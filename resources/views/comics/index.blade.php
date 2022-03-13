@extends('layouts.base')

@section('title')

@section('content')
    <a href="{{ route('comics.create') }}"><button type="button" class="btn btn-success">aggiungi</button></a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">thumb</th>
                <th scope="col">price</th>
                <th scope="col">series</th>
                <th scope="col">sale_date</th>
                <th scope="col">type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</th>
                    <td><img src="{{ $comic->thumb }}"></th>
                    <td>{{ $comic->price }}</th>
                    <td>{{ $comic->series }}</th>
                    <td>{{ $comic->sale_date }}</th>
                    <td>{{ $comic->type }}</th>
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}"><button type="button"
                                class="btn btn-primary">vedi</button></a>
                        <a href="{{ route('comics.edit', $comic->id) }}"><button type="button"
                                class="btn btn-warning">edit</button></a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                        </th>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection