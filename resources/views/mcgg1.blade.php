<!-- Simpan ini sebagai gallery.html -->
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Gallery – Magic Chess style</title>
  <style>
    :root{
      /* Warna utama diambil mendekati screenshot Magic Chess: Go Go */
      --bg-top: #2e79c6;     /* deep blue */
      --bg-bottom: #bfe9d6;  /* pale mint */
      --panel: rgba(255,255,255,0.06);
      --panel-2: rgba(255,255,255,0.08);
      --accent: #ffd36b;     /* small accents (gold) */
      --text: rgba(255,255,255,0.92);
      --muted: rgba(255,255,255,0.7);
      --grid-line: rgba(255,255,255,0.06);
      --glass-blur: 6px;
      --radius: 12px;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }

    html,body{height:100%;margin:0;background:linear-gradient(180deg,var(--bg-top) 0%, var(--bg-bottom) 100%);-webkit-font-smoothing:antialiased;color:var(--text);}
    .wrap{max-width:1200px;margin:36px auto;padding:24px;display:flex;gap:20px;align-items:flex-start;}

    /* Left sidebar */
    .sidebar{
      width:260px;
      background:linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.02));
      border-radius:var(--radius);
      padding:18px;
      backdrop-filter: blur(var(--glass-blur));
      box-shadow: 0 6px 20px rgba(0,0,0,0.18);
      border: 1px solid rgba(255,255,255,0.04);
    }
    .back{
      display:flex;align-items:center;gap:10px;
      color:var(--text);font-weight:600;margin-bottom:12px;font-size:18px;
    }
    .back .arrow{width:26px;height:26px;border-radius:6px;background:rgba(255,255,255,0.06);display:flex;align-items:center;justify-content:center}
    .search{
      display:flex;margin:8px 0 18px 0;
    }
    .search input{
      width:100%;padding:10px 12px;border-radius:10px;border:none;background:rgba(255,255,255,0.03);color:var(--text);outline:none;
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.02);
    }
    .section-title{color:var(--muted);font-size:13px;margin-top:8px;margin-bottom:6px}
    .cat-list{display:flex;flex-direction:column;gap:8px}
    .cat{
      padding:10px;border-radius:10px;color:var(--text);cursor:pointer;
      display:flex;align-items:center;gap:10px;font-weight:600;background:transparent;border:1px solid rgba(255,255,255,0.02)
    }
    .cat.active{background:linear-gradient(90deg, rgba(255,255,255,0.025), rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.06)}

    /* Right panel: gallery */
    .panel{
      flex:1;
      min-height:420px;
      padding:18px;
      border-radius:var(--radius);
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.015));
      box-shadow: 0 6px 28px rgba(0,0,0,0.2);
      border:1px solid rgba(255,255,255,0.04);
    }

    .panel-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:12px}
    .panel-header h2{margin:0;font-size:20px;color:var(--text);display:flex;align-items:center;gap:12px}
    .controls{display:flex;gap:8px;align-items:center}
    .btn{
      padding:8px 12px;border-radius:10px;background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.02);cursor:pointer;color:var(--muted);font-weight:600
    }

    /* grid container with subtle cell lines like screenshot */
    .grid-wrap{
      background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.01));
      padding:18px;border-radius:10px;
    }
    .grid{
      display:grid;
      grid-template-columns: repeat(7, 1fr); /* grid width like screenshot */
      gap:18px;
      padding:18px;
      position:relative;
      border-radius:8px;
      background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.01));
    }

    /* draw faint lines for rows/cols */
    .grid::before{
      content:"";
      position:absolute;inset:18px;border-radius:6px;
      background:
        linear-gradient(180deg, var(--grid-line) 1px, transparent 1px) 0 0/100% calc((100% - 36px) / 4) ,
        linear-gradient(90deg, var(--grid-line) 1px, transparent 1px) 0 0/ calc((100% - 36px) / 7) 100%;
      pointer-events:none;
      opacity:0.9;
    }

    .cell{
      min-height:88px;display:flex;align-items:center;justify-content:center;position:relative;
    }

    .thumb{
      width:64px;height:64px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.06);
      overflow:hidden;box-shadow:0 6px 18px rgba(0,0,0,0.18);
      transition:transform .18s ease, box-shadow .18s ease;
    }
    .thumb img{width:100%;height:100%;object-fit:cover;display:block}
    .cell:hover .thumb{transform:translateY(-6px);box-shadow:0 14px 30px rgba(0,0,0,0.32)}

    .badge{
      position:absolute;right:8px;top:6px;background:var(--accent);color:#222;padding:4px 6px;border-radius:8px;font-weight:700;font-size:12px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.18)
    }

    /* responsive */
    @media (max-width:980px){
      .wrap{padding:18px;flex-direction:column}
      .sidebar{width:100%}
      .grid{grid-template-columns: repeat(4,1fr)}
    }
    @media (max-width:520px){
      .grid{grid-template-columns: repeat(3,1fr)}
      .thumb{width:52px;height:52px}
    }

    /* small utility */
    .muted{color:var(--muted);font-size:13px}
  </style>
