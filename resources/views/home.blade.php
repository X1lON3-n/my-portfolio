@extends('layouts.app')

@section('title', 'Home | Muhammad Nabil')

@section('content')
  <!-- Hero Section -->
  <section class="relative min-h-[90vh] flex flex-col md:flex-row items-center justify-center gap-10 px-6 py-12 
                 bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white overflow-hidden">

    <!-- Efek Aksen Cahaya -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute w-[500px] h-[500px] bg-purple-500/30 rounded-full blur-3xl top-10 left-10"></div>
        <div class="absolute w-[400px] h-[400px] bg-blue-500/20 rounded-full blur-3xl bottom-20 right-20"></div>
        <div class="absolute w-[300px] h-[300px] bg-green-500/10 rounded-full blur-2xl top-40 right-1/3"></div>
    </div>

    <!-- Profile Image -->
    <div class="w-60 h-60 flex-shrink-0">
        <img src="{{ asset('images/profile.jpg') }}" alt="Foto Nabil"
             class="w-full h-full object-cover rounded-full border-4 border-purple-500 shadow-xl shadow-purple-500/60" />
    </div>

    <!-- Hero Content -->
    <div class="text-center md:text-left max-w-xl">
      <h1 class="text-3xl md:text-5xl font-extrabold mb-4 leading-tight">
        Hi there! I am <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-500 to-blue-400 drop-shadow-md">Nabil</span> 👋
      </h1>

      <div class="text-xl md:text-2xl font-semibold text-gray-200 mb-4">
        I'm a <span id="typewriter" class="text-cyan-400"></span>
      </div>

      <p class="text-gray-300 mb-6 leading-relaxed">
        Passionate about creating <span class="text-purple-400 font-semibold">Web</span> |
        <span class="font-semibold text-pink-400"> Web Developer</span> |
        <span class="font-semibold text-blue-400"> Designer </span>
      </p>

      <!-- Social Links -->
      <div class="flex justify-center md:justify-start gap-6 text-2xl mb-6">
        <a href="https://github.com/X1lON3-n/" target="_blank" class="text-gray-300 hover:text-purple-400 transition">
          <i class="fa-brands fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/muhammadnabil09/" target="_blank" class="text-gray-300 hover:text-blue-400 transition">
          <i class="fa-brands fa-linkedin"></i>
        </a>
        <a href="https://www.instagram.com/07npr?igsh=YzljYTk1ODg3Zg==" target="_blank" class="text-gray-300 hover:text-pink-400 transition">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>

      <!-- Download CV Button -->
      <div>
        <a href="{{ route('cv8') }}" 
           class="inline-block px-6 py-3 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold rounded-lg shadow-md hover:opacity-90 transition">
          Lihat CV
        </a>
      </div>
    </div>
  </section>

  <!-- Script Typewriter -->
  <script>
    const words = ["Web Developer", "Designer", "Frontend Engineer"];
    let i = 0;
    let j = 0;
    let currentWord = "";
    let isDeleting = false;
    const typewriter = document.getElementById("typewriter");

    function type() {
      currentWord = words[i];
      typewriter.textContent = currentWord.substring(0, j);

      if (!isDeleting && j < currentWord.length) {
        j++;
        setTimeout(type, 150);
      } else if (isDeleting && j > 0) {
        j--;
        setTimeout(type, 100);
      } else {
        isDeleting = !isDeleting;
        if (!isDeleting) {
          i = (i + 1) % words.length;
        }
        setTimeout(type, 1000);
      }
    }

    type();
  </script>
@endsection
