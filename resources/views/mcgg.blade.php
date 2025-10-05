
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Impact Table</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-blue-200 to-blue-400 min-h-screen p-6">
<!--table gameku-->
  <h1 class="text-3xl font-bold mb-6 text-center">Impact Table</h1>

  <!-- Grid Header -->
  <div class="grid grid-cols-11 border border-blue-300">
    <div class="p-4 font-bold bg-blue-200">Faction \ Role</div>
     <!-- Fuction Coloumb -->

    <div class="p-4 font-bold  text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Monsdalt')">Monsdalt Palace</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Liyue')">Liyue Altar </div>
    <div class="p-4 font-bold  text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Inazuma')">Inazuma Plains</div>
    <div class="p-4 font-bold  text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Sumeru')">Sumeru </div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Fontaine')">Fontaine Sea</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Natlan')">Mecha Natlan</div>
    <div class="p-4 font-bold  text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Nod-Krai')">Lunary Nod-Krai</div>
    <div class="p-4 font-bold  text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Snezaya')">Void Snezaya</div>
    <div class="p-4 font-bold  text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('Archon')">Zero Archon</div>
    <div class="p-4 font-bold text-center cursor-pointer hover:bg-blue-100" onclick="showDetail('The')">The </div>


  </div>

  <!-- Support Row -->
  <div class="grid grid-cols-11 border border-gray-300">
  <div class="p-4 font-bold  text-white cursor-pointer hover:bg-blue-600"
       onclick="showDetail('Support')">
         <img src="https://via.placeholder.com/30" class="inline-block mr-2 rounded-full" />
       Support
  </div>

<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden">
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden">
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
    <div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" ></div>


  <!-- Hydro Row -->
 <div class="grid grid-cols-11 border border-gray-300">
  <div class="p-4 font-bold  text-white cursor-pointer hover:bg-blue-600"
       onclick="showDetail('Hydro')">
         <img src="https://via.placeholder.com/30" class="inline-block mr-2 rounded-full" />
       Hydro
  </div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden">
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden">
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
    <div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>

  <!-- Support Row -->
  <div class="grid grid-cols-11 border border-gray-300">
  <div class="p-4 font-bold  text-white cursor-pointer hover:bg-blue-600"
       onclick="showDetail('Pyro')">
         <img src="https://via.placeholder.com/30" class="inline-block mr-2 rounded-full" />
       Pyro
  </div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden">
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden">
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
<div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>
    <div class="w-12 h-12 rounded-full border border-yellow-400 overflow-hidden" >
  <img src="https://mobile-legends.fandom.com/wiki/File:Hero383-portrait.png" class="w-full h-full object-cover" onclick="showDetail('nilou')">>
</div>



  



  <!-- Modal Detail -->
  <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg w-96 relative">
          <div id="detailBox" class="mt-5 p-5 bg-white shadow-md rounded-lg hidden"></div>
      <button onclick="closeDetail()" class="absolute top-2 right-2 text-gray-500">✖</button>
      <h2 id="detailTitle" class="text-xl font-bold mb-2"></h2>
      <p id="detailText" class="text-gray-600"></p>
    </div>
  </div>

  <script>
   const details = {
  Monsdalt: {
    title: "Monsdalt",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Liyue: {
    title: "Liyue",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Inazuma: {
    title: "Inazuma",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Sumeru: {
    title: "Sumeru",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Fontaine: {
    title: "Fontaine",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Natlan: {
    title: "Natlan",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Nod_Krai: {
    title: "Nod-Krai",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Snezaya: {
    title: "Snezaya",
    text: "(2).\n (4).\n(6).\n (10)"
  },

  Archon: {
    title: "Archon",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  None: {
    title: "None",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  The: {
    title: "The",
    text: "(2).\n (4).\n(6).\n (10)"
  },  

  
  Anemo: {
    title: "Anemo",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Geo: {
    title: "Geo",
    text: "(2).\n (4).\n(6).\n (10)"
  },  
  Electro: {
    title: "Electro",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Dendro: {
    title: "Dendro",
    text: "(2).\n (4).\n(6).\n (10)"
  },  
  Hydro: {
    title: "Hydro",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Pyro: {
    title: "Pyro",
    text: "(2).\n (4).\n(6).\n (10)"
  },  
  Cyro: {
    title: "Cyro",
    text: "(2).\n (4).\n(6).\n (10)"
  },

  Support: {
    title: "Support",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Lancer: {
    title: "Lancer",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Defender: {
    title: "Defender",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Archer: {
    title: "Archer",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Assassin: {
    title: "Assassin",
    text: "(2).\n (4).\n(6).\n (10)"
  },  
  Swordman: {
    title: "Swordman",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Weapon: {
    title: "Weapons Eager",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Wresteler: {
    title: "Wrestler",
    text: "(2).\n (4).\n(6).\n (10)"
  },
  Summoner: {
    title: "Summoner",
    text: "(2).\n (4).\n(6).\n (10)"
  },
};



    function showDetail(faction) {
      document.getElementById("detailTitle").innerText = details[faction]?.title || "Unknown Faction";
      document.getElementById("detailText").innerText = details[faction]?.text || "No description available.";
      document.getElementById("detailModal").classList.remove("hidden");
    }

    function showHero(heroName) {
      document.getElementById("detailTitle").innerText = heroName;
      document.getElementById("detailText").innerText = `Detail tentang ${heroName} akan ditampilkan di sini.`;
      document.getElementById("detailModal").classList.remove("hidden");
    }

    function closeDetail() {
      document.getElementById("detailModal").classList.add("hidden");
    }
  </script>
</body>
</html>

</body>
</html>