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
                    Who am I ?
                </h1>
                <p class="mb-4 leading-relaxed text-gray-300">
                    Halo! saya <strong class="text-indigo-400">Muhammad Nabil</strong>, Santi Pondok Pesantren Hubbul Khoir Sukoharjo.
                    Memiliki passion dan pengalaman dalam pembuatan dan pengembangan web dengan 
                    <strong class="text-fuchsia-400">HTML, CSS, dan Laravel</strong>. 
                    Saya memiliki motivasi tinggi untuk terus belajar, berkembang, dan berkontribusi dalam 
                    pengembangan aplikasi baik di bidang <strong class="text-indigo-400">Frontend</strong> 
                    maupun <strong class="text-fuchsia-400">Backend</strong>.
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
        <h2 class="text-3xl font-bold text-center bg-gradient-to-r from-indigo-400 via-purple-400 to-fuchsia-400 bg-clip-text text-transparent mb-8">
            Pendidikan
        </h2>
        <div class="max-w-3xl mx-auto flex flex-col gap-6">
            <div class="relative bg-white/5 p-6 border-l-4 border-fuchsia-500 rounded-lg shadow hover:shadow-fuchsia-500/20 transition">
                <h3 class="text-lg font-semibold text-indigo-400">Kelas 11 Jurusan Programming</h3>
                <span class="text-sm text-gray-400 block mb-2">Pondok Pesantren Hubbul Khoir Sukoharjo | 2024 - 2026</span>
                <p class="text-gray-300">Programming</p>
            </div>
        </div>
    </section>

    <!-- Experience -->
    <section class="px-6 py-12 bg-gradient-to-b from-gray-900 via-black to-gray-950">
        <h2 class="text-3xl font-bold text-center bg-gradient-to-r from-fuchsia-400 via-purple-400 to-indigo-400 bg-clip-text text-transparent mb-8">
            Pengalaman
        </h2>
        <div class="max-w-3xl mx-auto flex flex-col gap-6">
            <div class="relative bg-white/5 p-6 border-l-4 border-indigo-500 rounded-lg shadow hover:shadow-indigo-500/20 transition">
                <h3 class="text-lg font-semibold text-fuchsia-400">OSN Matematika SMP 2023</h3>
                <span class="text-sm text-gray-400 block mb-2"> Kabupaten Mojokerto | 2023 </span>
                <p class="text-gray-300">Meraih Juara 2 pada Tingkat Kabupaten</p>
            </div>

            <div class="relative bg-white/5 p-6 border-l-4 border-fuchsia-500 rounded-lg shadow hover:shadow-fuchsia-500/20 transition">
                <h3 class="text-lg font-semibold text-indigo-400">OSN Matematika SMA 2025</h3>
                <span class="text-sm text-gray-400 block mb-2"> Kabupaten Sukoharjo | 2025</span>
                <p class="text-gray-300">
                    Mengikuti OSN SMA Tingkat Kabupaten pada Tahun 2025
                </p>
            </div>
        </div>
       <!-- <div class="max-w-3xl mx-auto flex flex-col gap-6">
            <div class="relative bg-white/5 p-6 border-l-4 border-indigo-500 rounded-lg shadow hover:shadow-indigo-500/20 transition">
                <h3 class="text-lg font-semibold text-fuchsia-400">Web Developer Intern</h3>
                <span class="text-sm text-gray-400 block mb-2">CV. Creative Gama Studio | Feb 2024 - Mar 2024</span>
                <p class="text-gray-300">Mengembangkan SISFOKOL (Sistem Informasi Sekolah) menggunakan PHP.</p>
            </div>

            <div class="relative bg-white/5 p-6 border-l-4 border-fuchsia-500 rounded-lg shadow hover:shadow-fuchsia-500/20 transition">
                <h3 class="text-lg font-semibold text-indigo-400">Frontend Developer</h3>
                <span class="text-sm text-gray-400 block mb-2">PT. CovWatch Karya Nusantara | Sep 2024 - Apr 2025</span>
                <p class="text-gray-300">
                    Membangun Dashboard Bioakustik untuk mengidentifikasi keanekaragaman hayati di ekosistem buatan
                    menggunakan Next.js.
                </p>
            </div>
        </div>-->
    </section>

    <!-- Certification -->
   <!-- <section class="px-6 py-12 bg-gradient-to-b from-black via-gray-950 to-gray-900">
        <h2 class="text-3xl font-bold text-center bg-gradient-to-r from-indigo-400 via-purple-400 to-fuchsia-400 bg-clip-text text-transparent mb-8">
            Sertifikasi
        </h2>
        <div class="max-w-3xl mx-auto flex flex-col gap-6">
            <div class="relative bg-white/5 p-6 border-l-4 border-indigo-500 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-fuchsia-400">HTML and CSS</h3>
                <span class="text-sm text-gray-400">HK | November 2025</span>
            </div>
            <div class="relative bg-white/5 p-6 border-l-4 border-fuchsia-500 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-indigo-400">Laravel</h3>
                <span class="text-sm text-gray-400">HK | November 2025</span>
            </div>
            <div class="relative bg-white/5 p-6 border-l-4 border-purple-500 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-purple-400">Web Developer</h3>
                <span class="text-sm text-gray-400">HK | November 2025</span>
            </div>
        </div>
    </section>->

    <!-- Skills -->
    <section class="px-6 py-12 bg-gradient-to-b from-gray-900 via-black to-gray-950">
        <h2 class="text-3xl font-bold text-center bg-gradient-to-r from-fuchsia-400 via-purple-400 to-indigo-400 bg-clip-text text-transparent mb-8">
            Skills
        </h2>
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="bg-white/5 border border-white/10 rounded-lg p-4 flex items-center gap-4 hover:-translate-y-1 hover:shadow-lg hover:border-fuchsia-500 transition">
                <i class="fa-brands fa-html5 text-3xl text-orange-500"></i>
                <div>
                    <h3 class="text-white font-semibold">HTML</h3>
                    <p class="text-sm text-gray-400">Markup Language</p>
                </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-lg p-4 flex items-center gap-4 hover:-translate-y-1 hover:shadow-lg hover:border-indigo-500 transition">
                <i class="fa-brands fa-css3 text-3xl text-blue-500"></i>
                <div>
                    <h3 class="text-white font-semibold">CSS</h3>
                    <p class="text-sm text-gray-400">Styling</p>
                </div>
            </div>

           <!-- <div class="bg-white/5 border border-white/10 rounded-lg p-4 flex items-center gap-4 hover:-translate-y-1 hover:shadow-lg hover:border-fuchsia-500 transition">
                <i class="fa-brands fa-js text-3xl text-yellow-400"></i>
                <div>
                    <h3 class="text-white font-semibold">JavaScript</h3>
                    <p class="text-sm text-gray-400">Programming</p>
                </div>
            </div>-->

            <!--<div class="bg-white/5 border border-white/10 rounded-lg p-4 flex items-center gap-4 hover:-translate-y-1 hover:shadow-lg hover:border-indigo-500 transition">
                <i class="fa-brands fa-react text-3xl text-cyan-400"></i>
                <div>
                    <h3 class="text-white font-semibold">Next.js</h3>
                    <p class="text-sm text-gray-400">Framework</p>
                </div>
            </div>-->

            <!--<div class="bg-white/5 border border-white/10 rounded-lg p-4 flex items-center gap-4 hover:-translate-y-1 hover:shadow-lg hover:border-fuchsia-500 transition">
                <i class="fa-brands fa-node-js text-3xl text-green-500"></i>
                <div>
                    <h3 class="text-white font-semibold">Node.js</h3>
                    <p class="text-sm text-gray-400">Runtime</p>
                </div>
            </div>-->

            <div class="bg-white/5 border border-white/10 rounded-lg p-4 flex items-center gap-4 hover:-translate-y-1 hover:shadow-lg hover:border-fuchsia-500 transition">
                <i class="fa-brands fa-laravel text-3xl text-red-500"></i>
                <div>
                    <h3 class="text-white font-semibold">Laravel</h3>
                    <p class="text-sm text-gray-400">Framework</p>
                </div>
            </div>

            <!--<div class="bg-white/5 border border-white/10 rounded-lg p-4 flex items-center gap-4 hover:-translate-y-1 hover:shadow-lg hover:border-fuchsia-500 transition">
                <i class="fa-solid fa-database text-3xl text-indigo-400"></i>
                <div>
                    <h3 class="text-white font-semibold">MySQL</h3>
                    <p class="text-sm text-gray-400">Database</p>
                </div>
            </div>-->

            <div class="bg-white/5 border border-white/10 rounded-lg p-4 flex items-center gap-4 hover:-translate-y-1 hover:shadow-lg hover:border-indigo-500 transition">
                <i class="fa-brands fa-git-alt text-3xl text-orange-400"></i>
                <div>
                    <h3 class="text-white font-semibold">Git & GitHub</h3>
                    <p class="text-sm text-gray-400">Version Control</p>
                </div>
            </div>
        </div>
    </section>
@endsection 