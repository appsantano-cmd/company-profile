@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Portfolio</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Project 1">
                <div class="card-body">
                    <h5 class="card-title">E-commerce Platform</h5>
                    <p class="card-text">Platform e-commerce untuk toko online.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Project 2">
                <div class="card-body">
                    <h5 class="card-title">Aplikasi Mobile Koperasi</h5>
                    <p class="card-text">Aplikasi mobile untuk manajemen koperasi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Project 3">
                <div class="card-body">
                    <h5 class="card-title">Sistem Informasi Rumah Sakit</h5>
                    <p class="card-text">Sistem manajemen rumah sakit terintegrasi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection