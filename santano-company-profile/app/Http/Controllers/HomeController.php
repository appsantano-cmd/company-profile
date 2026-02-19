<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = [
            [
                'client_name' => 'Agung',
                'position' => 'Country Manager',
                'company' => 'Tencent Indonesia',
                'content' => 'Bekerja dengan Santano selalu cepat dan bisa diandalkan.',
                'photo' => 'https://ui-avatars.com/api/?name=Agung&size=60&background=0D6EFD&color=fff',
                'rating' => 5
            ],
            [
                'client_name' => 'Dommy Asfiandi',
                'position' => 'PM Data Science',
                'company' => 'Pupuk Indonesia',
                'content' => 'Pengalaman saya sangat positif selama bekerja sama dengan Santano.',
                'photo' => 'https://ui-avatars.com/api/?name=Dommy+Asfiandi&size=60&background=0D6EFD&color=fff',
                'rating' => 5
            ],
            [
                'client_name' => 'Reza Afrian',
                'position' => 'Head Marketing',
                'company' => 'Moonton',
                'content' => 'Professional and talented people that can help fulfill client needs.',
                'photo' => 'https://ui-avatars.com/api/?name=Reza+Afrian&size=60&background=0D6EFD&color=fff',
                'rating' => 5
            ]
        ];

        $packages = [
            [
                'name' => 'TEMATIK WEB 1 HALAMAN',
                'type' => 'thematic',
                'price' => 700000,
                'features' => [
                    '1 halaman landing page',
                    'Bonus link-in-bio custom',
                    'Bukan WordPress',
                    'Ada CMS untuk update sendiri',
                    'Tombol WhatsApp langsung',
                    'Sudah termasuk hosting 1 tahun'
                ]
            ],
            [
                'name' => 'TEMATIK WEB 5 HALAMAN',
                'type' => 'thematic',
                'price' => 1500000,
                'features' => [
                    '5 halaman website',
                    'Bonus link-in-bio custom',
                    'Bukan WordPress',
                    'CMS untuk update sendiri',
                    'Tombol WhatsApp langsung',
                    'Termasuk hosting 1 tahun'
                ]
            ],
            [
                'name' => 'CUSTOM WEB 1 HALAMAN',
                'type' => 'custom',
                'price' => 3000000,
                'features' => [
                    '1 halaman landing page',
                    'Full custom design',
                    'Bukan WordPress',
                    'Desain sesuai branding',
                    'CMS untuk update sendiri',
                    'Sudah termasuk domain & hosting'
                ]
            ]
        ];

        return view('welcome', compact('testimonials', 'packages'));
    }
}