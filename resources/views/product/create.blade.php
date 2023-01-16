@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center">Tambah Produk</div>
                    <div class="card-body">
                        <form action="{{route('product.store')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" name="namaproduct" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Nama Kategori</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($category as $c)
                                    <option value="{{$c->id}}">{{$c->namacategory}}</option>
                                    @endforeach
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="number" name="harga" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="text" name="product" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Produk</label>
                                <input type="text" name="qty" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Simpan</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection