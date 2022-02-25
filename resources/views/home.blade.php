@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Buku') }}</div>

                <div class="card-body">
                    <a href="{{ route ('create') }} ">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lihat Buku') }}</div>

                <div class="card-body">
                    <a href="{{ route ('ViewAll') }} ">Click Here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
