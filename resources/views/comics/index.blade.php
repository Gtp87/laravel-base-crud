@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <h1 class="h1">Admin - All Comics</h1>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ route('comics.create') }}" class="btn btn-success mb-2">Add new comic</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
                <table class="table table-success">
                <thead>
                    <tr class="table-success">
                        <th>Title</th>
                        <th>Author</th>
                        <th class="w-50">Description</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td class="text-capitalize">{{ $comic->title }}</td>
                        <td>{{ $comic->author }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }} €</td>
                        <td><a class="btn btn-success" href="{{ route('comics.show', $comic) }}">View</a>
                        <a class="btn btn-success" href="{{ route('comics.edit', $comic) }}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            {{ $comics->links() }}
        </div>
    </div>
</div>
@endsection