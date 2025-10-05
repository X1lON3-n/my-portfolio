@extends('layouts.app')

@section('title', 'Portfolio | Muhammad Nabil')

@section('content')
<section class="relative py-20 px-6 text-center bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white overflow-hidden">

    <!-- Efek Aksen Glow -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute w-[600px] h-[600px] bg-purple-500/20 rounded-full blur-3xl top-10 left-10"></div>
        <div class="absolute w-[500px] h-[500px] bg-pink-500/20 rounded-full blur-3xl bottom-20 right-20"></div>
        <div class="absolute w-[400px] h-[400px] bg-blue-500/20 rounded-full blur-2xl top-1/3 right-1/3"></div>
    </div>

    <!-- Heading -->
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4 
               text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-500 to-blue-400 drop-shadow-lg">
        My Projects
    </h1>
    <p class="text-gray-300 text-lg mb-12">Beberapa project yang pernah saya kerjakan 👇</p>

    <!-- Grid Project Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        
        <!-- Card Template -->
       <!-- <div class="group bg-white/5 rounded-xl overflow-hidden shadow-lg border border-white/10 
                    hover:shadow-purple-500/40 hover:-translate-y-2 transition transform duration-300">
            <img src="{{ asset('images/tpa.png') }}" alt="Project TPA" class="w-full h-52 object-cover group-hover:scale-105 transition">
            <div class="p-6 text-left">
                <h3 class="text-xl font-semibold text-purple-400 mb-2">TPA Web</h3>
                <p class="text-gray-300 mb-4">Aplikasi web untuk memonitor hafalan siswa dan kehadiran pengajar di TPA AL-Mubarok.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-laravel"></i> Laravel</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-css3-alt"></i> Tailwind</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-php"></i> PHP</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-solid fa-database"></i> MySQL</span>
                </div>
            </div>
        </div>-->

        <!-- Card 2 -->
       <!-- <div class="group bg-white/5 rounded-xl overflow-hidden shadow-lg border border-white/10 
                    hover:shadow-purple-500/40 hover:-translate-y-2 transition transform duration-300">
            <img src="{{ asset('images/bioakustik.png') }}" alt="Dashboard Bioakustik" class="w-full h-52 object-cover group-hover:scale-105 transition">
            <div class="p-6 text-left">
                <h3 class="text-xl font-semibold text-purple-400 mb-2">Dashboard Bioakustik</h3>
                <p class="text-gray-300 mb-4">Dashboard untuk analisis biodiversitas dengan data audio real-time.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-react"></i> Next.js</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-node-js"></i> Node.js</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-solid fa-code"></i> REST API</span>
                </div>
            </div>
        </div>-->

        <!-- Card 3 -->
       <!-- <div class="group bg-white/5 rounded-xl overflow-hidden shadow-lg border border-white/10 
                    hover:shadow-purple-500/40 hover:-translate-y-2 transition transform duration-300">
            <img src="{{ asset('images/toko-buku.png') }}" alt="Toko Buku Online" class="w-full h-52 object-cover group-hover:scale-105 transition">
            <div class="p-6 text-left">
                <h3 class="text-xl font-semibold text-purple-400 mb-2">Toko Buku Online</h3>
                <p class="text-gray-300 mb-4">Aplikasi toko buku online sederhana berbasis web.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-laravel"></i> Laravel</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-css3-alt"></i> Tailwind</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-php"></i> PHP</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-solid fa-database"></i> MySQL</span>
                </div>
            </div>
        </div>-->

        <!-- Card 4 -->
       <!-- <div class="group bg-white/5 rounded-xl overflow-hidden shadow-lg border border-white/10 
                    hover:shadow-purple-500/40 hover:-translate-y-2 transition transform duration-300">
            <img src="{{ asset('images/perpustakaan.png') }}" alt="Perpustakaan Online" class="w-full h-52 object-cover group-hover:scale-105 transition">
            <div class="p-6 text-left">
                <h3 class="text-xl font-semibold text-purple-400 mb-2">Perpustakaan Online</h3>
                <p class="text-gray-300 mb-4">Sistem web untuk peminjaman buku secara online.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-laravel"></i> Laravel</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-css3-alt"></i> Tailwind</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-php"></i> PHP</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-solid fa-database"></i> MySQL</span>
                </div>
            </div>
        </div>-->

        <!-- Card 5 -->
      <!--  <div class="group bg-white/5 rounded-xl overflow-hidden shadow-lg border border-white/10 
                    hover:shadow-purple-500/40 hover:-translate-y-2 transition transform duration-300">
            <img src="{{ asset('images/undangan.png') }}" alt="Undangan Pernikahan Digital" class="w-full h-52 object-cover group-hover:scale-105 transition">
            <div class="p-6 text-left">
                <h3 class="text-xl font-semibold text-purple-400 mb-2">Undangan Pernikahan Digital</h3>
                <p class="text-gray-300 mb-4">Undangan pernikahan berbasis web dengan tampilan modern.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-html5"></i> HTML</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-css3-alt"></i> CSS</span>
                    <span class="px-3 py-1 bg-purple-600/30 rounded-md text-sm flex items-center gap-2"><i class="fa-brands fa-js"></i> JavaScript</span>
                </div>
            </div>
        </div>-->

    </div>
</section>
@endsection
