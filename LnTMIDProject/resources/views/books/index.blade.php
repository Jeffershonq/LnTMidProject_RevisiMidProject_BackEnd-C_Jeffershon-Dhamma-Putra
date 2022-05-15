@extends('books.layout')
@section('content')

    <div class="container m-5">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card m-3">
                    <div class="card-header bg-dark text-white">
                        <h2>PT Musang Library</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/books/create') }}" class="btn btn-success btn-sm" title="Add New Book">
                            <i class="fa fa-plus" aria-hidden="true"></i> (+) Input Buku
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table bg-light ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Buku</th>
                                        <th>Penulis</th>
                                        <th>Jumlah Halaman</th>
                                        <th>Tahun Terbit</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($books as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td>{{ $item->penulis }}</td>
                                        <td>{{ $item->jumlah }}</td>
                                        <td>{{ $item->terbit }}</td>
 
                                        <td>
                                            <a href="{{ url('/books/' . $item->id) }}" title="View Book"><button class="btn btn-info btn-sm text-white bg-warning"><i class="fa fa-eye" aria-hidden="true" ></i> View</button></a>
                                            <a href="{{ url('/books/' . $item->id . '/edit') }}" title="Edit Book"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/books' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Book" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
    </div>
@endsection