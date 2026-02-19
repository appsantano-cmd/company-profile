@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Hubungi Kami</h1>
    <div class="row">
        <div class="col-md-6">
            <form>
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informasi Kontak</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Jl. Raya ITS No. 123, Surabaya</p>
                    <p><i class="fas fa-phone me-2"></i> +62 31 1234 5678</p>
                    <p><i class="fas fa-envelope me-2"></i> info@santano.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection