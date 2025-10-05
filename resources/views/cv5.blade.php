<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Futuristic CV</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap');

    body {
      margin: 0;
      font-family: 'Orbitron', sans-serif;
      background: radial-gradient(circle at top, #0f0f1f, #000000);
      color: #e0e0e0;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      padding: 40px 0;
    }

    .cv-container {
      width: 900px;
      background: rgba(20, 20, 35, 0.85);
      border: 2px solid rgba(0, 255, 255, 0.3);
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 0 40px rgba(0, 255, 255, 0.3);
      backdrop-filter: blur(10px);
      animation: borderGlow 4s infinite alternate;
    }

    @keyframes borderGlow {
      from { box-shadow: 0 0 20px #00eaff, 0 0 40px #ff00ff; }
      to { box-shadow: 0 0 40px #ff00ff, 0 0 70px #00eaff; }
    }

   
    @keyframes glowPulse {
      0% { box-shadow: 0 0 20px #00eaff, 0 0 40px #ff00ff; }
      50% { box-shadow: 0 0 40px #ff00ff, 0 0 70px #00eaff; }
      100% { box-shadow: 0 0 20px #00eaff, 0 0 40px #ff00ff; }
    }

    .name-title {
      text-align: center;
      margin-top: 25px;
    }

    .name-title h1 {
      font-size: 2.6rem;
      color: #fff;
      text-shadow: 0 0 10px #00eaff, 0 0 20px #ff00ff;
    }

    .tagline {
      font-size: 1.2rem;
      color: #a0faff;
    }

    section {
      margin-top: 35px;
    }

    h2 {
      color: #00eaff;
      margin-bottom: 12px;
      text-transform: uppercase;
      border-left: 4px solid #ff00ff;
      padding-left: 10px;
    }

    .skills, .software, .experience, .studies, .personal, .soft-skills {
      padding: 20px;
      border: 1px solid rgba(0, 255, 255, 0.3);
      border-radius: 12px;
      margin-bottom: 20px;
      background: rgba(255, 255, 255, 0.03);
      animation: boxGlow 6s infinite alternate;
    }

    @keyframes boxGlow {
      from { border-color: rgba(0, 255, 255, 0.3); }
      to { border-color: rgba(255, 0, 255, 0.5); }
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    ul li::before {
      content: '▸';
      color: #ff00ff;
      margin-right: 8px;
    }

    .soft-skill {
      margin-bottom: 14px;
    }

    .bar {
      height: 10px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 5px;
      overflow: hidden;
      margin-top: 6px;
    }

    .fill {
      height: 100%;
      background: linear-gradient(90deg, #00eaff, #ff00ff);
      animation: fillAnim 2s ease-out;
    }

    @keyframes fillAnim {
      from { width: 0; }
      to { width: 100%; }
    }

    .contact-info {
      display: flex;
      flex-direction: column;
      gap: 6px;
      font-size: 0.95rem;
    }
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
  <div class="cv-container">
    <div class="profile-pic-large"></div>

<style>
    .profile-pic-large {
      width: 280px;
      height: 360px;
      margin: 0 auto;
      border-radius: 16px;
      border: 3px solid #00eaff;
      box-shadow: 0 0 25px #00eaff, 0 0 40px #ff00ff;
    background-image: url('{{ asset('images/profile.jpg') }}');
        background-position: center;
      animation: glowPulse 3s infinite ease-in-out;
    }
</style>

    <div class="name-title">
      <h1>Muhammad Nabil</h1>
      <div class="tagline">Editor | Designer | Photographer</div>
    </div>

    <section class="skills">
      <h2>Skills</h2>
      <ul>
        <li>Videography</li>
        <p>Dapat Mengambil Video dengan baik dan aesthetics</p>
        <li>Photography</li>
        <li>Editing</li>
        <p>Mengedit Video dengan Capcut<p>
        <li>Design</li>
      </ul>
    </section>

    <section class="software">
      <h2>Software</h2>
      <ul>
        <li>CapCut</li>
        <p>Mengedit Video</p>
        <li>Lightroom</li>
        <li>Inkscape</li>
        <p> Membuat Logo dan Layout<p>
        <li>Canva</li>
        <p>Membuat E-Books dan Layouting<p>
      </ul>
    </section>

    <section class="experience">
      <h2>Experience</h2>
      <ul>
        <li>Documentation Team – SMP Islam Nurul Musthofa (2022–2023)</li>
        <li>Media Team – PP Hubbul Khoir (2024–Now)</li>
        <li>Social Media Team – Biro Sahabat Umroh (2025–Now)</li>
      </ul>
    </section>

    <section class="studies">
      <h2>Studies</h2>
      <ul>
        <li>SD Islam As-Salaam – Pejagoan, Kebumen (2015–2021)</li>
        <li>SMP Islam Terpadu Al-Anwar – Mojosari, Mojokerto (2021–2024)</li>
        <li>Pondok Tahfidz & IT Hubbul Khoir – Sukoharjo (2024–Now)</li>
      </ul>
    </section>

    <section class="soft-skills">
      <h2>Soft Skills</h2>
      <div class="soft-skill">Communication
        <div class="bar"><div class="fill" style="width: 90%"></div></div>
      </div>
      <div class="soft-skill">Teamwork
        <div class="bar"><div class="fill" style="width: 80%"></div></div>
      </div>
      <div class="soft-skill">Creativity
        <div class="bar"><div class="fill" style="width: 85%"></div></div>
      </div>
      <div class="soft-skill">Problem Solving
        <div class="bar"><div class="fill" style="width: 80%"></div></div>
      </div>
    </section>

    <section class="personal">
      <h2>Personal Information</h2>
      <div class="contact-info">
        <span>📧 muhfadillah.arhab@gmail.com</span>
        <span>📱 0823-2334-4662</span>
        <span>📍 Klaten, Jawa Tengah, Indonesia</span>
        <span>🔗 Instagram: @lens.hab</span>
      </div>
    </section>
  </div>
</body>
</html>