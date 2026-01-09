<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Elfata Market</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="hero-bg-red"></div>
        <img class="hero-banner-main" src="{{ asset('images/sunburst.png') }}" alt="Hero Banner" />
        <img class="hero-banner-wave" src="{{ asset('images/rumput.png') }}" alt="Dekorasi Spanduk Pahlawan" />
        <div class="hero-section">
            <img class="hero-character-image" src="{{ asset('images/main-banner.png') }}" alt="Gambar Karakter Pahlawan" />

            {{-- Navigation Section --}}
            <a href="/" class="logo">
                <img src="{{ asset('images/logo-tc.png') }}" alt="Logo TC Elfata" />
            </a>

            <button class="nav-hamburger" aria-label="Buka menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <div class="nav__menu-container">
                <nav>
                    <a href="#" class="nav-link-home">Beranda</a>
                    <a href="#" class="nav-link-sektor">Sektor TC Elfata</a>
                    <a href="#" class="nav-link-pendaftaran">Pendaftaran</a>
                    <a href="#" class="nav-link-kontak">Kontak</a>
                </nav>
                <div class="nav-button-group">
                    <div class="btn-secondary-bg"></div>
                    <a href="#" class="nav-link-daftar">Daftar Sekarang</a>
                </div>
            </div>
            <div class="nav-link-home-underline"></div> {{-- Underline for Beranda --}}

            {{-- Main Content Section --}}
            <h1 class="hero-title">Menghafal Al-Qur'an<br/>Jadi Lebih Seru dan<br/>Menyenangkan!</h1>
            <p class="hero-description">Memadukan metode tahfidz yang efektif dengan<br class="desktop-break" />kegiatan interaktif untuk membangun karakter<br class="desktop-break" /> ananda yang cerdas dan ceria.</p>
            <div class="hero-button-group">
                <div class="btn-primary-bg"></div> {{-- Background for Lihat Program Kami button --}}
                <a href="#featured-programs-section" class="hero-button">Lihat Program Kami</a>
                <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow Right Icon" class="arrow-right-icon">
            </div>

            {{-- Decorative Elements --}}
            <img class="hero-star-1" src="{{ asset('images/bintang-1.png') }}" alt="Dekorasi Bintang Emas" />
            <img class="hero-star-2" src="{{ asset('images/bintang-2.png') }}" alt="Dekorasi Bintang Emas" />
        </div>


        {{-- Stats Section --}}
        <section class="stats-wrapper">
            <div class="stats">
                <div class="stats__container">
                    {{-- Stat Item 1: Alumni --}}
                    <div class="stats__item">
                        <div class="stats__icon-wrapper">
                            {{-- TODO: Replace this div with an actual SVG icon --}}
                                                    <div class="stats__icon-placeholder--graduation">
                                                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M29.4525 14.5627C29.6986 14.4574 29.9075 14.2844 30.0533 14.0651C30.199 13.8458 30.2752 13.5899 30.2724 13.329C30.2697 13.0681 30.188 12.8138 30.0376 12.5975C29.8872 12.3811 29.6747 12.2123 29.4264 12.112L17.6412 6.90667C17.283 6.74821 16.8938 6.6662 16.5 6.6662C16.1062 6.6662 15.717 6.74821 15.3587 6.90667L3.575 12.1067C3.3302 12.2106 3.12196 12.3815 2.97573 12.5984C2.82949 12.8153 2.75162 13.0689 2.75162 13.328C2.75162 13.5872 2.82949 13.8407 2.97573 14.0576C3.12196 14.2745 3.3302 14.4454 3.575 14.5493L15.3587 19.76C15.717 19.9185 16.1062 20.0005 16.5 20.0005C16.8938 20.0005 17.283 19.9185 17.6412 19.76L29.4525 14.5627Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M30.25 13.3333V21.3333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M8.25 16.6667V21.3334C8.25 22.3942 9.11919 23.4116 10.6664 24.1618C12.2135 24.9119 14.312 25.3334 16.5 25.3334C18.688 25.3334 20.7865 24.9119 22.3336 24.1618C23.8808 23.4116 24.75 22.3942 24.75 21.3334V16.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>                        </div>
                        <div class="stats__content">
                            <div class="stats__number">200+</div>
                            <p class="stats__label">Santri telah menjadi alumni di<br/>Tahfidz Children Elfata</p>
                        </div>
                    </div>

                    {{-- Stat Item 2: Active Students --}}
                    <div class="stats__item">
                        <div class="stats__icon-wrapper">
                            {{-- TODO: Replace this div with an actual SVG icon --}}
                                                    <div class="stats__icon-placeholder--users">
                                                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M22 28V25.3333C22 23.9188 21.4205 22.5623 20.3891 21.5621C19.3576 20.5619 17.9587 20 16.5 20H8.25C6.79131 20 5.39236 20.5619 4.36091 21.5621C3.32946 22.5623 2.75 23.9188 2.75 25.3333V28" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M22 4.17065C23.1794 4.46715 24.2239 5.13501 24.9696 6.0694C25.7152 7.0038 26.1198 8.15184 26.1198 9.33332C26.1198 10.5148 25.7152 11.6628 24.9696 12.5972C24.2239 13.5316 23.1794 14.1995 22 14.496" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M30.25 28V25.3333C30.2491 24.1516 29.8435 23.0037 29.0969 22.0698C28.3503 21.1358 27.3049 20.4688 26.125 20.1733" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M12.375 14.6667C15.4126 14.6667 17.875 12.2789 17.875 9.33333C17.875 6.38781 15.4126 4 12.375 4C9.33743 4 6.875 6.38781 6.875 9.33333C6.875 12.2789 9.33743 14.6667 12.375 14.6667Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>                        </div>
                        <div class="stats__content">
                            <div class="stats__number">208</div>
                            <p class="stats__label">Total santri yang masih aktif di<br/>Tahfidz Children Elfata</p>
                        </div>
                    </div>

                    {{-- Stat Item 3: Sectors --}}
                    <div class="stats__item">
                        <div class="stats__icon-wrapper">
                            {{-- TODO: Replace this div with an actual SVG icon --}}
                                                    <div class="stats__icon-placeholder--map">
                                                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M26.7163 17.2467C27.2071 15.9574 27.5 14.64 27.5 13.3334C27.5 10.5044 26.3411 7.79127 24.2782 5.79088C22.2153 3.79049 19.4174 2.66669 16.5 2.66669C13.5826 2.66669 10.7847 3.79049 8.72183 5.79088C6.65893 7.79127 5.5 10.5044 5.5 13.3334C5.5 19.9907 13.1161 26.924 15.6736 29.0654C15.9119 29.2391 16.2019 29.333 16.5 29.333C16.7981 29.333 17.0881 29.2391 17.3264 29.0654C17.7046 28.7479 18.0773 28.4243 18.4442 28.0947" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M16.5 17.3333C18.7782 17.3333 20.625 15.5425 20.625 13.3333C20.625 11.1242 18.7782 9.33331 16.5 9.33331C14.2218 9.33331 12.375 11.1242 12.375 13.3333C12.375 15.5425 14.2218 17.3333 16.5 17.3333Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M22 24L24.75 26.6666L30.25 21.3333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </div>                        </div>
                        <div class="stats__content">
                            <div class="stats__number">15</div>
                            <p class="stats__label">Total sektor masjid yang<br/>telah bekerja sama</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Featured Programs Section --}}
        <section id="featured-programs-section" class="featured-programs">
            <div class="featured-programs__container">
                <header class="featured-programs__header">
                    <div class="featured-programs__pill">
                        <h2 class="featured-programs__title">Program Unggulan</h2>
                    </div>
                    <h3 class="featured-programs__subtitle">Membangun Generasi Qur'ani <br> yang Cerdas & Berprestasi</h3>
                    <p class="featured-programs__description">Bersama Program Unggulan Elfata, kami membimbing buah hati <br class="desktop-break" />Anda mencintai Al-Qur'an sambil tetap menikmati masa <br class="desktop-break" />kecil yang aktif dan penuh prestasi.</p>
                </header>

                <div class="featured-programs__grid">
                    {{-- Program Card 1 --}}
                    <article class="program-card">
                        <img class="program-card__image" src="images/thumb-camp.png" alt="An activity at Elfata Tahfidz Camp" />
                        <div class="program-card__content">
                            <h4 class="program-card__title">Elfata Tahfidz Camp</h4>
                            <p class="program-card__description">Kegiatan belajar di alam terbuka untuk memperkuat hafalan sekaligus dapat membangun kemandirian dan kecintaan pada alam.</p>
                            <a href="#" class="program-card__link">
                                Lihat lebih lanjut
                                <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow Right Icon" />
                            </a>
                        </div>
                    </article>

                    {{-- Program Card 2 --}}
                    <article class="program-card">
                        <img class="program-card__image" src="images/thumb-grad.png" alt="Graduation ceremony for Elfata students" />
                        <div class="program-card__content">
                            <h4 class="program-card__title">Wisudah Santri Elfata</h4>
                            <p class="program-card__description">Bentuk apresiasi dan selebrasi atas pencapaian santri dalam menuntaskan target hafalan Al-Qur'an mereka.</p>
                            <a href="#" class="program-card__link">
                                Lihat lebih lanjut
                                <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow Right Icon" />
                            </a>
                        </div>
                    </article>

                    {{-- Program Card 3 --}}
                    <article class="program-card">
                        <img class="program-card__image" src="images/thumb-cup.png" alt="Elfata Cup competition" />
                        <div class="program-card__content">
                            <h4 class="program-card__title">Elfata Cup</h4>
                            <p class="program-card__description">Wadah kompetisi untuk mengasah bakat, sportivitas, dan kerja sama tim melalui berbagai ajang kreativitas dan olahraga.</p>
                            <a href="#" class="program-card__link">
                                Lihat lebih lanjut
                                <img src="{{ asset('images/arrow-right.svg') }}" alt="Arrow Right Icon" />
                            </a>
                        </div>
                    </article>
                </div>
            </div>

            {{-- Background decorative images --}}

            <img class="featured-programs__bg-left" src="images/lingkaran-1.png" alt="" />
            <img class="featured-programs__bg-right" src="images/lingkaran-2.png" alt="" />
        </section>

        <section class="registration-info">
            <div class="registration-info__container">
                <header class="registration-info__header">
                    <div class="registration-info__pill">
                        <h2 class="registration-info__title">Pendaftaran Santri</h2>
                    </div>
                    <h3 class="registration-info__subtitle">Informasi Pendaftaran<br/>Santri Tahfidz Children Elfata</h3>
                    <p class="registration-info__description">Akses informasi lengkap mengenai syarat pendaftaran, <br class="desktop-break" />biaya pendidikan, dan jadwal seleksi hanya dalam satu klik.</p>
                </header>

                <div class="info-accordion">
                    <article class="info-item info-item--expanded">
                        <div class="info-item__header">
                            <h4 class="info-item__title">Persyaratan</h4>
                            <div class="info-item__toggle-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="info-item__body">
                            <p>1. Usia umur 7-15 tahun.<br/>2. Bisa membaca Al-Qur’an (khusus tahfidz).<br/>3. Mendapatkan izin dari orang tua.</p>
                        </div>
                    </article>
                    <article class="info-item">
                        <div class="info-item__header">
                            <h4 class="info-item__title">Fasilitas</h4>
                            <div class="info-item__toggle-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="info-item__body">
                            <p>1. Metode yang praktifs & berkualitas. <br/> 2. Mushaf hafalan metode elfata juz 30, jilid 1. <br/> 3. Ijazah.  </p>
                        </div>
                    </article>
                    <article class="info-item">
                        <div class="info-item__header">
                            <h4 class="info-item__title">Jadwal</h4>
                            <div class="info-item__toggle-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="info-item__body">
                            <p>1. Hari Senin-Jumat <br/> 2. Pukul 16.00 - 20.00 WITA </p>
                        </div>
                    </article>
                    <article class="info-item">
                        <div class="info-item__header">
                            <h4 class="info-item__title">Biaya Tahfidz</h4>
                            <div class="info-item__toggle-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="info-item__body">
                            <p>1. Biaya pendaftaran : Rp1.000.000 <br/> 2. Biaya Bulanan : Rp200.000</p>
                        </div>
                    </article>
                    <article class="info-item">
                        <div class="info-item__header">
                            <h4 class="info-item__title">Bonus Kelas</h4>
                            <div class="info-item__toggle-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="info-item__body">
                            <p>1. Bonus kelas bahasa inggris <br/> 2. Bonus kelas bahasa arab </p>
                        </div>
                    </article>
                </div>
            </div>

            {{-- Background decorative images --}}
            
            <img class="registration-info__bg-deco-1" src="images/element-right.png" alt="" />
            <img class="registration-info__bg-deco-2" src="images/element-left.png" alt="" />
            <img class="registration-info__polaroid-1" src="images/polaroid-1.png" alt="" />
            <img class="registration-info__polaroid-2" src="images/polaroid-2.png" alt="" />
        </section>

        <section class="testimonials">
            <div class="testimonials__container">
                <header class="testimonials__header">
                    <div class="testimonials__pill">
                        <h2 class="testimonials__title">Testimonial Orang Tua</h2>
                    </div>
                    <h3 class="testimonials__subtitle">Testimoni & Pengalaman Belajar<br class="desktop-break" />di Tahfidz Children ElFata</h3>
                    <p class="testimonials__description">Mari dengarkan langsung pengalaman mereka yang telah menjadi<br class="desktop-break" />bagian dari keluarga besar Tahfidz Children El-Fata.</p>
                </header>

                @php
                    $testimonials = [
                        [
                            'text' => 'Programnya luar biasa! Anak saya jadi lebih semangat mengaji dan hafalannya bertambah cepat. Lingkungannya juga sangat mendukung.',
                            'name' => 'Bapak Abdullah'
                        ],
                        [
                            'text' => 'Alhamdulillah, metode pembelajarannya sangat cocok untuk anak-anak. Guru-gurunya sabar dan kreatif. Terima kasih Elfata!',
                            'name' => 'Ibu Fatimah'
                        ],
                        [
                            'text' => 'Selain fokus pada hafalan, di sini juga diajarkan adab dan kemandirian. Anak saya menunjukkan perkembangan karakter yang positif.',
                            'name' => 'Abu Hafiz'
                        ],
                        [
                            'text' => 'Kegiatan outdoor seperti Tahfidz Camp membuat anak tidak bosan dan justru semakin termotivasi untuk belajar bersama teman-temannya.',
                            'name' => 'Ummu Aisyah'
                        ],
                        [
                            'text' => 'Awalnya ragu anak saya bisa mengikuti, tapi ternyata pendekatannya sangat ramah anak. Sekarang setiap hari selalu cerita pengalamannya di Elfata.',
                            'name' => 'Bapak Sulaiman'
                        ],
                        [
                            'text' => 'Fasilitas dan keamanannya terjaga dengan baik. Sebagai orang tua, saya merasa tenang menitipkan anak belajar di sini. Sangat direkomendasikan.',
                            'name' => 'Ibu Maryam'
                        ],
                    ];
                @endphp
                <div class="testimonial-grid">
                    {{-- Testimonial Cards --}}
                    @foreach ($testimonials as $testimonial)
                    <article class="testimonial-card">
                        <p class="testimonial-card__text">{{ $testimonial['text'] }}</p>
                        <div class="testimonial-card__author">
                            <div class="testimonial-card__avatar">
                                {{ strtoupper(substr($testimonial['name'], 0, 1)) }}
                            </div>
                            <div>
                                <div class="testimonial-card__author-name">{{ $testimonial['name'] }}</div>
                                <div class="testimonial-card__author-role">Orang Tua Santri</div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
            {{-- Decorative elements --}}
            <img class="testimonials__bg-star-1" src="images/bintang-3.png" alt="" />
            <img class="testimonials__bg-star-2" src="images/bintang-4.png" alt="" />
            <img class="testimonials__bg-star-3" src="images/bintang-5.png" alt="" />
        </section>

        <section class="map-sector">
            <div class="map-sector__container">
                <div class="map-sector__content">
                    <h3 class="map-sector__title">Temukan Sektor Elfata<br/>Terdekat dari Rumah Anda</h3>
                    <p class="map-sector__description">Lihat peta di bawah ini untuk melihat lokasi sektor<br class="desktop-break" /> yang paling dekat dengan domisili Anda.</p>
                    <a href="#" class="map-sector__button">
                        <span>Lihat Peta Sektor</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="gallery__container">
                <header class="gallery__header">
                    <div class="gallery__pill">
                        <h2 class="gallery__title">Galeri Santri</h2>
                    </div>
                    <h3 class="gallery__subtitle">Potret Aktivitas Harian<br class="desktop-break" /> Tahfidz</h3>
                    <p class="gallery__description">Dokumentasi momen-momen berharga santri<br class="desktop-break" />dalam menghafal Al-Qur'an dan belajar.</p>
                </header>

                @php
                    $galleryImages = [
                        'gallery-1.jpg',
                        'gallery-2.jpg',
                        'gallery-3.jpg',
                        'gallery-4.png',
                        'gallery-5.jpg',
                        'gallery-6.jpg',
                    ];
                @endphp
                <div class="gallery__grid">
                    @foreach ($galleryImages as $imageName)
                        <div class="gallery__item">
                            <img src="{{ asset('images/gallery/' . $imageName) }}" alt="Galeri foto santri Tahfidz Children Elfata">
                        </div>
                    @endforeach
                </div>
                
                <div class="gallery__nav">
                    <button class="gallery__nav-button gallery__nav-button--prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6L9 12L15 18" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="gallery__nav-button gallery__nav-button--next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            {{-- Decorative elements --}}
            <img class="gallery__bg-star-1" src="images/bintang-3.png" alt="" />
            <img class="gallery__bg-star-2" src="images/bintang-4.png" alt="" />
            <img class="gallery__bg-star-3" src="images/bintang-5.png" alt="" />
        </section>

        {{-- CTA Section --}}
        <section class="cta">
            <div class="cta__container">
                <header class="cta__header">
                    <div class="cta__pill">
                        <h2 class="cta__title">Siap Memulai Perjalanan Qur’ani?</h2>
                    </div>
                    <h3 class="cta__subtitle">Pendaftaran Santri Baru Tahfidz<br class="desktop-break" /> Children Elfata Masih Dibuka!</h3>
                    <p class="cta__description">Mari bergabung bersama keluarga besar Tahfidz Children El-Fata<br class="desktop-break" />dan mari tumbuh bersama dalam cahaya Al-Qur'an.</p>
                </header>

                <div class="cta__buttons">
                    <a href="#" class="cta__button cta__button--primary">Konsultasi Pendaftaran Gratis</a>
                    <a href="#" class="cta__button cta__button--secondary">Hubungi Kami</a>
                </div>
            </div>

            {{-- Decorative elements --}}


            <img class="cta__polaroid-1" src="{{ asset('images/polaroid-1.png') }}" alt="" />
            <img class="cta__polaroid-2" src="{{ asset('images/polaroid-2.png') }}" alt="" />
            <img class="cta__star-1" src="{{ asset('images/bintang-1.png') }}" alt="" />
            <img class="cta__star-2" src="{{ asset('images/bintang-2.png') }}" alt="" />
        </section>

        {{-- Footer Section --}}
        <footer class="footer">
            <div class="footer__container">
                <div class="footer__column footer__column--about">
                    <a href="/" class="footer__logo">
                        <img src="{{ asset('images/logo-tc-back.png') }}" alt="Logo TC Elfata">
                    </a>
                    <p class="footer__description">
                        Tahfidz Children Elfata adalah lembaga <br/>
                        pendidikan Al-Qur’an untuk menghafal <br/>
                        Al-Qur’an tanpa harus meninggalkan <br/>
                        pendidikan formalnya.
                    </p>
                </div>
                <div class="footer__column footer__column--contact">
                    <h5 class="footer__title">Alamat kantor</h5>
                    <p class="footer__address">
                        Jl. Benteng Somba Opu No.84 Dusun Tombolo,<br/>
                        Desa Jene’tallasa Kec. Pallangga, Kab. Gowa
                    </p>
                    <h5 class="footer__title">Hubungi kami</h5>
                    <p class="footer__phone">0823-6416-2456</p>
                </div>
                <div class="footer__column footer__column--social">
                    <h5 class="footer__title">Sosial media</h5>
                    <div class="footer__social-links">
                        <a href="https://www.instagram.com/tahfidzchildrenelfata/?hl=en" class="footer__social-icon">
                            {{-- Placeholder for Instagram Icon --}}
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 20 2 17 2Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.5 6.5V6.501" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/Tahfidz-Children-Elfata-Indonesia-100090282076208/" class="footer__social-icon">
                            {{-- Placeholder for Facebook Icon --}}
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/@El-FataTv" class="footer__social-icon">
                            {{-- Placeholder for Youtube Icon --}}
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.5398 6.42C22.4203 5.95085 22.1852 5.52047 21.8595 5.1741C21.5338 4.82773 21.129 4.5778 20.6798 4.44C18.8798 4 11.9998 4 11.9998 4C11.9998 4 5.11984 4 3.31984 4.44C2.87069 4.5778 2.46585 4.82773 2.14019 5.1741C1.81452 5.52047 1.57946 5.95085 1.45984 6.42C1.07655 8.26121 0.991211 10.134 0.991211 12C0.991211 13.866 1.07655 15.7388 1.45984 17.58C1.57928 18.0491 1.81434 18.4795 2.14001 18.8259C2.46568 19.1723 2.87052 19.4222 3.31984 19.56C5.11984 20 11.9998 20 11.9998 20C11.9998 20 18.8798 20 20.6798 19.56C21.129 19.4222 21.5338 19.1723 21.8595 18.8259C22.1852 18.4795 22.4203 18.0491 22.5398 17.58C22.9231 15.7388 23.0084 13.866 23.0084 12C23.0084 10.134 22.9231 8.26121 22.5398 6.42Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.75 15.02L15.5 12L9.75 8.98V15.02Z" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <p>&copy; 2024 Tahfidz Children Elfata. All rights reserved.</p>
            </div>
        </footer>

        <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elem = document.querySelector('.gallery__grid');
                if (elem) {
                    var msnry = new Masonry(elem, {
                        // options
                        itemSelector: '.gallery__item',
                        columnWidth: '.gallery__item',
                        gutter: 20,
                        percentPosition: true
                    });

                    // Ensure images are loaded before layout
                    imagesLoaded(elem).on('progress', function() {
                        msnry.layout();
                    });
                }
            });
        </script>
    </body>
</html>

