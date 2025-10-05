<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>CV — Nama Anda</title>
  <style>
    :root{
      --bg:#0f1724; --card:#0b1220; --accent:#c91f2b; --muted:#94a3b8; --glass: rgba(255,255,255,0.04);
      --glass-2: rgba(255,255,255,0.02);
      --radius:16px; --maxw:900px;
      --ff-sans: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue";
    }
    /* Reset */
    *{box-sizing:border-box;margin:0;padding:0}
    html,body{height:100%}
    body{
      font-family:var(--ff-sans);
      background: linear-gradient(180deg,#071021 0%, #07121a 60%);
      color:#e6eef8;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      padding:32px;
      display:flex;justify-content:center;align-items:flex-start;
    }

    /* Container */
    .cv-wrap{
      width:100%;max-width:var(--maxw);
      background:linear-gradient(180deg,var(--card), #07111a);
      border-radius:20px;
      padding:28px;
      box-shadow: 0 12px 40px rgba(2,6,23,0.7);
      display:grid;grid-template-columns:320px 1fr;gap:24px;align-items:start;
    }

    /* LEFT column */
    .left{
      background:linear-gradient(180deg,var(--glass), var(--glass-2));
      border-radius:12px;padding:20px;backdrop-filter: blur(6px);
      display:flex;flex-direction:column;gap:18px;
      min-height:420px;
    }

    .photo{
      width:100%;display:flex;justify-content:center;
    }
    .avatar{
      width:180px;height:180px;border-radius:12px;overflow:hidden;border:6px solid rgba(255,255,255,0.06);
      box-shadow: 0 10px 30px rgba(1,4,10,0.6);
    }
    .avatar img{width:100%;height:100%;object-fit:cover;display:block}

    .contact{font-size:14px;color:var(--muted);line-height:1.6}
    .section-title{font-size:12px;color:var(--muted);letter-spacing:1px;text-transform:uppercase}

    .skills{display:flex;flex-direction:column;gap:10px}
    .skill{display:flex;justify-content:space-between;align-items:center}
    .skill .bar{height:8px;background:rgba(255,255,255,0.06);border-radius:8px;overflow:hidden;width:70%}
    .skill .bar > i{display:block;height:100%;background:linear-gradient(90deg,var(--accent),#ff8a6b);border-radius:8px}

    /* RIGHT column */
    .right{padding:18px 10px 10px 10px}
    header.main-header{display:flex;justify-content:space-between;align-items:flex-start;gap:16px}
    .title{display:flex;flex-direction:column}
    .name{font-size:28px;font-weight:700;letter-spacing:0.2px}
    .role{color:var(--muted);font-size:14px;margin-top:6px}

    .actions{display:flex;gap:8px}
    .btn{background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--muted);padding:8px 12px;border-radius:10px;font-size:13px;cursor:pointer}
    .btn.primary{background:var(--accent);color:#fff;border:none;box-shadow:0 6px 20px rgba(201,31,43,0.18)}

    .summary{margin-top:16px;color:#dce8f8;line-height:1.6}

    .card{background:transparent;padding:14px;border-radius:12px;margin-top:14px;border:1px solid rgba(255,255,255,0.03)}
    .item{display:flex;justify-content:space-between;align-items:flex-start;gap:12px}
    .item .meta{color:var(--muted);font-size:13px}
    .item h4{font-size:15px;margin-bottom:6px}
    .item p{color:#d5e7ff;line-height:1.5;font-size:14px}

    .timeline{display:flex;flex-direction:column;gap:12px}
    .tl-row{display:flex;gap:12px;align-items:flex-start}
    .year{min-width:88px;color:var(--muted);font-size:13px}
    .tl-body{flex:1}

    /* small screens */
    @media (max-width:880px){
      .cv-wrap{grid-template-columns:1fr;}
      .left{order:2}
      .right{order:1}
      .avatar{width:140px;height:140px}
    }

    /* subtle entrance animation */
    .cv-wrap{transform:translateY(18px);opacity:0;animation:intro .7s cubic-bezier(.2,.9,.2,1) forwards}
    @keyframes intro{to{transform:none;opacity:1}}

    /* print styles */
    @media print{
      body{padding:0;background:#fff;color:#000}
      .cv-wrap{box-shadow:none;border-radius:0;background:transparent;color:#000;max-width:100%;}
      .left{background:transparent;backdrop-filter:none}
      .btn{display:none}
    }
  </style>
</head>
<body>
  <div class="cv-wrap" role="main">
    <aside class="left">
      <div class="photo">
        <div class="avatar" id="avatar">
          <!-- Ganti src dengan foto Anda -->
        <img src="{{ asset('images/profile.jpg') }}" alt="Foto Nabil">
        </div>
      </div>

      <div>
        <div class="section-title">Kontak</div>
        <div class="contact">
          <strong>Muhammad Nabil</strong><br>
          17 Tahun · Mojokerto, Indonesia · +62 812 3456 7890<br>
          email@contoh.com · portfolio.website
n        </div>
      </div>

      <div>
        <div class="section-title">Keahlian</div>
        <div class="skills">
          <div class="skill"><div>UI/UX Design</div><div class="bar"><i style="width:86%"></i></div></div>
          <div class="skill"><div>HTML / CSS</div><div class="bar"><i style="width:92%"></i></div></div>
          <div class="skill"><div>Javascript</div><div class="bar"><i style="width:78%"></i></div></div>
          <div class="skill"><div>React / Vue</div><div class="bar"><i style="width:70%"></i></div></div>
        </div>
      </div>

      <div>
        <div class="section-title">Bahasa</div>
        <div class="contact">Bahasa Indonesia (Native) · English (Professional)</div>
      </div>

      <div style="margin-top:auto">
        <div class="section-title">Pendidikan</div>
        <div class="contact">
          S1 Design — Universitas Contoh (2016 — 2020)
        </div>
      </div>
    </aside>

    <section class="right">
      <header class="main-header">
        <div class="title">
          <div class="name">Muhammad Nabil</div>
          <div class="role">Product Designer / Frontend Developer</div>
        </div>
        <div class="actions">
          <button class="btn" onclick="downloadPNG()">Download PNG</button>
          <button class="btn primary" onclick="window.print()">Print / Save PDF</button>
        </div>
      </header>

      <div class="summary card">
        <div class="section-title">Ringkasan</div>
        <p class="summary">Designer & developer dengan pengalaman 4+ tahun membangun produk digital. Mengutamakan desain yang manusiawi, performa cepat, dan kode bersih. Terbiasa bekerja cross‑functional dengan tim produk dan engineering untuk mengubah ide menjadi pengalaman yang nyata.</p>
      </div>

      <div class="card">
        <div class="section-title">Pengalaman Kerja</div>
        <div class="timeline">
          <div class="tl-row">
            <div class="year">2022 — Sekarang</div>
            <div class="tl-body">
              <h4>Senior Product Designer · Nama Perusahaan</h4>
              <p>Mengelola roadmap desain, memimpin tim 3 desainer, dan meningkatkan conversion funnel sebesar 28% lewat iterasi desain berbasis data.</p>
            </div>
          </div>

          <div class="tl-row">
            <div class="year">2020 — 2022</div>
            <div class="tl-body">
              <h4>Frontend Developer · Startup XYZ</h4>
              <p>Membangun UI komponen, mengimplementasikan desain responsive, dan mengoptimalkan kecepatan halaman.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="section-title">Proyek & Pencapaian</div>
        <div class="item">
          <div>
            <h4>Platform Marketplace (2023)</h4>
            <p>Memimpin redesign end-to-end dan mempercepat waktu onboarding pengguna baru hingga 40%.</p>
          </div>
          <div class="meta">Tools: Figma, React</div>
        </div>

        <div class="item" style="margin-top:12px">
          <div>
            <h4>Aplikasi Mobile (2021)</h4>
            <p>Mendesain flow payment & checkout yang menurunkan drop-off rate.</p>
          </div>
          <div class="meta">Tools: Sketch, Vue</div>
        </div>
      </div>

      <div class="card">
        <div class="section-title">Sertifikat & Kursus</div>
        <div class="contact">Google UX Design · Coursera · 2021<br>Front-end Developer Bootcamp · 2020</div>
      </div>

      <footer style="margin-top:16px;color:var(--muted);font-size:13px">CV dibuat otomatis — ubah teks, foto, dan detail sesuai kebutuhan. Untuk menyimpan sebagai file: File &gt; Save As &gt; pilih ".html" lalu buka di browser.</footer>
    </section>
  </div>

  <script>
    // Simple export as PNG using html2canvas if available; fallback to print
    function downloadPNG(){
      if(typeof html2canvas === 'undefined'){
        alert('Fungsi download PNG memerlukan library html2canvas. Untuk sekarang gunakan Print (Save as PDF) atau simpan file HTML lalu screenshot.');
        return;
      }
      const wrap = document.querySelector('.cv-wrap');
      html2canvas(wrap,{scale:2,backgroundColor:null}).then(canvas=>{
        const link = document.createElement('a');
        link.download = 'CV - Nama Anda.png';
        link.href = canvas.toDataURL('image/png');
        link.click();
      }).catch(()=>alert('Gagal membuat PNG'));
    }
  </script>

  <!-- Optional: if you want html2canvas to work, uncomment this script and host the library locally or via CDN -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script> -->
</body>
</html>
