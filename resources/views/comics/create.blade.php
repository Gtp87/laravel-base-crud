@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
<div class="container">
<div class="row">
    <form action="{{ route('comics.store') }}" method="post">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="title" class="form-label">Comic Title</label>
        <input type="text" class="form-control" id="title" name="title">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Author</label>
        <input type="text" class="form-control" id="author" name="author">
        @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
        <div class="mb-3">
        <label for="genre" class="form-label">genre</label>
        <input type="text" class="form-control" id="genre" name="genre">
        @error('genre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">photo</label>
        <input type="text" class="form-control" id="photo" name="photo">
        @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</div>
@endsection