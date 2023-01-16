@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('category.create') }}" class="btn btn-primary">Add</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <thead>
                                    <th>#</th>
                                    <th>Nama Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Tools</th>
                                </thead>
                            </tr>

                            <tbody>

                                @forelse ($category as $ct)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ct->namacategory }}</td>
                                        <td>{{ $ct->deskripsi }}</td>
                                        <td><a href="{{ route('category.edit', $ct->id) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ route('category.destroy', $ct->id) }}"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Belum Ada Data</td>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
