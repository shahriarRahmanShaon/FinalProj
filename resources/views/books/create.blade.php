@extends('layouts.layouts')

@section('content')
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        {{-- create a bootstrap input named title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
            @error('title')
                <small class="text-small text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- create a bootstrap input named author --}}
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" value="{{ old('author') }}">

            @error('author')
                <small class="text-small text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- create a bootstrap input named isbn --}}
        <div class="form-group">

            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" class="form-control" value="{{ old('isbn') }}">

            @error('isbn')
                <small class="text-small text-danger">{{ $message }}</small>
            @enderror
        </div>

        {{-- create a bootstrap input named price --}}
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}">
            @error('price')
                <small class="text-small text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        <a href="{{ route('books.index') }}" class="btn mt-3 btn-secondary">Cancel</a>
    </form>
@endsection