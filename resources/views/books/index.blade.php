@extends('layouts.layouts')

@section('content')
    {{-- create a button named add book --}}
    <a href="{{ route('books.create') }}" class="btn btn-success mb-2">Add Book</a>
    <a href="{{ route('books.generate-pdf') }}" class="btn btn-info mb-2">Generate PDF</a>
    <form action="{{ route('books.search') }}" method="GET" class="mb-2">
        <div class="input-group">
            <input type="text" class="form-control ml-2" name="search" placeholder="Search by title, author, or ISBN">
            <button class="btn btn-primary ml-2" type="submit">Search</button>
        </div>
    </form>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">author</th>
                <th scope="col">isbn</th>
                <th scope="col">price</th>
                <th scope="col">Actions</th>



            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->price }}</td>
                    
                    <td>
                        <a href="{{ route('books.edit', ['book' => $book]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                        </form>
                    </td>
    
                    

                </tr>
            @endforeach

            
        </tbody>
    </table>

    {{ $books->links() }}
@endsection