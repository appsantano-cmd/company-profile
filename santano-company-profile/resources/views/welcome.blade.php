<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Santano - Software House profesional di Indonesia. Jasa pembuatan website, aplikasi mobile, dan sistem informasi.">
    <meta name="keywords" content="software house, jasa pembuatan website, company profile, aplikasi mobile, IT consultant, Indonesia">
    <meta name="author" content="Santano">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Santano - Jasa Pembuatan Website Profesional">
    <meta property="og:description" content="Solusi digital terpercaya untuk bisnis Anda. Konsultasi gratis!">
    <meta property="og:image" content="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <title>Santano APP</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #0d6efd;
            --primary-dark: #0b5ed7;
            --primary-light: #4d9eff;
            --secondary: #6c757d;
            --success: #198754;
            --warning: #ffc107;
            --danger: #dc3545;
            --dark: #212529;
            --light: #f8f9fa;
            --gradient-1: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-2: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
            --gradient-3: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            padding-top: 76px;
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.05);
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-link {
            font-weight: 600;
            color: var(--dark) !important;
            margin: 0 10px;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient-1);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            padding: 80px 0;
        }

        .hero-bg-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><circle cx="50" cy="50" r="5" fill="white" opacity="0.1"/><circle cx="150" cy="100" r="8" fill="white" opacity="0.1"/><circle cx="80" cy="180" r="6" fill="white" opacity="0.1"/><circle cx="180" cy="30" r="4" fill="white" opacity="0.1"/></svg>');
            animation: particleMove 20s linear infinite;
        }

        @keyframes particleMove {
            0% { transform: translateY(0); }
            100% { transform: translateY(-50px); }
        }

        .badge-software {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            border: 1px solid rgba(255,255,255,0.3);
            display: inline-block;
        }

        .hero-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-title-line {
            display: block;
            color: white;
            opacity: 0.9;
        }

        .hero-title-highlight {
            display: block;
            color: var(--warning);
            text-shadow: 2px 2px 20px rgba(255,193,7,0.3);
        }

        .hero-title-gradient {
            display: block;
            background: linear-gradient(135deg, #fff 0%, #e0e0e0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            color: rgba(255,255,255,0.9);
            font-size: clamp(1rem, 2vw, 1.2rem);
            max-width: 600px;
        }

        .btn-cta-primary {
            background: var(--warning);
            color: var(--dark);
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(255,193,7,0.3);
            border: none;
            cursor: pointer;
        }

        .btn-cta-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(255,193,7,0.4);
            color: var(--dark);
        }

        .btn-cta-secondary {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            color: white;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            border: 1px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-cta-secondary:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-5px);
            color: white;
        }

        .btn-cta-gradient {
            background: var(--gradient-2);
            color: white;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(13,110,253,0.3);
            border: none;
            cursor: pointer;
        }

        .btn-cta-gradient:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(13,110,253,0.4);
            color: white;
        }

        .hero-stats {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--warning);
            line-height: 1;
        }

        .stat-label {
            color: rgba(255,255,255,0.8);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 5px;
        }

        .hero-image-wrapper {
            position: relative;
            padding: 50px;
            min-height: 400px;
        }

        .floating-icons {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }

        .floating-icon {
            position: absolute;
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            animation: float 3s ease-in-out infinite;
            transition: transform 0.3s ease;
        }

        .floating-icon:hover {
            transform: scale(1.1);
        }

        .icon-1 { top: 10%; left: 0; animation-delay: 0s; color: #f05340; }
        .icon-2 { top: 30%; right: 0; animation-delay: 0.3s; color: #61dafb; }
        .icon-3 { bottom: 20%; left: 20%; animation-delay: 0.6s; color: #42b883; }
        .icon-4 { top: 50%; left: 10%; animation-delay: 0.9s; color: #f7df1e; }
        .icon-5 { bottom: 10%; right: 20%; animation-delay: 1.2s; color: #777bb3; }
        .icon-6 { top: 70%; right: 10%; animation-delay: 1.5s; color: #3776ab; }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .hero-image {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.2));
            animation: floating 4s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .wave-divider {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .wave-divider svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 120px;
        }

        .wave-divider .shape-fill {
            fill: #FFFFFF;
        }

        /* Section Headers */
        .section-header {
            margin-bottom: 50px;
        }

        .section-badge {
            display: inline-block;
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            color: white;
            margin-bottom: 15px;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 2.5rem);
            font-weight: 800;
            margin-bottom: 15px;
        }

        .text-gradient {
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            color: var(--secondary);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Problem Cards */
        .problem-card-modern {
            background: white;
            padding: 40px 30px;
            border-radius: 30px;
            position: relative;
            transition: all 0.3s ease;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            height: 100%;
            border: 1px solid rgba(13,110,253,0.1);
        }

        .problem-card-modern:hover {
            transform: translateY(-20px);
            box-shadow: 0 40px 60px rgba(13,110,253,0.15);
        }

        .problem-icon-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .problem-icon-circle {
            width: 80px;
            height: 80px;
            background: var(--gradient-1);
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: rotate(45deg);
            transition: all 0.3s ease;
        }

        .problem-icon-circle i {
            font-size: 2.5rem;
            color: white;
            transform: rotate(-45deg);
            transition: all 0.3s ease;
        }

        .problem-card-modern:hover .problem-icon-circle {
            transform: rotate(0deg);
            border-radius: 50%;
        }

        .problem-number {
            font-size: 3rem;
            font-weight: 800;
            color: rgba(13,110,253,0.1);
            line-height: 1;
        }

        .problem-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .problem-desc {
            color: var(--secondary);
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .problem-stats {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .stat-bar {
            flex: 1;
            height: 8px;
            background: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
        }

        .stat-fill {
            height: 100%;
            background: var(--gradient-1);
            border-radius: 10px;
        }

        .stat-value {
            font-weight: 700;
            color: var(--primary);
        }

        /* Logo Slider */
        .bg-gradient-light {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .logo-slider {
            overflow: hidden;
            padding: 30px 0;
        }

        .logo-slide-track {
            animation: scroll 20s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }

        .logo-slide {
            width: 250px;
            padding: 0 15px;
            flex-shrink: 0;
        }

        .client-logo-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .client-logo-card:hover {
            transform: scale(1.1);
            box-shadow: 0 20px 40px rgba(13,110,253,0.2);
        }

        .client-logo-card img {
            max-width: 100%;
            max-height: 60px;
            object-fit: contain;
            filter: grayscale(100%);
            transition: all 0.3s ease;
        }

        .client-logo-card:hover img {
            filter: grayscale(0);
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-250px * 7)); }
        }

        /* Process Steps */
        .process-step-modern {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            position: relative;
            height: 100%;
        }

        .step-number-glow {
            width: 60px;
            height: 60px;
            background: var(--gradient-2);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
            box-shadow: 0 0 0 10px rgba(13,110,253,0.1);
            transition: all 0.3s ease;
            z-index: 2;
        }

        .process-step-modern:hover .step-number-glow {
            box-shadow: 0 0 0 15px rgba(13,110,253,0.2);
            transform: scale(1.1);
        }

        .step-content {
            background: white;
            padding: 40px 30px;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            position: relative;
            transition: all 0.3s ease;
            width: 100%;
            height: 100%;
        }

        .process-step-modern:hover .step-content {
            transform: translateY(-10px);
            box-shadow: 0 40px 60px rgba(13,110,253,0.15);
        }

        .step-icon-wrapper {
            width: 80px;
            height: 80px;
            background: var(--gradient-1);
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }

        .step-icon-wrapper i {
            font-size: 2.5rem;
            color: white;
        }

        .step-content h4 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .step-content p {
            color: var(--secondary);
            margin: 0;
            line-height: 1.6;
        }

        /* Testimonial Grid */
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card-modern {
            background: white;
            padding: 40px;
            border-radius: 30px;
            position: relative;
            transition: all 0.3s ease;
            box-shadow: 0 20px 40px rgba(0,0,0,0.05);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .testimonial-card-modern:hover {
            transform: translateY(-10px);
            box-shadow: 0 40px 60px rgba(13,110,253,0.15);
        }

        .quote-mark {
            position: absolute;
            top: 30px;
            right: 30px;
            font-size: 4rem;
            color: rgba(13,110,253,0.1);
            line-height: 1;
        }

        .testimonial-rating {
            margin-bottom: 20px;
        }

        .testimonial-rating i {
            color: var(--warning);
            margin-right: 5px;
            font-size: 1.1rem;
        }

        .testimonial-text {
            font-size: 1rem;
            line-height: 1.8;
            color: var(--dark);
            margin-bottom: 30px;
            font-style: italic;
            flex: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: auto;
        }

        .author-avatar {
            flex-shrink: 0;
        }

        .author-avatar img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary);
        }

        .author-info h5 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .author-info p {
            font-size: 0.9rem;
            color: var(--secondary);
            margin: 0;
            line-height: 1.4;
        }

        /* Package Cards 3D */
        .package-card-3d {
            background: white;
            border-radius: 40px;
            padding: 40px 30px;
            position: relative;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-style: preserve-3d;
            perspective: 1000px;
            border: 1px solid rgba(13,110,253,0.1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .package-card-3d:hover {
            transform: translateY(-20px) rotateX(2deg) rotateY(2deg);
            box-shadow: -30px 30px 60px rgba(13,110,253,0.2);
        }

        .package-card-3d.popular {
            border: 2px solid var(--warning);
            transform: scale(1.05);
        }

        .package-card-3d.popular:hover {
            transform: scale(1.05) translateY(-20px) rotateX(2deg) rotateY(2deg);
        }

        .popular-ribbon {
            position: absolute;
            top: 30px;
            right: -30px;
            background: var(--warning);
            color: var(--dark);
            padding: 8px 40px;
            transform: rotate(45deg);
            font-weight: bold;
            font-size: 0.9rem;
            box-shadow: 0 5px 15px rgba(255,193,7,0.3);
            z-index: 10;
        }

        .package-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .package-price {
            margin-bottom: 30px;
        }

        .package-price .currency {
            font-size: 1.5rem;
            vertical-align: super;
            color: var(--primary);
            font-weight: 500;
        }

        .package-price .amount {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            color: var(--primary);
            line-height: 1;
        }

        .package-price .period {
            color: var(--secondary);
            font-size: 1rem;
            margin-left: 5px;
        }

        .package-features {
            flex: 1;
            margin-bottom: 30px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 0;
            border-bottom: 1px dashed rgba(13,110,253,0.1);
        }

        .feature-item:last-child {
            border-bottom: none;
        }

        .feature-item i {
            color: var(--success);
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .feature-item span {
            color: var(--dark);
            font-size: 0.95rem;
            line-height: 1.4;
        }

        .btn-package {
            display: block;
            width: 100%;
            padding: 15px;
            background: var(--gradient-2);
            color: white;
            text-align: center;
            border-radius: 15px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 30px;
            border: none;
            cursor: pointer;
        }

        .btn-package:hover {
            transform: scale(1.05);
            color: white;
            box-shadow: 0 10px 30px rgba(13,110,253,0.4);
        }

        .btn-package i {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .btn-package:hover i {
            transform: translateX(10px);
        }

        .additional-options {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid rgba(13,110,253,0.1);
        }

        .additional-title {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .additional-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: var(--secondary);
            margin-bottom: 5px;
        }

        .additional-item i {
            color: var(--primary);
            font-size: 0.8rem;
            flex-shrink: 0;
        }

        /* About Section */
        .about-title {
            font-size: clamp(2rem, 4vw, 2.2rem);
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .about-subtitle {
            font-size: 1.3rem;
            color: var(--primary);
            margin-bottom: 20px;
            font-weight: 500;
        }

        .about-text {
            color: var(--secondary);
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .about-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-box {
            display: flex;
            align-items: center;
            gap: 15px;
            background: white;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .stat-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(13,110,253,0.1);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            background: var(--gradient-1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .stat-icon i {
            font-size: 1.5rem;
            color: white;
        }

        .stat-content {
            flex: 1;
        }

        .stat-content h4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
            line-height: 1;
        }

        .stat-content p {
            margin: 0;
            font-size: 0.9rem;
            color: var(--secondary);
        }

        .btn-learn-more {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 35px;
            background: var(--gradient-2);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-learn-more:hover {
            transform: translateX(10px);
            color: white;
            box-shadow: 0 10px 30px rgba(13,110,253,0.3);
        }

        .about-image-grid {
            position: relative;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            padding: 30px;
        }

        .grid-item {
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
        }

        .grid-item:hover {
            transform: scale(1.05);
            z-index: 2;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .grid-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .grid-item:hover img {
            transform: scale(1.1);
        }

        .item-1 {
            grid-row: span 2;
            height: 300px;
        }

        .item-2 {
            height: 140px;
        }

        .item-3 {
            height: 140px;
        }

        .item-4 {
            grid-column: span 2;
            height: 200px;
        }

        .play-button-wrapper {
            position: absolute;
            bottom: 30px;
            right: 30px;
            background: white;
            padding: 15px 25px;
            border-radius: 60px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            gap: 15px;
            animation: pulse 2s infinite;
            z-index: 10;
            transition: all 0.3s ease;
        }

        .play-button-wrapper:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }

        .play-button {
            width: 50px;
            height: 50px;
            background: var(--gradient-2);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .play-button:hover {
            transform: scale(1.1);
            color: white;
        }

        .play-text {
            font-weight: 600;
            color: var(--dark);
            font-size: 0.95rem;
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient-1);
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-bg-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><circle cx="50" cy="50" r="5" fill="white" opacity="0.1"/><circle cx="150" cy="100" r="8" fill="white" opacity="0.1"/><circle cx="80" cy="180" r="6" fill="white" opacity="0.1"/><circle cx="180" cy="30" r="4" fill="white" opacity="0.1"/></svg>');
            animation: particleMove 20s linear infinite;
        }

        .cta-title {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 800;
            color: white;
            margin-bottom: 20px;
        }

        .cta-subtitle {
            font-size: clamp(1rem, 2vw, 1.3rem);
            color: rgba(255,255,255,0.9);
            margin-bottom: 40px;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .btn-cta-whatsapp {
            background: #25D366;
            color: white;
            padding: 18px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(37,211,102,0.3);
            border: none;
            cursor: pointer;
        }

        .btn-cta-whatsapp:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(37,211,102,0.4);
            color: white;
        }

        .btn-cta-phone {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            color: white;
            padding: 18px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: 1px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-cta-phone:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-5px);
            color: white;
        }

        .trust-badges {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            padding: 10px 25px;
            border-radius: 50px;
            border: 1px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
        }

        .trust-item:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-3px);
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 30px 0;
        }

        /* Modal */
        .modal-content {
            border: none;
            border-radius: 20px;
            overflow: hidden;
        }

        .modal-header {
            padding: 15px 20px;
        }

        .modal-body {
            padding: 0;
        }

        /* Utility Classes */
        .py-5 {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .mb-5 {
            margin-bottom: 3rem;
        }

        .mt-5 {
            margin-top: 3rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-stats {
                justify-content: center;
            }
            
            .hero-image-wrapper {
                padding: 30px;
                min-height: 300px;
            }
            
            .about-image-grid {
                padding: 15px;
            }
            
            .item-1 {
                height: 250px;
            }
            
            .item-2, .item-3 {
                height: 120px;
            }
            
            .item-4 {
                height: 180px;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 0;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-stats {
                gap: 20px;
            }
            
            .stat-number {
                font-size: 2rem;
            }
            
            .floating-icons {
                display: none;
            }
            
            .hero-image-wrapper {
                min-height: 250px;
                padding: 20px;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .testimonial-grid {
                grid-template-columns: 1fr;
            }
            
            .package-card-3d.popular {
                transform: scale(1);
            }
            
            .package-card-3d.popular:hover {
                transform: scale(1) translateY(-10px);
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn-cta-whatsapp,
            .btn-cta-phone {
                width: 100%;
                justify-content: center;
            }
            
            .trust-badges {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            
            .trust-item {
                width: 100%;
                justify-content: center;
            }
            
            .about-stats-grid {
                grid-template-columns: 1fr;
            }
            
            .play-button-wrapper {
                position: static;
                margin-top: 20px;
                justify-content: center;
                width: fit-content;
                margin-left: auto;
                margin-right: auto;
            }
        }

        @media (max-width: 576px) {
            .hero-image-wrapper {
                min-height: 200px;
            }
            
            .hero-cta {
                flex-direction: column;
                align-items: stretch;
            }
            
            .hero-cta a {
                text-align: center;
                justify-content: center;
            }
            
            .problem-icon-circle {
                width: 60px;
                height: 60px;
            }
            
            .problem-icon-circle i {
                font-size: 2rem;
            }
            
            .problem-number {
                font-size: 2.5rem;
            }
            
            .package-card-3d {
                padding: 30px 20px;
            }
            
            .package-price .amount {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Santano</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden">
        <div class="hero-bg-particles"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row min-vh-100 align-items-center">
                <div class="col-lg-7 text-white" data-aos="fade-right">
                    <div class="hero-badge mb-4">
                        <span class="badge-software">🏆 SOFTWARE HOUSE TERPERCAYA</span>
                    </div>
                    <h1 class="hero-title">
                        <span class="hero-title-line">Apa Yang Terjadi Kalau</span>
                        <span class="hero-title-highlight">Bisnis Kamu Belum Punya</span>
                        <span class="hero-title-gradient">Website Profesional?</span>
                    </h1>
                    <p class="hero-subtitle lead mb-5">Jangan biarkan kompetitor Anda melesat karena mereka sudah memiliki website profesional. Mulai transformasi digital bisnis Anda sekarang juga!</p>
                    
                    <div class="hero-cta d-flex flex-wrap gap-3">
                        <a href="/contact" class="btn-cta-primary">
                            <span>Konsultasi Gratis</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="/portfolio" class="btn-cta-secondary">
                            <i class="fas fa-play me-2"></i>
                            <span>Lihat Portfolio</span>
                        </a>
                    </div>
                    
                    <div class="hero-stats mt-5">
                        <div class="stat-item">
                            <div class="stat-number">
                                <span class="counter" data-target="50">0</span><span>+</span>
                            </div>
                            <div class="stat-label">Project Selesai</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">
                                <span class="counter" data-target="30">0</span><span>+</span>
                            </div>
                            <div class="stat-label">Klien Puas</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">
                                <span class="counter" data-target="5">0</span><span>+</span>
                            </div>
                            <div class="stat-label">Tahun Pengalaman</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="hero-image-wrapper">
                        <div class="floating-icons">
                            <div class="floating-icon icon-1">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <div class="floating-icon icon-2">
                                <i class="fab fa-react"></i>
                            </div>
                            <div class="floating-icon icon-3">
                                <i class="fab fa-vuejs"></i>
                            </div>
                            <div class="floating-icon icon-4">
                                <i class="fab fa-js"></i>
                            </div>
                            <div class="floating-icon icon-5">
                                <i class="fab fa-php"></i>
                            </div>
                            <div class="floating-icon icon-6">
                                <i class="fab fa-python"></i>
                            </div>
                        </div>
                        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/web-development-6210304-5089707.png" alt="Web Development" class="hero-image img-fluid floating-animation">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Wave Divider -->
        <div class="wave-divider">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- Problem Section -->
    <section class="problem-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-badge bg-danger">⚠️ TANTANGAN BISNIS</span>
                <h2 class="section-title">3 Masalah <span class="text-gradient">Kritis</span> Jika Belum Punya Website</h2>
                <p class="section-subtitle">Ribuan bisnis mengalami kerugian karena mengabaikan kehadiran online mereka</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="problem-card-modern">
                        <div class="problem-icon-wrapper">
                            <div class="problem-icon-circle">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="problem-number">01</div>
                        </div>
                        <h3 class="problem-title">Sulit Ditemukan Online</h3>
                        <p class="problem-desc">Saat orang mencari layananmu di Google, yang muncul adalah kompetitor – karena mereka sudah punya website.</p>
                        <div class="problem-stats">
                            <div class="stat-bar">
                                <div class="stat-fill" style="width: 93%"></div>
                            </div>
                            <span class="stat-value">93%</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="problem-card-modern">
                        <div class="problem-icon-wrapper">
                            <div class="problem-icon-circle">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="problem-number">02</div>
                        </div>
                        <h3 class="problem-title">Salah Pilih Vendor</h3>
                        <p class="problem-desc">Banyak vendor menjanjikan website profesional, namun hasil akhirnya tidak representatif dan sulit digunakan.</p>
                        <div class="problem-stats">
                            <div class="stat-bar">
                                <div class="stat-fill" style="width: 70%"></div>
                            </div>
                            <span class="stat-value">70%</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="problem-card-modern">
                        <div class="problem-icon-wrapper">
                            <div class="problem-icon-circle">
                                <i class="fas fa-user-slash"></i>
                            </div>
                            <div class="problem-number">03</div>
                        </div>
                        <h3 class="problem-title">Kepercayaan Menurun</h3>
                        <p class="problem-desc">Ketiadaan website membuat bisnis tampak kurang kredibel di mata calon mitra maupun pelanggan.</p>
                        <div class="problem-stats">
                            <div class="stat-bar">
                                <div class="stat-fill" style="width: 84%"></div>
                            </div>
                            <span class="stat-value">84%</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="/contact" class="btn-cta-gradient">
                    <span>Konsultasi Gratis Sekarang</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="social-proof-section py-5 bg-gradient-light">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-badge bg-primary">🤝 TELAH DIPERCAYA</span>
                <h2 class="section-title">100+ Perusahaan <span class="text-gradient">Berkolaborasi</span> dengan Kami</h2>
            </div>
            
            <div class="logo-slider">
                <div class="logo-slide-track">
                    <div class="logo-slide">
                        <div class="client-logo-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2560px-Google_2015_logo.svg.png" alt="Google">
                        </div>
                    </div>
                    <div class="logo-slide">
                        <div class="client-logo-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/2560px-Amazon_logo.svg.png" alt="Amazon">
                        </div>
                    </div>
                    <div class="logo-slide">
                        <div class="client-logo-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Microsoft_logo.svg/2048px-Microsoft_logo.svg.png" alt="Microsoft">
                        </div>
                    </div>
                    <div class="logo-slide">
                        <div class="client-logo-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Telkom_Indonesia_2013_logo.svg/2560px-Telkom_Indonesia_2013_logo.svg.png" alt="Telkom">
                        </div>
                    </div>
                    <div class="logo-slide">
                        <div class="client-logo-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Gojek_logo.svg/2560px-Gojek_logo.svg.png" alt="Gojek">
                        </div>
                    </div>
                    <div class="logo-slide">
                        <div class="client-logo-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" alt="Laravel">
                        </div>
                    </div>
                    <div class="logo-slide">
                        <div class="client-logo-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2560px-Google_2015_logo.svg.png" alt="Google">
                        </div>
                    </div>
                    <div class="logo-slide">
                        <div class="client-logo-card">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/2560px-Amazon_logo.svg.png" alt="Amazon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-badge bg-success">📋 CARA KERJA</span>
                <h2 class="section-title">3 Langkah <span class="text-gradient">Mudah</span> Mewujudkan Website Impian</h2>
            </div>
            
            <div class="row">
                <div class="col-md-4" data-aos="fade-right">
                    <div class="process-step-modern">
                        <div class="step-number-glow">1</div>
                        <div class="step-content">
                            <div class="step-icon-wrapper">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h4>Konsultasi Gratis</h4>
                            <p>Ceritakan kebutuhan website Anda melalui WhatsApp atau datang langsung ke kantor kami.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up">
                    <div class="process-step-modern">
                        <div class="step-number-glow">2</div>
                        <div class="step-content">
                            <div class="step-icon-wrapper">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            <h4>Dapatkan Proposal</h4>
                            <p>Kami akan memberikan gambaran awal dan penawaran harga yang bisa disesuaikan dengan kebutuhan.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-left">
                    <div class="process-step-modern">
                        <div class="step-number-glow">3</div>
                        <div class="step-content">
                            <div class="step-icon-wrapper">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h4>Website Live!</h4>
                            <p>Proses pembuatan hingga website Anda live online dan siap menarik lebih banyak pelanggan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonials-section py-5 bg-gradient-light">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-badge bg-warning text-dark">⭐ TESTIMONIAL</span>
                <h2 class="section-title">Apa Kata <span class="text-gradient">Klien Kami</span></h2>
            </div>
            
            <div class="testimonial-grid">
                <div class="testimonial-item" data-aos="flip-left" data-aos-delay="100">
                    <div class="testimonial-card-modern">
                        <div class="quote-mark">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Bekerja dengan Santano selalu cepat dan bisa diandalkan. Hasil kerjanya bagus dan professional."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="https://ui-avatars.com/api/?name=Agung&size=60&background=0D6EFD&color=fff&bold=true" alt="Agung">
                            </div>
                            <div class="author-info">
                                <h5>Agung</h5>
                                <p>Country Manager - Tencent Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-item" data-aos="flip-left" data-aos-delay="200">
                    <div class="testimonial-card-modern">
                        <div class="quote-mark">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Pengalaman saya sangat positif selama bekerja sama dengan Santano. Layanan yang profesional dan responsif."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="https://ui-avatars.com/api/?name=Dommy+Asfiandi&size=60&background=0D6EFD&color=fff&bold=true" alt="Dommy Asfiandi">
                            </div>
                            <div class="author-info">
                                <h5>Dommy Asfiandi</h5>
                                <p>PM Data Science - Pupuk Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-item" data-aos="flip-left" data-aos-delay="300">
                    <div class="testimonial-card-modern">
                        <div class="quote-mark">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Professional and talented people that can help fulfill what a client needs."</p>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="https://ui-avatars.com/api/?name=Reza+Afrian&size=60&background=0D6EFD&color=fff&bold=true" alt="Reza Afrian">
                            </div>
                            <div class="author-info">
                                <h5>Reza Afrian</h5>
                                <p>Head Marketing - Moonton</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Package Section -->
    <section class="package-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-up">
                <span class="section-badge bg-info">💰 INVESTASI</span>
                <h2 class="section-title">Pilih Paket <span class="text-gradient">Sesuai Kebutuhan</span></h2>
                <p class="section-subtitle">Harga terjangkau dengan kualitas terbaik, tanpa biaya tersembunyi</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="150">
                    <div class="package-card-3d">
                        <div class="package-header">
                            <h3 class="package-name">TEMATIK WEB 1 HALAMAN</h3>
                            <div class="package-price">
                                <span class="currency">Rp</span>
                                <span class="amount">700.000</span>
                                <span class="period">/project</span>
                            </div>
                        </div>
                        
                        <div class="package-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>1 halaman landing page</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Bonus link-in-bio custom</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Bukan WordPress</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Ada CMS untuk update sendiri</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Tombol WhatsApp langsung</span>
                            </div>
                        </div>
                        
                        <div class="package-footer">
                            <a href="/contact" class="btn-package">
                                <span>Pilih Paket</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        
                        <div class="additional-options">
                            <p class="additional-title">Tambahan:</p>
                            <div class="additional-item">
                                <i class="fas fa-plus-circle"></i>
                                <span>Domain: +300rb/tahun</span>
                            </div>
                            <div class="additional-item">
                                <i class="fas fa-plus-circle"></i>
                                <span>Perpanjangan hosting: 300rb/tahun</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="package-card-3d">
                        <div class="package-header">
                            <h3 class="package-name">TEMATIK WEB 5 HALAMAN</h3>
                            <div class="package-price">
                                <span class="currency">Rp</span>
                                <span class="amount">1.500.000</span>
                                <span class="period">/project</span>
                            </div>
                        </div>
                        
                        <div class="package-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>5 halaman website lengkap</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Bonus link-in-bio custom</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Bukan WordPress</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>CMS untuk update sendiri</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Termasuk hosting 1 tahun</span>
                            </div>
                        </div>
                        
                        <div class="package-footer">
                            <a href="/contact" class="btn-package">
                                <span>Pilih Paket</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        
                        <div class="additional-options">
                            <p class="additional-title">Tambahan:</p>
                            <div class="additional-item">
                                <i class="fas fa-plus-circle"></i>
                                <span>Domain: +300rb/tahun</span>
                            </div>
                            <div class="additional-item">
                                <i class="fas fa-plus-circle"></i>
                                <span>Halaman tambahan: 150rb/halaman</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="450">
                    <div class="package-card-3d popular">
                        <div class="popular-ribbon">
                            <span>⭐ BEST SELLER</span>
                        </div>
                        <div class="package-header">
                            <h3 class="package-name">CUSTOM WEB 1 HALAMAN</h3>
                            <div class="package-price">
                                <span class="currency">Rp</span>
                                <span class="amount">3.000.000</span>
                                <span class="period">/project</span>
                            </div>
                        </div>
                        
                        <div class="package-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>1 halaman landing page</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Full custom design</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Desain sesuai branding</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>CMS untuk update sendiri</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Sudah termasuk domain & hosting</span>
                            </div>
                        </div>
                        
                        <div class="package-footer">
                            <a href="/contact" class="btn-package">
                                <span>Pilih Paket</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        
                        <div class="additional-options">
                            <p class="additional-title">Tambahan:</p>
                            <div class="additional-item">
                                <i class="fas fa-plus-circle"></i>
                                <span>Gratis 1 email perusahaan (12 bulan)</span>
                            </div>
                            <div class="additional-item">
                                <i class="fas fa-plus-circle"></i>
                                <span>Tambahan halaman: 1-2 juta</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-company-section py-5 bg-gradient-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="about-badge">
                        <span class="section-badge bg-danger">🏢 TENTANG KAMI</span>
                    </div>
                    <h2 class="about-title">PT. Santano Teknologi Nusantara</h2>
                    <h3 class="about-subtitle">Mitra Digital Terpercaya untuk Transformasi Bisnis Anda</h3>
                    
                    <p class="about-text">Kami memiliki misi untuk membantu para pelanggan kami dalam mewujudkan sistem yang ter-custom sesuai dengan tujuan dan konsep branding mereka. Sehingga bisnis mereka dapat lebih berkembang, bersistem, dan membantu produktivitas kerja lebih meningkat.</p>
                    
                    <div class="about-stats-grid">
                        <div class="stat-box">
                            <div class="stat-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div class="stat-content">
                                <h4><span class="counter" data-target="50">0</span>+</h4>
                                <p>Project Selesai</p>
                            </div>
                        </div>
                        
                        <div class="stat-box">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-content">
                                <h4><span class="counter" data-target="30">0</span>+</h4>
                                <p>Klien Puas</p>
                            </div>
                        </div>
                        
                        <div class="stat-box">
                            <div class="stat-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="stat-content">
                                <h4><span class="counter" data-target="5">0</span>+</h4>
                                <p>Tahun Pengalaman</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="about-cta">
                        <a href="/about" class="btn-learn-more">
                            <span>Pelajari Lebih Lanjut</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-image-grid">
                        <div class="grid-item item-1">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Team Meeting">
                        </div>
                        <div class="grid-item item-2">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1170&q=80" alt="Office">
                        </div>
                        <div class="grid-item item-3">
                            <img src="https://images.unsplash.com/photo-1573164713988-9665fc3f6c26?ixlib=rb-4.0.3&auto=format&fit=crop&w=1169&q=80" alt="Coding">
                        </div>
                        <div class="grid-item item-4">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=1074&q=80" alt="Meeting">
                        </div>
                        
                        <!-- Play Button -->
                        <div class="play-button-wrapper">
                            <a href="#" class="play-button" data-bs-toggle="modal" data-bs-target="#videoModal">
                                <i class="fas fa-play"></i>
                            </a>
                            <span class="play-text">Tonton Video</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section position-relative">
        <div class="cta-bg-particles"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8" data-aos="zoom-in">
                    <h2 class="cta-title">Siap Membawa Bisnis Anda ke Level Berikutnya?</h2>
                    <p class="cta-subtitle">Konsultasikan kebutuhan website Anda dengan tim ahli kami. Gratis!</p>
                    
                    <div class="cta-buttons">
                        <a href="/contact" class="btn-cta-whatsapp">
                            <i class="fab fa-whatsapp me-2"></i>
                            <span>Konsultasi Via WhatsApp</span>
                        </a>
                        <a href="tel:+623112345678" class="btn-cta-phone">
                            <i class="fas fa-phone-alt me-2"></i>
                            <span>Telepon Sekarang</span>
                        </a>
                    </div>
                    
                    <div class="trust-badges">
                        <div class="trust-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Garansi 100%</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-clock"></i>
                            <span>Support 24/7</span>
                        </div>
                        <div class="trust-item">
                            <i class="fas fa-lock"></i>
                            <span>Aman & Terpercaya</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Santano. All rights reserved.</p>
        </div>
    </footer>

    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/5_0rJEUwQeU?si=UuM21d-7gvN4E3_a" title="Company Profile" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            disable: 'mobile'
        });

        // Counter Animation
        function animateCounter() {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = parseInt(counter.getAttribute('data-target'));
                    const count = parseInt(counter.innerText);
                    const increment = Math.trunc(target / speed);

                    if (count < target) {
                        counter.innerText = count + increment;
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
            });
        }

        // Trigger counter when element is in viewport
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter();
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.counter').forEach(counter => {
            observer.observe(counter);
        });

        // Parallax Effect
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrolled = window.pageYOffset;
                    const hero = document.querySelector('.hero-section');
                    if (hero) {
                        hero.style.transform = `translateY(${scrolled * 0.3}px)`;
                    }
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Smooth Scroll
        document.addEventListener('click', (e) => {
            const target = e.target.closest('a[href^="#"]');
            if (target) {
                e.preventDefault();
                const href = target.getAttribute('href');
                if (href !== '#') {
                    const element = document.querySelector(href);
                    if (element) {
                        element.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            }
        });

        // Handle modal video cleanup
        const videoModal = document.getElementById('videoModal');
        if (videoModal) {
            videoModal.addEventListener('hidden.bs.modal', function () {
                const iframe = this.querySelector('iframe');
                if (iframe) {
                    const src = iframe.src;
                    iframe.src = src;
                }
            });
        }

        // Add loading animation untuk stat bars
        document.querySelectorAll('.stat-fill').forEach(bar => {
            const width = bar.style.width;
            bar.style.width = '0';
            setTimeout(() => {
                bar.style.width = width;
            }, 100);
        });
    </script>
</body>
</html>