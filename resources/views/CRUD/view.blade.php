@extends('layouts.app')

@section('content')
@if ($datas->count() > 0)
<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                @endif
            <div class="card">
            <table class="table table-dark table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis Buku</th>
                    <th scope="col">Jumlah Halaman</th>
                    <th scope="col">Tahun Terbit</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $book)
                    <tr>
                      <th>{{ $book->id }} </th>
                      <td>{{ $book->judul}} </td>
                      <td>{{ $book->penulis}}</td>
                      <td>{{ $book->halaman}}</td>
                      <td>{{ $book->tahun}}</td>
                      <td>
                          <a class="btn-danger btn " href=" {{ route ('ShowForm', $book->id) }}">
                               Perbarui
                          </a>
                      </td>
                      <td>
                           <form method="post" enctype="multipart/form-data" action="{{ Route ('HapusBuku', $book->id) }}">
                           @csrf
                           @method('delete')
                           <button type="submit" class="btn-danger btn">Hapus</button>
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
@else
    <div class="text-center"> <h1 style="color: white" >Tidak ada buku yang tersedia</h1></div>
@endif
@endsection
