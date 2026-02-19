@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Layanan Kami</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <i class="fas fa-code fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Web Development</h5>
                    <p class="card-text">Pembuatan website company profile, e-commerce, dan sistem informasi.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <i class="fas fa-mobile-alt fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Mobile App</h5>
                    <p class="card-text">Aplikasi mobile Android dan iOS dengan teknologi terkini.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <i class="fas fa-paint-brush fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">UI/UX Design</h5>
                    <p class="card-text">Desain antarmuka yang modern dan user-friendly.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection