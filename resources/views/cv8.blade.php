@extends('layouts.app')

@section('title', 'Curriculum Vitae')

@section('content')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap');

  .cv-wrapper {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    padding-top: 120px; /* jarak dari navbar */
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

  .profile-pic-large {
    width: 280px;
    height: 360px;
    margin: 0 auto;
    border-radius: 16px;
    border: 3px solid #00eaff;
    box-shadow: 0 0 25px #00eaff, 0 0 40px #ff00ff;
    background-image: url('images/profile.jpg');
    background-size: cover;
    background-position: center;
    animation: glowPulse 3s infinite ease-in-out;
  }

  .print-btn {
    display: inline-block;
    margin: 30px auto 0;
    padding: 12px 28px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    background: linear-gradient(90deg, #00eaff, #ff00ff);
    border: none;
    border-radius: 12px;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 0 15px rgba(0, 234, 255, 0.5), 0 0 25px rgba(255, 0, 255, 0.5);
    transition: transform 0.2s, box-shadow 0.2s;
    animation: glowPulse 3s infinite ease-in-out;
  }

  .print-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 25px rgba(0, 234, 255, 0.8), 0 0 35px rgba(255, 0, 255, 0.8);
  }

  /* Responsif */
  @media (max-width:880px){
    .cv-container{width:95%}
    .profile-pic-large{width:200px;height:260px}
  }

  /* Print Styles */
  @media print{
    body{padding:0;background:#fff;color:#000}
    .cv-container{box-shadow:none;border-radius:0;background:#fff;color:#000;max-width:100%;}
    .print-btn{display:none}
  }
</style>

<div class="cv-wrapper">
  <div class="cv-container">
    <div class="profile-pic-large"></div>
    <div class="name-title">
      <h1>Muhammad Nabil</h1>
      <div class="tagline">Editor | Designer | Photographer</div>
    </div>

    <section class="skills">
      <h2>Skills</h2>
      <ul>
        <li>Videography</li>
        <p>Dapat mengambil video dengan baik dan aesthetics</p>
        <li>Photography</li>
        <li>Editing</li>
        <p>Mengedit Video dengan CapCut</p>
        <li>Design</li>
      </ul>
    </section>

    <section class="software">
      <h2>Software</h2>
      <ul>
        <li>CapCut</li>
        <p>Mengedit video</p>
        <li>Lightroom</li>
        <li>Inkscape</li>
        <p>Membuat logo dan layout</p>
        <li>Canva</li>
        <p>Membuat e-book dan layouting</p>
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

    <div style="text-align:center;">
      <button class="print-btn" onclick="window.print()">Print / Save as PDF</button>
    </div>
  </div>
</div>

<!-- Tombol Back -->
<a href="{{ route('home') }}" 
   class="fixed top-5 left-5 bg-[#00eaff] text-black font-bold py-2 px-4 rounded-lg shadow hover:bg-[#33faff] transition">
   ⬅️ Back to Home
</a>
@endsection
