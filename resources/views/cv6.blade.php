<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Futuristic</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap');

    body {
      margin: 0;
      font-family: 'Orbitron', sans-serif;
      background: radial-gradient(circle at top, #0f0f1a, #000);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px;
    }

    .cv-container {
      width: 900px;
      background: rgba(15, 15, 30, 0.95);
      border: 2px solid #0ff;
      border-radius: 12px;
      box-shadow: 0 0 25px #0ff, inset 0 0 25px #0ff;
      padding: 30px;
      text-align: center;
    }

    .profile-pic {
      width: 180px;
      height: 180px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #0ff;
      box-shadow: 0 0 25px #0ff, 0 0 50px #0ff;
      margin-bottom: 15px;
    }

    h1 {
      font-size: 2.5em;
      font-weight: 800;
      color: #0ff;
      text-shadow: 0 0 10px #0ff, 0 0 20px #0ff;
      margin: 0;
    }

    h2 {
      font-size: 1.2em;
      font-weight: 600;
      color: #ff00ff;
      text-shadow: 0 0 10px #ff00ff;
      margin: 5px 0 20px;
    }

    .cv-content {
      display: flex;
      justify-content: space-between;
      text-align: left;
      margin-top: 30px;
    }

    .section {
      width: 45%;
    }

    .section h3 {
      color: #0ff;
      font-size: 1.3em;
      border-bottom: 2px solid #0ff;
      margin-bottom: 10px;
      padding-bottom: 5px;
    }

    .section p, .section li {
      font-size: 0.95em;
      line-height: 1.6;
      color: #ccc;
    }

    ul {
      padding-left: 20px;
    }

    /* Glow Divider */
    .divider {
      height: 2px;
      background: linear-gradient(90deg, transparent, #0ff, transparent);
      margin: 30px 0;
    }
  </style>
</head>
<body>
  <div class="cv-container">
    <!-- Foto Tengah -->
    <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil" class="profile-pic">

    <!-- Nama & Job Title -->
    <h1>Muhammad Nabil</h1>
    <h2>Web Devolopment</h2>

    <div class="divider"></div>

    <!-- Isi kiri kanan -->
    <div class="cv-content">
      <!-- Kiri -->
      <div class="section">
        <h3>Profil</h3>
        <p>Sekilas tentang saya.</p>

        <h3>Kontak</h3>
        <p>Email: 957muhammadnabil@gmail.com</p>
        <p>Telepon: +62 812 3456 7890</p>
        <p>LinkedIn: linkedin.com/in/username</p>

        <h3>Keterampilan</h3>
        <ul>
          <li>UI/UX Design</li>
          <li>Front-End Development</li>
          <li>Machine Learning</li>
          <li>Cloud Computing</li>
        </ul>
      </div>

      <!-- Kanan -->
      <div class="section">
        <h3>Pengalaman</h3>
        <p><strong>Software Engineer</strong> - Perusahaan A (2021 - Sekarang)</p>
        <p>Mengerjakan proyek AI dan platform cloud skala besar.</p>

        <p><strong>UI/UX Designer</strong> - Perusahaan B (2019 - 2021)</p>
        <p>Membuat desain aplikasi dengan nuansa futuristik.</p>

        <h3>Pendidikan</h3>
        <p><strong>S1 Teknik Informatika</strong> - Universitas XYZ</p>
        <p>Lulus dengan predikat Cumlaude.</p>
      </div>
    </div>
  </div>
</body>
</html>
