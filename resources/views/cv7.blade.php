<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Nabil | Gaya Koran</title>
  <style>
    body {
      margin: 0;
      font-family: 'Georgia', serif;
      background: #f8f8f8;
      color: #111;
      line-height: 1.6;
    }

    .cv-container {
      display: grid;
      grid-template-columns: 1fr 2fr;
      max-width: 1000px;
      margin: 40px auto;
      background: #fff;
      border: 1px solid #000;
      box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
    }

    .left {
      padding: 20px;
      border-right: 1px solid #000;
      background: #fafafa;
    }

    .profile-pic {
      width: 100%;
      max-width: 220px;
      border: 2px solid #000;
      margin-bottom: 15px;
    }

    .headline {
      font-size: 1.8em;
      font-weight: bold;
      border-bottom: 2px solid #000;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .subheadline {
      font-size: 1.2em;
      font-style: italic;
      margin-bottom: 20px;
    }

    .info p {
      margin: 6px 0;
      font-size: 0.95em;
    }

    .right {
      padding: 20px;
    }

    .section {
      margin-bottom: 25px;
    }

    .section h2 {
      font-size: 1.4em;
      text-transform: uppercase;
      border-bottom: 1px solid #000;
      margin-bottom: 10px;
    }

    .timeline {
      list-style: none;
      padding: 0;
    }

    .timeline li {
      margin-bottom: 15px;
    }

    .timeline span {
      font-weight: bold;
      display: block;
    }

    .skills {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 10px;
    }

    .skills div {
      border: 1px solid #000;
      padding: 10px;
      text-align: center;
      font-size: 0.9em;
    }
  </style>
</head>
<body>
  <div class="cv-container">
    <!-- Kiri -->
    <div class="left">
<div class="profile-pic"></div>

<style>
   .profile-pic {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      margin-right: 35px;
    background-image: url('{{ asset('images/profile.jpg') }}');
    background-size: cover;
    background-position: center;
   }     
   </style>
   <div class="headline">Muhammad Nabil</div>
      <div class="subheadline">Creative Designer</div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam.</p>

      <div class="info">
        <p><strong>Age:</strong> 17 Tahun</p>
        <p><strong>Address:</strong> Mojokerto, Jawa Timur</p>
        <p><strong>Phone:</strong> 0812-8873-6082</p>
        <p><strong>Email:</strong> (957muhammadnabil)@gmail.com</p>
        <p><strong>Instagram:</strong> npr07</p>
      </div>
    </div>

    <!-- Kanan -->
    <div class="right">
      <div class="section">
        <h2>Experience</h2>
        <ul class="timeline">
          <li>
            <span>2025</span>
          </li>
          OSN
          <li>
            <span>10-9-2025</span>
          </li>
          OSN
          <li>
            <span>-2025</span>
            Lomba Cerdas Cermat Islam - UNS
          </li>
        </ul>
      </div>

      <div class="section">
        <h2>Education</h2>
        <ul class="timeline">
          <li>
            <span>2015 - 2021</span>
            SD Islam AS-SAALAM
          </li>
          <li>
            <span>2021 - 2024</span>
            SMPIT AL-ANWAR
          </li>
          <li>
            <span>2024 - 2027</span>
            Ponpes Hubbul Khoir Sukoharjo
          </li>
        </ul>
      </div>

      <div class="section">
        <h2>My Skills</h2>
        <div class="skills">
          <div>Desain Grafis</div>
          <div>Video Editing</div>
          <div>Fotografi</div>
          <div>UI/UX</div>
          <div>Branding</div>
          <div>Content Creator</div>
        </div>
      </div>
    </div>
  </div>
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

</body>
</html>
