<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portofolio 2025</title>
  <script src="https://cdn.tailwindcss.com"></script>
  
</head>
<body>
  <!-- BIO -->
<div id="bio" class="section bg-black text-white p-10 relative">

  <!-- Foto Profil (kiri atas) -->
  <div class="absolute top-6 left-6">
    <img src="https://via.placeholder.com/80"
         class="w-16 h-16 rounded-full border-4 border-pink-600 shadow-lg"
         alt="Foto Profil">
  </div>

  <!-- Avatar animasi (fixed kiri tengah) -->
  <div id="avatar" class="fixed left-6 top-1/2 transform -translate-y-1/2 z-50">
    <img src="https://media.giphy.com/media/2v170e71aanfi/giphy.gif" 
         class="w-20 h-20 rounded-full shadow-lg border-2 border-pink-500">
  </div>

  <!-- Konten utama grid -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-24">

    <!-- Pendidikan -->
    <div class="bg-pink-600 p-6 rounded-lg shadow-lg">
      <h3 class="text-2xl font-bold mb-4">Pendidikan</h3>
      <ul class="space-y-4">
        <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="showSchool('TK Islam Terpadu As Salaam Kebumen','Gg. Belimbing, RT.005/RW.006, Legok Lor, Pejagoan, Kec. Kebumen, Kabupaten Kebumen, Jawa Tengah 54361, Indonesia')">
          TK Islam Terpadu As Salaam Kebumen
         <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="showSchool('SD Islam Terpadu As Salaam Kebumen','Gg. Belimbing, RT.005/RW.006, Legok Lor, Pejagoan, Kec. Kebumen, Kabupaten Kebumen, Jawa Tengah 54361, Indonesia')">
          SD Islam Terpadu As Salaam Kebumen
        </li>
         <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="showSchool('SMP Integral Hidayatullah ','Jl. Joko Sangkrip Km 1,2 Rt.01 Rw.06, Sumberadi, Kec. Kebumen, Kab. Kebumen, Jawa Tengah.')">
          SMP Integral Hidayatullah 
        </li>
        <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="showSchool('SMPIT Al Anwar ','No 25 Jl. Mojosari, Gg. Iii 61382 Mojosari Jawa Timur')">
         SMPIT Al Anwar 
        </li>
        <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="showSchool('SMA Muhammadiyah 1 Sukoharjo','Jl. Merdeka No. 45, Jakarta')">
          SMA Muhammadiyah 1 Sukoharjo
        </li>
        <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="showSchool('Pondok Pesantren Masyarakat Hubbul Khoir','Dukuh Ngentak, Bulakrejo, Kabupaten Sukoharjo, Jawa Tengah')">
          Pondok Pesantren Masyarakat Hubbul Khoir
        </li>
      </ul>
    </div>

    <!-- Experience -->
    <div class="bg-pink-600 p-6 rounded-lg shadow-lg">
      <h3 class="text-2xl font-bold mb-4">Experience</h3>
      <ul class="space-y-4">
        <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="toggleDetail('exp1')">
          Frontend Developer - Startup 7/10
          <div id="exp1" class="hidden mt-2 text-sm text-white-200">
            Bikin UI dashboard pakai Flowbite + Tailwind.Wordpress.
          </div>
        </li>
        <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="toggleDetail('exp2')">
          Backend Developer - Startup 5/10
          <div id="exp2" class="hidden mt-2 text-sm text-white-200">
            API Laravel.C++.
          </div>
        </li>
          <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="toggleDetail('exp3')">
          Desainer layout- Startup 7/10
          <div id="exp3" class="hidden mt-2 text-sm text-white-200">
           Canva. Inkscape. Figma.
          </div>
                  </li>

          <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="toggleDetail('exp4')">
           Desainer Mockup - Startup 8/10
          <div id="exp4" class="hidden mt-2 text-sm text-white-200">
            Figma.
          </div>
                  </li>
          <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="toggleDetail('exp5')">
          Desainer Logo - Startup 7/10
          <div id="exp5" class="hidden mt-2 text-sm text-white-200">
            Inskape.          
           </div>
        </li>
        <li class="cursor-pointer bg-pink-700 p-4 rounded hover:bg-pink-800 transition"
            onclick="toggleDetail('exp6')">
          Desainer Icon - Startup 5/10
          <div id="exp6" class="hidden mt-2 text-sm text-white-200">
            Inskape.          
           </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Modal detail sekolah -->
<div id="schoolModal" class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50">
  <div class="bg-white text-black p-6 rounded-lg w-96">
    <h4 id="schoolName" class="text-lg font-bold"></h4>
    <p id="schoolAddr" class="mt-2"></p>
    <button onclick="closeSchool()" class="mt-4 bg-pink-600 text-white px-4 py-2 rounded">Tutup</button>
  </div>
</div>
<script>
  // Toggle detail pengalaman
  function toggleDetail(id) {
    const el = document.getElementById(id);
    el.classList.toggle("hidden");
  }

  // Show school modal
  function showSchool(name, addr) {
    document.getElementById("schoolName").innerText = name;
    document.getElementById("schoolAddr").innerText = addr;
    document.getElementById("schoolModal").classList.remove("hidden");
  }

  function closeSchool() {
    document.getElementById("schoolModal").classList.add("hidden");
  }

  // Avatar goyang halus saat scroll
  window.addEventListener("scroll", () => {
    const avatar = document.getElementById("avatar");
    const offset = window.scrollY * 0.05; 
    avatar.style.transform = `translateY(calc(-50% + ${offset}px))`;
  });
</script>

</body>
</html>