</head>
<body>
  <div class="wrap">
    <aside class="sidebar" aria-label="kategori">
      <div class="back">
        <div class="arrow">←</div>
        <div>Gallery</div>
      </div>

      <div class="search">
        <input id="search" placeholder="Cari karakter..." />
      </div>

      <div class="section-title">Sections</div>
      <div class="cat-list" id="categories">
        <div class="cat active" data-cat="all">All</div>
        <div class="cat" data-cat="hero">Hero</div>
        <div class="cat" data-cat="equipment">Equipment</div>
        <div class="cat" data-cat="encyclopedia">Encyclopedia</div>
        <div class="cat" data-cat="cards">Go Go Cards</div>
      </div>

      <div style="height:18px"></div>
      <div class="section-title">Tips</div>
      <div class="muted">Klik thumbnail untuk melihat detail. Ganti gambar di folder <code>assets/</code>.</div>
    </aside>

    <main class="panel">
      <div class="panel-header">
        <h2>Gallery <span class="muted" style="font-size:13px">— Heroes & Items</span></h2>
        <div class="controls">
          <button class="btn" id="shuffle">Shuffle</button>
          <button class="btn" id="reset">Reset</button>
        </div>
      </div>

      <div class="grid-wrap">
        <div class="grid" id="grid">
          <!-- cells injected by JS -->
        </div>
      </div>
    </main>
  </div>

  <script>
    /* Contoh data characters - ganti src ke filemu sendiri.
       Gunakan ukuran square minimal 128x128 untuk thumbnail */
    const characters = [
      {id:1,name:'Astra',type:'hero',src:'assets/thumb-01.png',star:3},
      {id:2,name:'Beryl',type:'hero',src:'assets/thumb-02.png',star:2},
      {id:3,name:'Cinder Axe',type:'equipment',src:'assets/thumb-03.png',star:1},
      {id:4,name:'Dew',type:'hero',src:'assets/thumb-04.png',star:2},
      {id:5,name:'Eon',type:'cards',src:'assets/thumb-05.png',star:4},
      {id:6,name:'Fleur',type:'hero',src:'assets/thumb-06.png',star:1},
      {id:7,name:'Gale',type:'encyclopedia',src:'assets/thumb-07.png',star:1},
      {id:8,name:'Hoshi',type:'hero',src:'assets/thumb-08.png',star:2},
      {id:9,name:'Iris',type:'hero',src:'assets/thumb-09.png',star:3},
      {id:10,name:'Jade',type:'equipment',src:'assets/thumb-10.png',star:2},
      {id:11,name:'Kumo',type:'cards',src:'assets/thumb-11.png',star:2},
      {id:12,name:'Luna',type:'hero',src:'assets/thumb-12.png',star:1},
      // tambah sesuai kebutuhan...
    ];

    const grid = document.getElementById('grid');
    const categories = document.getElementById('categories');
    const search = document.getElementById('search');

    function render(list){
      grid.innerHTML = '';
      // determine number of grid cells - keep layout balanced (rows of 7). Fill empty cells to match visual spacing.
      const cols = getComputedStyle(grid).gridTemplateColumns.split(' ').length;
      const rowsNeeded = Math.ceil(list.length / cols);
      const totalCells = rowsNeeded * cols;
      for(let i=0;i<totalCells;i++){
        const cell = document.createElement('div');
        cell.className='cell';
        if(list[i]){
          const ch = list[i];
          const thumb = document.createElement('div'); thumb.className='thumb';
          const img = document.createElement('img'); img.src = ch.src; img.alt = ch.name;
          thumb.appendChild(img);
          cell.appendChild(thumb);

          // badge for star count, like rarity
          const badge = document.createElement('div'); badge.className='badge'; badge.textContent = ch.star + '★';
          cell.appendChild(badge);

          // click show details (simple alert for demo)
          cell.addEventListener('click', ()=> {
            alert(ch.name + ' — type: ' + ch.type);
          });
        }
        grid.appendChild(cell);
      }
    }

    // initial render (all)
    render(characters);

    // category filter
    categories.addEventListener('click', (e)=>{
      const el = e.target.closest('.cat');
      if(!el) return;
      categories.querySelectorAll('.cat').forEach(c=>c.classList.remove('active'));
      el.classList.add('active');
      const cat = el.dataset.cat;
      if(cat==='all') render(characters);
      else render(characters.filter(c=>c.type===cat));
    });

    // search
    search.addEventListener('input', (e)=>{
      const q = e.target.value.trim().toLowerCase();
      const active = categories.querySelector('.cat.active').dataset.cat;
      const base = (active==='all') ? characters : characters.filter(c=>c.type===active);
      if(!q) render(base);
      else render(base.filter(c=>c.name.toLowerCase().includes(q)));
    });

    document.getElementById('shuffle').addEventListener('click', ()=>{
      const arr = [...characters].sort(()=>Math.random()-0.5);
      render(arr);
    });
    document.getElementById('reset').addEventListener('click', ()=> render(characters));
  </script>
</body>
</html>
