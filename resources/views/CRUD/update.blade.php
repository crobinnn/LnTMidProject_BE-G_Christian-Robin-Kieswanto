@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Perbarui Buku') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('Update', $buku->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH');
                        <div class="form-group row">
                            <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul Buku') }}</label>

                            <div class="col-md-6">
                                <input id="judul" value="{{$buku->judul}}" type="text" class="form-control" name="judul" placeholder="Judul Buku">

                                @error('judul')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="penulis" class="col-md-4 col-form-label text-md-right">{{ __('Penulis Buku') }}</label>

                            <div class="col-md-6">
                                <input id="penulis" value="{{$buku->penulis}}" type="text" class="form-control" name="penulis" placeholder="Penulis Buku">

                                @error('penulis')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="halaman" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Halaman') }}</label>

                            <div class="col-md-6">
                                <input id="halaman" type="number" value="{{$buku->halaman }}" class="form-control" name="halaman" placeholder="Jumlah Halaman">

                                @error('halaman')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun" class="col-md-4 col-form-label text-md-right">{{ __('Tahun Terbit') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="number" value="{{$buku->tahun}}" class="form-control @error('name') is-invalid @enderror" name="tahun" placeholder="Tahun Terbit">

                                @error('tahun')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection