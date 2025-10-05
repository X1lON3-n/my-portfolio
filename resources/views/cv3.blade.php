<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>CV — Nabil </title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');

    :root{
      --bg:#050505; --card:#0d0d0d; --accent:#ff006e; --accent2:#00f5d4; --muted:#c9c9c9;
      --radius:16px; --maxw:900px;
      --ff-sans: 'Share Tech Mono', monospace;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{
      font-family:var(--ff-sans);
      background: radial-gradient(circle at top left, #0a0a0a 0%, #050505 80%);
      color:#f5f5f5;
      padding:32px;
      display:flex;justify-content:center;align-items:flex-start;
    }

    .cv-wrap{
      width:100%;max-width:var(--maxw);
      background:var(--card);
      border-radius:20px;
      padding:28px;
      box-shadow: 0 0 20px rgba(255,0,110,0.3), 0 0 40px rgba(0,245,212,0.2);
      display:grid;grid-template-columns:320px 1fr;gap:24px;align-items:start;
      position:relative;
      overflow:hidden;
    }

    /* glitch effect */
    .glitch {
      position: relative;
      font-size: 32px;
      font-weight: bold;
      text-transform: uppercase;
      color: var(--accent);
      text-shadow: 2px 0 var(--accent2);
      animation: glitch 2s infinite;
    }
    @keyframes glitch {
      0% { text-shadow:2px 0 var(--accent2), -2px -2px var(--accent); }
      20% { text-shadow:-2px -2px var(--accent2), 2px 2px var(--accent); }
      40% { text-shadow:2px 2px var(--accent2), -2px -2px var(--accent); }
      60% { text-shadow:-2px 2px var(--accent2), 2px -2px var(--accent); }
      80% { text-shadow:2px -2px var(--accent2), -2px 2px var(--accent); }
      100% { text-shadow:2px 0 var(--accent2), -2px -2px var(--accent); }
    }

    .left{
      background:#0b0b0b;
      border-radius:12px;padding:20px;
      display:flex;flex-direction:column;gap:18px;
      min-height:420px;
    }
    .avatar{width:180px;height:180px;border-radius:50%;overflow:hidden;margin:auto;box-shadow:0 0 15px var(--accent)}
    .avatar img{width:100%;height:100%;object-fit:cover}

    .section-title{font-size:12px;color:var(--accent2);letter-spacing:2px;text-transform:uppercase;margin-bottom:8px}
    .contact{font-size:14px;color:var(--muted);line-height:1.6}

    .skills .bar{height:6px;background:#222;border-radius:8px;overflow:hidden;width:70%}
    .skills .bar > i{display:block;height:100%;background:linear-gradient(90deg,var(--accent),var(--accent2));border-radius:8px}

    .right{padding:18px 10px 10px 10px}
    .name{font-size:28px;font-weight:700;margin-bottom:4px}
    .role{color:var(--muted);font-size:14px;margin-bottom:12px}

    .summary, .card{background:#111;padding:14px;border-radius:12px;margin-top:14px;border:1px solid rgba(255,255,255,0.08)}
    .card h4{color:var(--accent2);margin-bottom:4px}
    .card p{font-size:14px;color:#eaeaea;line-height:1.5}
    .year{color:var(--accent);min-width:88px;font-size:13px}

    .btn{background:transparent;border:1px solid var(--accent);color:var(--accent2);padding:8px 12px;border-radius:6px;font-size:13px;cursor:pointer;transition:0.3s}
    .btn:hover{background:var(--accent);color:#fff}

    @media (max-width:880px){.cv-wrap{grid-template-columns:1fr}.left{order:2}.right{order:1}}
  </style>
</head>
<body>
  <div class="cv-wrap">
    <aside class="left">
      <div class="avatar">
        <img src="{{ asset('images/profile.jpg') }}" alt="Foto Nabil">
      </div>
      <div>
        <div class="section-title">Kontak</div>
        <div class="contact">
          <strong>Muhammad Nabil</strong><br>
          17 Tahun · Mojokerto, Indonesia · +62 812 3456 7890<br>
          957muhammadnabil@gmail.com · portfolio.website
        </div>
      </div>
      <div>
        <div class="section-title">Keahlian</div>
        <div class="skills">
          <div>UI/UX Design<div class="bar"><i style="width:86%"></i></div></div>
          <div>HTML / CSS<div class="bar"><i style="width:92%"></i></div></div>
          <div>Laravel<div class="bar"><i style="width:78%"></i></div></div>
          <div>Inkscape<div class="bar"><i style="width:70%"></i></div></div>
        </div>
      </div>
      <div>
        <div class="section-title">Bahasa</div>
        <div class="contact">Bahasa Indonesia (Native) · English (Professional)</div>
      </div>
    </aside>

    <section class="right">
      <div class="name glitch">MUHAMMAD NABIL</div>
      <div class="role">Creative Web Devolopment / Designer</div>
      <p class="summary">Profil dengan memadukan estetika yang berani dan unik.</p>

      <div class="card">
        <div class="section-title">Experience</div>
        <div class="year">2025</div>
        <h4>Visual Designer · Studio XYZ</h4>
        <p>Mengerjakan konsep glitch art untuk kampanye global dan projek kreatif high-profile.</p>
        <div class="year">2022</div>
        <h4>Visual Designer · Studio XYZ</h4>
        <p>Mengerjakan konsep glitch art untuk kampanye global dan projek kreatif high-profile.</p>
        <div class="year">2024</div>
        <h4>Visual Designer · Studio XYZ</h4>
        <p>Mengerjakan konsep glitch art untuk kampanye global dan projek kreatif high-profile.</p>
      </div>
      <div class="card">
        <div class="section-title">Project</div>
        <h4>Glitch Portfolio (2023)</h4>
        <p>Membangun portofolio eksperimental dengan animasi glitch yang digunakan dalam pameran digital.</p>
      </div>
      <button class="btn" onclick="window.print()">Print / Save PDF</button>
    </section>
  </div>
</body>
</html>
