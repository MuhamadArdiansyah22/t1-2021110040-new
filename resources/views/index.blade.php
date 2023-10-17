@extends('layouts.app')

@section('books')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Book List</div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ISBN</th>
                                    <th>Title</th>
                                    <th>Pages</th>
                                    <th>Category</th>
                                    <th>Publisher</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->isbn }}</td>
                                        <td>{{ $book->judul }}</td>
                                        <td>{{ $book->halaman }}</td>
                                        <td>{{ $book->kategori }}</td>
                                        <td>{{ $book->penerbit }}</td>
                                        <td>
                                            <a href="{{ route('books.show', $book->id) }}"
                                                class="btn btn-primary btn-sm">View</a>
                                            <a href="{{ route('books.edit', $book->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('books.destroy', $book->id) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
