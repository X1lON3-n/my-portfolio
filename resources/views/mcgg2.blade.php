<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Impact Table</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-blue-200 to-blue-400 min-h-screen p-6">

  <h1 class="text-3xl font-bold mb-6 text-center">Impact Table</h1>

  <!-- Grid Header -->
  <div class="grid grid-cols-11 border border-blue-300">
    <div class="p-4 font-bold bg-blue-200">Faction \ Role</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('VoidnessHeart')">VoidnessHeart</div>
        <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('RosemaryBloom')">Flower</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Inazuma')">Inazuma Plains</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Sumeru')">Sumeru</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Fontaine')">Fontaine Sea</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Natlan')">Mecha Natlan</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Nod-Krai')">Lunary Nod-Krai</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Snezaya')">Void Snezaya</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Archon')">Zero Archon</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('The')">The</div>
  </div>

  <!-- Support Row -->
  <div class="grid grid-cols-11 border border-gray-300 items-center">
    <div class="p-4 font-bold text-white cursor-pointer hover:bg-blue-600 flex items-center" onclick="showDetail('Support')">
      <img src="https://via.placeholder.com/30" class="inline-block mr-2 rounded-full" />
      Summoner
    </div>
    <div class="flex items-center justify-center">
      <div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden cursor-pointer"
           onclick="showDetail('Zhask')">
        <img src="https://static.wikia.nocookie.net/mobile-legends/images/1/15/Hero383-portrait.png"
             class="w-full h-full object-cover">
      </div>
    </div>
    <div class="flex items-center justify-center">
      <div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden cursor-pointer"
           onclick="showDetail('nilou')">
        <img src="https://via.placeholder.com/50" class="w-full h-full object-cover">
      </div>
    </div>
  </div>

  <!-- Hydro Row -->
  <div class="grid grid-cols-11 border border-gray-300 items-center">
    <div class="p-4 font-bold text-white cursor-pointer hover:bg-blue-600 flex items-center" onclick="showDetail('Hydro')">
      <img src="https://via.placeholder.com/30" class="inline-block mr-2 rounded-full" />
      Bruiser
    </div>
    <div class="flex items-center justify-center">
      <div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden cursor-pointer"
           onclick="showDetail('YuZhong')">
        <img src="https://via.placeholder.com/50" class="w-full h-full object-cover">
      </div>
    </div>
  </div>

  <!-- Modal Detail -->
  <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg w-96 relative">
      <!-- Close button -->
      <button onclick="closeDetail()" class="absolute top-2 right-2 text-gray-500">✖</button>

      <!-- Kotak judul + gambar -->
      <div class="flex items-center mb-4">
        <img id="detailImg" src="" class="w-12 h-12 rounded-full border mr-3 hidden">
        <h2 id="detailTitle" class="text-xl font-bold"></h2>
      </div>
      <p id="detailText" class="text-gray-600 whitespace-pre-line"></p>
    </div>
  </div>

  <script>
    const details = {
      Monsdalt: { title: "Monsdalt", text: "(2).\n(4).\n(6).\n(10)", img: "https://via.placeholder.com/50" },
      Support:  { title: "Support", text: "(2).\n(4).\n(6).\n(10)", img: "https://via.placeholder.com/30" },
      Hydro:    { title: "Hydro",   text: "(2).\n(4).\n(6).\n(10)", img: "https://via.placeholder.com/30" },
      Zhask:    { title: "Zhask", text: "Hero Harga 4 dengan skill Ulti", img: "https://static.wikia.nocookie.net/mobile-legends/images/1/15/Hero383-portrait.png" },
            YuZhong:    { title: "YuZhong", text: "Hero Harga 5 dengan skill Ulti", img: "https://static.wikia.nocookie.net/mobile-legends/images/1/15/Hero383-portrait.png" },
      nilou:    { title: "Nilou", text: "Karakter Hydro dari Sumeru.\n(2).\n(4).\n(6).\n(10)", img: "https://via.placeholder.com/50" }
    };

    function showDetail(key) {
      const detail = details[key];
      if (!detail) return;

      document.getElementById("detailTitle").innerText = detail.title;
      document.getElementById("detailText").innerText = detail.text;
      
      const imgEl = document.getElementById("detailImg");
      if (detail.img) {
        imgEl.src = detail.img;
        imgEl.classList.remove("hidden");
      } else {
        imgEl.classList.add("hidden");
      }

      document.getElementById("detailModal").classList.remove("hidden");
    }

    function closeDetail() {
      document.getElementById("detailModal").classList.add("hidden");
    }
  </script>
</body>
</html>
