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
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
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
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td class="text-capitalize">{{ $comic->title }}</td>
                        <td>{{ $comic->author }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }} €</td>
                        <td><a class="btn btn-success" href="{{ route('comics.show', $comic) }}">View</a></td>
                        <td><a class="btn btn-success" href="{{ route('comics.edit', $comic) }}">Edit</a></td>
                        <td>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
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