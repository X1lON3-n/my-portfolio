<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Futuristic CV</title>
  <style>
    body {
      margin: 0;
      font-family: 'Orbitron', sans-serif;
      background: radial-gradient(circle at top, #0f0f1f, #000000);
      color: #e0e0e0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .cv-container {
      width: 850px;
      background: rgba(20, 20, 35, 0.9);
      border: 2px solid rgba(0, 255, 255, 0.3);
      border-radius: 16px;
      padding: 40px;
      box-shadow: 0 0 30px rgba(0, 255, 255, 0.2);
      backdrop-filter: blur(6px);
    }

    h1, h2, h3 {
      color: #00eaff;
      margin-bottom: 10px;
    }

    .header {
      display: flex;
      align-items: center;
      border-bottom: 2px solid rgba(0, 255, 255, 0.2);
      padding-bottom: 20px;
      margin-bottom: 30px;
    }

    .profile-pic {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      margin-right: 25px;
      border: 3px solid #ff00ff;
      box-shadow: 0 0 15px #ff00ff, 0 0 25px #00eaff;
      background: url('https://via.placeholder.com/130') center/cover;
    }

    .name-title {
      flex: 1;
    }

    .name-title h1 {
      font-size: 2.5rem;
      text-shadow: 0 0 10px #00eaff, 0 0 20px #ff00ff;
    }

    .tagline {
      font-size: 1.1rem;
      color: #a0faff;
    }

    section {
      margin-bottom: 25px;
    }

    .skills, .software, .experience, .studies, .personal {
      padding: 15px;
      border: 1px solid rgba(0, 255, 255, 0.3);
      border-radius: 12px;
      margin-bottom: 20px;
      background: rgba(255, 255, 255, 0.03);
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
      margin-bottom: 10px;
    }

    .bar {
      height: 8px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 4px;
      overflow: hidden;
      margin-top: 4px;
    }

    .fill {
      height: 100%;
      background: linear-gradient(90deg, #00eaff, #ff00ff);
    }

    .contact-info {
      display: flex;
      flex-direction: column;
      gap: 5px;
      font-size: 0.9rem;
    }

    .glow-text {
      color: #fff;
      text-shadow: 0 0 10px #00eaff, 0 0 20px #ff00ff, 0 0 30px #00eaff;
    }
  </style>
</head>
<body>
  <div class="cv-container">
    <div class="header">
<div class="profile-pic"></div>

<style>
   .profile-pic {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      margin-right: 25px;
      border: 3px solid #ff00ff;
      box-shadow: 0 0 15px #ff00ff, 0 0 25px #00eaff;
    background-image: url('{{ asset('images/profile.jpg') }}');
    background-size: cover;
    background-position: center;
   }
</style>
      <div class="name-title">
        <h1 class="glow-text">Muhammad Nabil</h1>
        <div class="tagline">Editor | Designer | Photographer</div>
      </div>
    </div>

    <section class="skills">
      <h2>Skills</h2>
      <ul>
        <li>Videography</li>
        <li>Photography</li>
        <li>Editing</li>
        <li>Design</li>
      </ul>
    </section>

    <section class="software">
      <h2>Software</h2>
      <ul>
        <li>CapCut</li>
        <li>Lightroom</li>
        <li>Inkscape</li>
        <li>Canva</li>
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
        <li>SD Islam Nurul Musthofa – Juwiring, Klaten (2015–2021)</li>
        <li>SMP Islam Nurul Musthofa – Juwiring, Klaten (2021–2024)</li>
        <li>Pondok Tahfidz & IT Hubbul Khoir – Sukoharjo (2024–Now)</li>
      </ul>
    </section>

    <section class="skills">
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
