@extends('layouts.app')

@section('title', 'Contact | Muhammad Nabil')

@section('content')
    <!-- Contact Section -->
    <section class="px-6 py-16">
        <h2 class="text-3xl font-bold text-center bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400 bg-clip-text text-transparent drop-shadow-md mb-10">
            Contact Me
        </h2>

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="space-y-6">
                <p class="text-gray-300 leading-relaxed">
                    Jika kamu ingin berdiskusi, berkolaborasi, atau sekadar menyapa, jangan ragu untuk menghubungi saya.
                    Saya terbuka untuk peluang kerja, project freelance, ataupun sharing mengenai web development.
                </p>

                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-envelope text-2xl text-purple-400 drop-shadow-md"></i>
                        <a href="mailto:957muhammadnabil@gmail.com" class="text-gray-200 hover:text-pink-400 transition">
                            957muhammadnabil@gmail.com
                        </a>
                    </div>

                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-phone text-2xl text-blue-400 drop-shadow-md"></i>
                        <a href="tel:+6287870466321" class="text-gray-200 hover:text-pink-400 transition">
                            +62 878-7046-6321                        </a>
                    </div>

                    <div class="flex items-center gap-4">
                        <i class="fa-solid fa-location-dot text-2xl text-pink-400 drop-shadow-md"></i>
                        <span class="text-gray-200">Yogyakarta, Indonesia</span>
                    </div>
                </div>

                <div class="flex gap-6 mt-8">
                    <a href="https://github.com/" target="_blank"
                       class="text-2xl text-gray-300 hover:text-purple-400 transition"><i class="fa-brands fa-github"></i></a>
                    <a href="https://linkedin.com/in/" target="_blank"
                       class="text-2xl text-gray-300 hover:text-blue-400 transition"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/07npr_/" target="_blank"
                       class="text-2xl text-gray-300 hover:text-pink-400 transition"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="border border-white rounded-2xl shadow-2xl p-6 backdrop-blur-md bg-transparent">
   <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
    @csrf
    <div>
        <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
        <input type="text" id="name" name="name" required class="w-full mt-1 px-4 py-2 rounded-lg bg-pink-100/20 text-white placeholder-gray-300 border border-pink-100 focus:ring-2 focus:ring-purple-300 focus:outline-none">
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
        <input type="email" id="email" name="email" required class="w-full mt-1 px-4 py-2 rounded-lg bg-pink-100/20 text-white placeholder-gray-300 border border-pink-100 focus:ring-2 focus:ring-purple-300 focus:outline-none">
    </div>

    <div>
        <label for="message" class="block text-sm font-medium text-gray-300">Message</label>
        <textarea id="message" name="message" rows="4" required class="w-full mt-1 px-4 py-2 rounded-lg bg-pink-100/20 text-white placeholder-gray-300 border border-pink-100 focus:ring-2 focus:ring-purple-300 focus:outline-none"></textarea>
    </div>

    <button type="submit" class="w-full py-3 px-4 bg-gradient-to-r from-purple-600 via-pink-500 to-blue-500 hover:opacity-90 rounded-lg font-semibold shadow-lg shadow-purple-900/30 transition">
        Send Message
    </button>
</form>

</div>

        </div>
    </section>
@endsection
