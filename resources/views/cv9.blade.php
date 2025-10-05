@extends('layouts.app')

@section('title', 'About | Muhammad Nabil')

@section('content')
    <!-- About Section -->
    <section class="w-full min-h-[60vh] flex items-center justify-center px-6 mt-10 
        bg-gradient-to-b from-gray-900 via-gray-950 to-black">
        <div class="flex flex-wrap items-center justify-center gap-8 max-w-5xl w-full">
            <div class="flex-1 flex justify-center">
                <img src="{{ asset('images/profile.jpg') }}" alt="Foto Nabil"
                    class="w-64 h-64 rounded-full object-cover border-4 border-indigo-500 shadow-lg shadow-fuchsia-500/30" />
            </div>
            <div class="flex-2 max-w-xl">
                <h1 class="text-3xl font-bold bg-gradient-to-r from-indigo-400 via-purple-400 to-fuchsia-400 bg-clip-text text-transparent mb-4 drop-shadow-lg">
                    Who am I?
                </h1>
                <p class="mb-4 leading-relaxed text-gray-300">
                    Halo! saya <strong class="text-indigo-400">Muhammad Nabil</strong>, Santi Pondok Pesantren Hubbul Khoir Sukoharjo.
                    Memiliki passion dan pengalaman dalam pembuatan dan pengembangan web dengan 
                    <strong class="text-fuchsia-400">HTML, CSS, JavaScript, dan Laravel</strong>. 
                    Saya memiliki motivasi tinggi untuk terus belajar, berkembang, dan berkontribusi dalam 
                    pengembangan aplikasi baik di bidang <strong class="text-indigo-400">frontend</strong> 
                    maupun <strong class="text-fuchsia-400">backend</strong>.
                </p>
                <p class="leading-relaxed text-gray-400">
                    Visi saya adalah menciptakan aplikasi khusus pelajar yang memiliki dampak nyata
                    bagi banyak orang yang masih ingin belajar.
                </p>
            </div>
        </div>
    </section>

    <!-- Education -->
    <section class="px-6 py-12 bg-gradient-to-b from-black via-gray-950 to-gray-900">
        ...
    </section>

    <!-- Experience -->
    <section class="px-6 py-12 bg-gradient-to-b from-gray-900 via-black to-gray-950">
        ...
    </section>

    <!-- Skills -->
    <section class="px-6 py-12 bg-gradient-to-b from-gray-900 via-black to-gray-950">
        ...
    </section>
@endsection
