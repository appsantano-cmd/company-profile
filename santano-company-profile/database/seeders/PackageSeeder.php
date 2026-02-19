<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    public function run()
    {
        $packages = [
            [
                'name' => 'TEMATIK WEB 1 HALAMAN',
                'type' => 'thematic',
                'price' => 700000,
                'description' => 'Cocok untuk personal branding atau bisnis kecil yang membutuhkan kehadiran online sederhana namun profesional.',
                'features' => [
                    '1 halaman landing page',
                    'Bonus link-in-bio custom',
                    'Bukan WordPress (lebih ringan & mudah dipakai)',
                    'Ada CMS untuk update sendiri',
                    'Tombol WhatsApp langsung',
                    'Tanpa domain',
                    'Sudah termasuk hosting 1 tahun',
                    'Tema bisa dipilih',
                    'Pengerjaan cepat',
                    'Dibantu isi data & konten awal'
                ],
                'additional_options' => [
                    'Domain: +300rb/tahun',
                    'Perpanjangan hosting: 300rb/tahun'
                ],
                'order' => 1
            ],
            [
                'name' => 'TEMATIK WEB 5 HALAMAN',
                'type' => 'thematic',
                'price' => 1500000,
                'description' => 'Ideal untuk UMKM yang ingin menampilkan produk/jasa secara lebih lengkap dengan struktur halaman yang jelas.',
                'features' => [
                    'Landing Page + Product/Service + Detail Product/Service + News/Article + Article Detail',
                    'Bonus link-in-bio custom',
                    'Bukan WordPress (lebih ringan & mudah dipakai)',
                    'CMS untuk update sendiri',
                    'Tombol WhatsApp langsung',
                    'Tanpa domain',
                    'Termasuk hosting 1 tahun',
                    'Tema bisa dipilih',
                    'Proses cepat',
                    'Dibantu isi data & konten awal'
                ],
                'additional_options' => [
                    'Domain: +300rb/tahun',
                    'Perpanjangan hosting: 300rb/tahun',
                    'Halaman tambahan: 150rb/halaman'
                ],
                'order' => 2
            ],
            [
                'name' => 'CUSTOM WEB 1 HALAMAN',
                'type' => 'custom',
                'price' => 3000000,
                'description' => 'Solusi premium untuk perusahaan yang menginginkan website dengan desain eksklusif sesuai branding mereka.',
                'features' => [
                    '1 halaman landing page',
                    'Bonus link-in-bio custom',
                    'Full custom design',
                    'Bukan WordPress (lebih mudah digunakan)',
                    'Desain menyesuaikan branding/logo',
                    'CMS untuk update sendiri',
                    'Tombol WhatsApp langsung',
                    'Sudah termasuk domain',
                    'Termasuk hosting',
                    'Tema bisa dipilih',
                    'Pengerjaan cepat',
                    'Dibantu isi data & konten awal',
                    'Gratis 1 email perusahaan (12 bulan)'
                ],
                'additional_options' => [
                    'Domain: +300rb/tahun',
                    'Perpanjangan hosting: 300rb/tahun',
                    'Halaman tambahan: 150rb/halaman',
                    'Tambahan halaman: 1-2 juta, tergantung kompleksitas'
                ],
                'order' => 3
            ]
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}