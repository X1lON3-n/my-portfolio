<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Portfolio')</title>
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  />
  @vite('resources/css/app.css')
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-950 text-white overflow-x-hidden">

  <!-- Canvas Background (Constellation) -->
  <canvas id="constellation" class="fixed inset-0 w-full h-full z-0"></canvas>

  <!-- Navbar -->
  <nav class="fixed top-0 left-0 w-full z-50 bg-gradient-to-r from-[#0a0025] via-[#1a0038] to-[#32004b] shadow-lg border-b border-purple-900/40 backdrop-blur-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">

      <!-- Logo -->
      <a href="{{ route('home') }}" 
        class="text-2xl font-extrabold bg-gradient-to-r from-purple-400 via-pink-500 to-indigo-400 bg-clip-text text-transparent drop-shadow-[0_0_10px_rgba(168,85,247,0.8)]">
        Portfolio.
      </a>

      <!-- Menu Desktop -->
      <ul class="hidden md:flex gap-8 font-medium">
        <li>
          <a href="{{ route('home') }}"
            class="{{ request()->routeIs('home') 
                      ? 'text-purple-300 drop-shadow-[0_0_8px_rgba(168,85,247,0.9)] after:w-full' 
                      : 'text-white hover:text-purple-300 hover:drop-shadow-[0_0_8px_rgba(168,85,247,0.8)] after:w-0 hover:after:w-full' }} 
                    relative after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-gradient-to-r after:from-purple-400 after:to-pink-500 after:transition-all">
            Home
          </a>
        </li>
        <li>
          <a href="{{ route('about') }}"
            class="{{ request()->routeIs('about') 
                      ? 'text-purple-300 drop-shadow-[0_0_8px_rgba(168,85,247,0.9)] after:w-full' 
                      : 'text-white hover:text-purple-300 hover:drop-shadow-[0_0_8px_rgba(168,85,247,0.8)] after:w-0 hover:after:w-full' }} 
                    relative after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-gradient-to-r after:from-purple-400 after:to-pink-500 after:transition-all">
            About
          </a>
        </li>
        <li>
          <a href="{{ route('project') }}"
            class="{{ request()->routeIs('project') 
                      ? 'text-purple-300 drop-shadow-[0_0_8px_rgba(168,85,247,0.9)] after:w-full' 
                      : 'text-white hover:text-purple-300 hover:drop-shadow-[0_0_8px_rgba(168,85,247,0.8)] after:w-0 hover:after:w-full' }} 
                    relative after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-gradient-to-r after:from-purple-400 after:to-pink-500 after:transition-all">
            Portfolio
          </a>
        </li>
        <li>
          <a href="{{ route('contact') }}"
            class="{{ request()->routeIs('contact') 
                      ? 'text-purple-300 drop-shadow-[0_0_8px_rgba(168,85,247,0.9)] after:w-full' 
                      : 'text-white hover:text-purple-300 hover:drop-shadow-[0_0_8px_rgba(168,85,247,0.8)] after:w-0 hover:after:w-full' }} 
                    relative after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-gradient-to-r after:from-purple-400 after:to-pink-500 after:transition-all">
            Contact
          </a>
        </li>
      </ul>


      <!-- Hamburger (Mobile) -->
      <button id="menu-btn" class="md:hidden text-2xl text-white focus:outline-none">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>

    <!-- Dropdown Mobile -->
    <div id="menu" class="hidden flex-col md:hidden bg-[#050321]/95 backdrop-blur-md px-6 py-4 space-y-3 transition-all duration-300 ease-in-out">
      <a href="{{ route('home') }}" class="block py-2 {{ request()->routeIs('home') ? 'text-purple-400' : 'text-white hover:text-purple-400' }}">Home</a>
      <a href="{{ route('about') }}" class="block py-2 {{ request()->routeIs('about') ? 'text-purple-400' : 'text-white hover:text-purple-400' }}">About</a>
      <a href="{{ route('project') }}" class="block py-2 {{ request()->routeIs('project') ? 'text-purple-400' : 'text-white hover:text-purple-400' }}">Portfolio</a>
      <a href="{{ route('contact') }}" class="block py-2 {{ request()->routeIs('contact') ? 'text-purple-400' : 'text-white hover:text-purple-400' }}">Contact</a>
    </div>
  </nav>

  <!-- Content -->
  <main class="relative z-10 pt-32 max-w-7xl mx-auto px-6">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="relative z-10 bg-[#050321] text-gray-400 text-center py-6 mt-16">
    <!-- Social Links -->
    <div class="flex justify-center space-x-6 mb-3">
      <a href="https://github.com/username" target="_blank" class="hover:text-purple-400">
        <i class="fa-brands fa-github text-xl"></i>
      </a>
      <a href="https://linkedin.com/in/username" target="_blank" class="hover:text-purple-400">
        <i class="fa-brands fa-linkedin text-xl"></i>
      </a>
      <a href="https://linkedin.com/in/username" target="_blank" class="hover:text-purple-400">
        <i class="fa-brands fa-instagram text-xl"></i>
      </a>
    </div>

    <!-- Copyright -->
    <p>&copy; {{ date('Y') }} Nabil. All rights reserved.</p>
  </footer>



  <!-- Script Rocket Follow Mouse -->
  <script>
   const rocket = document.getElementById("rocket");

    let rocketX = window.innerWidth / 2;
    let rocketY = window.innerHeight / 2;
    let targetX = rocketX;
    let targetY = rocketY;
    let angle = 0;

    document.addEventListener("mousemove", (e) => {
      targetX = e.pageX;
      targetY = e.pageY;
    });

    function animateRocket() {
      // kejar target dengan easing (0.1 = kecepatan mengikuti)
      rocketX += (targetX - rocketX) * 0.1;
      rocketY += (targetY - rocketY) * 0.1;

      // hitung arah roket
      let dx = targetX - rocketX;
      let dy = targetY - rocketY;
      angle = Math.atan2(dy, dx) * (180 / Math.PI);

      // update posisi dan rotasi
      rocket.style.transform = `translate(${rocketX}px, ${rocketY}px) rotate(${angle}deg)`;

      requestAnimationFrame(animateRocket);
    }

    animateRocket();
  </script>


  <!-- Script Rasi Bintang -->
  <script>
    const canvas = document.getElementById('constellation');
    const ctx = canvas.getContext('2d');
    let stars = [];
    const numStars = 120;
    const maxDistance = 130;

    function resizeCanvas() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    class Star {
      constructor() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.radius = Math.random() * 2;
        this.dx = (Math.random() - 0.5) * 0.5;
        this.dy = (Math.random() - 0.5) * 0.5;
      }
      move() {
        this.x += this.dx;
        this.y += this.dy;
        if (this.x < 0 || this.x > canvas.width) this.dx *= -1;
        if (this.y < 0 || this.y > canvas.height) this.dy *= -1;
      }
      draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
        ctx.fillStyle = "white";
        ctx.fill();
      }
    }

    function initStars() {
      stars = [];
      for (let i = 0; i < numStars; i++) stars.push(new Star());
    }

    function connectStars() {
      for (let a = 0; a < stars.length; a++) {
        for (let b = a + 1; b < stars.length; b++) {
          let dx = stars[a].x - stars[b].x;
          let dy = stars[a].y - stars[b].y;
          let dist = Math.sqrt(dx*dx + dy*dy);
          if (dist < maxDistance) {
            ctx.beginPath();
            ctx.moveTo(stars[a].x, stars[a].y);
            ctx.lineTo(stars[b].x, stars[b].y);
            ctx.strokeStyle = "rgba(255,255,255,"+(1-dist/maxDistance)+")";
            ctx.lineWidth = 0.5;
            ctx.stroke();
          }
        }
      }
    }

    function animate() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      stars.forEach(star => { star.move(); star.draw(); });
      connectStars();
      requestAnimationFrame(animate);
    }

    initStars();
    animate();
  </script>

</body>
</html>
