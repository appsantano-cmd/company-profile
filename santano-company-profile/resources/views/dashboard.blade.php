@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Dashboard</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Selamat datang, {{ Auth::user()->name }}!</h5>
                    <p class="card-text">Ini adalah halaman dashboard Santano.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection