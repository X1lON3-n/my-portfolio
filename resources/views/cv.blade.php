<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Nabil — Personal Brand</title>
  <meta name="description" content="Personal branding portfolio — clean liquid-glass design with animated cards (GSAP + Tailwind).">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <style>
    /* Liquid glass base */
    .glass {
      background: linear-gradient(135deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02));
      backdrop-filter: blur(10px) saturate(120%);
      -webkit-backdrop-filter: blur(10px) saturate(120%);
      border: 1px solid rgba(255,255,255,0.06);
      box-shadow: 0 8px 30px rgba(2,6,23,0.5);
      border-radius: 16px;
    }

    /* Reusable anim-box look */
    .anim-box { transition: box-shadow .2s ease, transform .2s ease; will-change: transform, opacity; }

    /* Sheen overlay for glass cards */
    .sheen::after{
      content: '';
      position: absolute; left: -30%; top: -40%; width: 200%; height: 60%;
      background: linear-gradient(90deg, rgba(255,255,255,0.12), rgba(255,255,255,0));
      transform: rotate(-20deg);
      pointer-events: none; mix-blend-mode: overlay;
    }

    /* small utility for avatar ring */
    .avatar-ring { box-shadow: 0 8px 20px rgba(99,102,241,0.12); }

    /* ensure interactive elements have focus styles */
    .focus-ring:focus { outline: 3px solid rgba(99,102,241,0.18); outline-offset: 3px; }

    /* fallback for prefers-reduced-motion */
    @media (prefers-reduced-motion: reduce) {
      * { animation-duration: 0.01ms !important; transition-duration: 0.01ms !important; }
    }
  </style>
</head>
<body class="bg-gradient-to-b from-[#071428] to-[#061022] text-slate-100 antialiased">
  <!-- Decorative blobs (subtle animated background) -->
  <div aria-hidden class="pointer-events-none">
    <div class="absolute left-6 top-8 w-64 h-64 rounded-full bg-purple-600/30 blur-3xl mix-blend-screen" id="bg-blob-1"></div>
    <div class="absolute right-6 top-1/4 w-80 h-80 rounded-full bg-pink-500/20 blur-3xl mix-blend-screen" id="bg-blob-2"></div>
  </div>

  <!-- Header -->
  <header class="max-w-6xl mx-auto px-6 py-6 flex items-center justify-between">
    <a href="#" class="text-xl font-semibold">Portofolio<span class="text-indigo-400">.</span></a>
    <nav class="hidden md:flex gap-6 text-sm items-center">
      <a href="#about" class="hover:underline">About</a>
      <a href="#skills" class="hover:underline">Skills</a>
      <a href="#work" class="hover:underline">Work</a>
      <a href="#contact" class="px-3 py-2 glass rounded-full text-xs">Contact</a>
    </nav>
    <button id="nav-toggle" class="md:hidden p-2 glass rounded-lg focus-ring" aria-label="Open menu">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path stroke="currentColor" stroke-width="1.6" stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </header>

  <main class="max-w-6xl mx-auto px-6 pb-20">
    <!-- HERO -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-6">
      <!-- left: intro -->
      <div class="space-y-4">
        <div class="glass p-6 rounded-2xl relative flex items-center gap-4 overflow-hidden" id="hero-card">
          <img src="#" alt="Avatar" class="w-24 h-24 rounded-xl object-cover avatar-ring" />
          <div>
            <h1 class="text-3xl md:text-4xl font-bold leading-tight" id="hero-name">Muhammad Nabil</h1>
            <p class="text-slate-300 mt-1" id="hero-tagline">I build digital products that look great and feel intuitive.</p>
            <div class="mt-4 flex gap-3">
              <a href="#contact" class="glass px-4 py-2 rounded-md font-medium">Hire Me</a>
              <a href="#work" class="underline text-sm">See My Portfolio</a>
            </div>
          </div>
          <!-- subtle aria-hidden flourish -->
          <div class="absolute right-3 bottom-3 text-xs text-slate-400">Available for freelance</div>
        </div>

        <!-- Short intro / bio box (anim-box) -->
        <div class="anim-box glass p-6 rounded-2xl relative" data-anim-id="about">
          <h3 class="font-semibold text-lg">Hi, I'm [Namamu].</h3>
          <p class="text-slate-300 mt-2 text-sm">Designer & developer focusing on clean UI, accessible experiences, and delightful micro-interactions. I combine design systems with handcrafted animations to tell product stories.</p>
        </div>

        <!-- quick stats -->
        <div class="grid grid-cols-3 gap-3">
          <div class="anim-box glass p-3 rounded-xl text-center" data-anim-id="stat-1">
            <div class="text-xl font-bold">50+</div>
            <div class="text-xs text-slate-300">Projects</div>
          </div>
          <div class="anim-box glass p-3 rounded-xl text-center" data-anim-id="stat-2">
            <div class="text-xl font-bold">8 yrs</div>
            <div class="text-xs text-slate-300">Experience</div>
          </div>
          <div class="anim-box glass p-3 rounded-xl text-center" data-anim-id="stat-3">
            <div class="text-xl font-bold">Remote</div>
            <div class="text-xs text-slate-300">Available</div>
          </div>
        </div>
      </div>

      <!-- right: featured project card (anim-box) -->
      <aside class="relative">
        <div class="anim-box glass p-6 rounded-2xl w-full max-w-md mx-auto" data-anim-id="project-hero">
          <div class="h-48 rounded-md bg-[url('https://images.unsplash.com/photo-1508921912186-1d1a45ebb3c1?auto=format&fit=crop&w=1600&q=60')] bg-cover bg-center"></div>
          <div class="mt-4 flex items-center justify-between">
            <div>
              <div class="text-sm font-medium">Featured Project</div>
              <div class="text-xs text-slate-300">Product Design • Motion</div>
            </div>
            <div class="text-xs text-slate-400">2025</div>
          </div>
        </div>

        <!-- floating mini-cards (animated) -->
        <div class="absolute -left-8 -top-8 w-40 anim-box" data-anim-id="mini-1">
          <div class="glass p-3 rounded-xl">UX Research</div>
        </div>
        <div class="absolute -right-10 top-28 w-44 anim-box" data-anim-id="mini-2">
          <div class="glass p-3 rounded-xl">Design Systems</div>
        </div>
      </aside>
    </section>

    <!-- SKILLS / SERVICES -->
    <section id="skills" class="mt-16">
      <h2 class="text-2xl font-bold">Skills & Expertise</h2>
      <p class="text-slate-300 mt-2 max-w-2xl">Tools and areas I work with frequently. Each card animates on scroll and has its own hover personality.</p>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <!-- skill boxes: each has data-anim-id to be registered as a 'component' animation -->
        <div class="anim-box glass p-6 rounded-1xl relative hover:scale-105" data-anim-id="skill-1">
          <h3 class="font-semibold">Product Design</h3>
          <p class="text-slate-300 text-sm mt-2">User flows, wireframes, prototypes.</p>
        </div>

        <div class="anim-box glass p-6 rounded-1xl relative hover:scale-105" data-anim-id="skill-2">
          <h3 class="font-semibold">UI Animation</h3>
          <p class="text-slate-300 text-sm mt-2">Micro-interactions, motion systems.</p>
        </div>

        <div class="anim-box glass p-6 rounded-1xl relative hover:scale-105" data-anim-id="skill-3">
          <h3 class="font-semibold">Frontend Dev</h3>
          <p class="text-slate-300 text-sm mt-2">HTML, CSS, JS — performance-minded.</p>
        </div>

        <div class="anim-box glass p-6 rounded-2xl relative hover:scale-105" data-anim-id="skill-4">
          <h3 class="font-semibold">Design Systems</h3>
          <p class="text-slate-300 text-sm mt-2">Reusable components & tokens.</p>
        </div>

        <div class="anim-box glass p-6 rounded-2xl relative hover:scale-105" data-anim-id="skill-5">
          <h3 class="font-semibold">Product Strategy</h3>
          <p class="text-slate-300 text-sm mt-2">Roadmaps, user research, KPIs.</p>
        </div>

        <div class="anim-box glass p-6 rounded-2xl relative hover:scale-105" data-anim-id="skill-6">
          <h3 class="font-semibold">Brand Identity</h3>
          <p class="text-slate-300 text-sm mt-2">Logo, tone, storytelling.</p>
        </div>
      </div>
    </section>

    <!-- PORTFOLIO / PROJECTS -->
    <section id="work" class="mt-16">
      <h2 class="text-2xl font-bold">Portfolio</h2>
      <p class="text-slate-300 mt-2">Selected projects with short descriptions. Click to open detail (demo links).</p>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <article class="anim-box glass p-4 rounded-2xl" data-anim-id="proj-1">
          <div class="h-40 bg-[url('https://images.unsplash.com/photo-1503602642458-232111445657?auto=format&fit=crop&w=1600&q=60')] bg-cover bg-center rounded-md"></div>
          <h4 class="mt-3 font-semibold">Landing Page for Product X</h4>
          <p class="text-xs text-slate-300 mt-1">Conversion-focused UI with animated hero.</p>
        </article>

        <article class="anim-box glass p-4 rounded-2xl" data-anim-id="proj-2">
          <div class="h-40 bg-[url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=60')] bg-cover bg-center rounded-md"></div>
          <h4 class="mt-3 font-semibold">Mobile App Concept</h4>
          <p class="text-xs text-slate-300 mt-1">Prototyping with a focus on accessibility.</p>
        </article>

        <article class="anim-box glass p-4 rounded-2xl" data-anim-id="proj-3">
          <div class="h-40 bg-[url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1600&q=60')] bg-cover bg-center rounded-md"></div>
          <h4 class="mt-3 font-semibold">Brand & Motion Suite</h4>
          <p class="text-xs text-slate-300 mt-1">Animated identity system for launch.</p>
        </article>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="mt-16 grid md:grid-cols-2 gap-8 items-start">
      <div class="anim-box" data-anim-id="contact-intro">
        <h2 class="text-2xl font-bold">Let's work together</h2>
        <p class="text-slate-300 mt-2">I'm available for freelance and full-time opportunities. Send a brief message and I'll reply within 48 hours.</p>

        <div class="mt-6 flex gap-3">
          <a href="#" class="glass px-4 py-2 rounded-md">Email me</a>
          <a href="#" class="glass px-4 py-2 rounded-md">Download CV</a>
        </div>
      </div>

      <form class="glass p-6 rounded-2xl anim-box" data-anim-id="contact-form" onsubmit="event.preventDefault(); alert('Form simulated — thank you!')">
        <label class="block text-xs text-slate-300">Name</label>
        <input class="w-full mt-1 bg-transparent border border-white/6 rounded-md p-2 text-white text-sm" placeholder="Your name" />
        <label class="block text-xs text-slate-300 mt-3">Email</label>
        <input class="w-full mt-1 bg-transparent border border-white/6 rounded-md p-2 text-white text-sm" placeholder="you@domain.com" />
        <label class="block text-xs text-slate-300 mt-3">Message</label>
        <textarea class="w-full mt-1 bg-transparent border border-white/6 rounded-md p-2 text-white text-sm" rows="4" placeholder="Describe your project..."></textarea>
        <div class="mt-4 flex justify-end">
          <button class="px-4 py-2 glass rounded-md">Send</button>
        </div>
      </form>
    </section>

    <!-- Footer -->
    <footer class="mt-16 py-8 text-sm text-slate-400 flex items-center justify-between">
      <div>© <strong>[Namamu]</strong> 2025</div>
      <div class="flex gap-4">
        <a href="#">Privacy</a>
        <a href="#">Terms</a>
      </div>
    </footer>
  </main>

  <script>
    // GSAP setup
    gsap.registerPlugin(ScrollTrigger);

    // gentle background blob motion
    gsap.to('#bg-blob-1', { x: 30, y: -20, duration: 8, repeat: -1, yoyo: true, ease: 'sine.inOut' });
    gsap.to('#bg-blob-2', { x: -30, y: 20, duration: 10, repeat: -1, yoyo: true, ease: 'sine.inOut' });

    // typing effect for tagline (simple)
    (function typingEffect(){
      const el = document.getElementById('hero-tagline');
      const text = el.textContent;
      el.textContent = '';
      let i=0;
      const t = setInterval(()=>{
        el.textContent += text[i++]||'';
        if(i>text.length) clearInterval(t);
      }, 24);
    })();

    // reusable "component" animation factory for boxes
    function registerBoxAnimation(selector, opts = {}){
      const el = document.querySelector(selector);
      if(!el) return;

      // entrance animation
      gsap.from(el, {
        y: opts.y||30,
        opacity: 0,
        duration: opts.duration||0.9,
        ease: 'power3.out',
        scrollTrigger: { trigger: el, start: opts.start||'top 90%' }
      });

      // hover interactive micro-animation
      el.addEventListener('mouseenter', ()=>{
        gsap.to(el, { scale: 1.03, boxShadow: '0 18px 40px rgba(2,6,23,0.6)', rotationY: opts.hoverRotate||0, duration: 0.45, ease: 'power2.out' });
      });
      el.addEventListener('mouseleave', ()=>{
        gsap.to(el, { scale: 1, boxShadow: '0 8px 30px rgba(2,6,23,0.45)', rotationY: 0, duration: 0.45, ease: 'power2.out' });
      });

      // subtle pulse if requested
      if(opts.pulse){
        gsap.to(el, { scale: '+=0.008', duration: 1.6, yoyo: true, repeat: -1, ease: 'sine.inOut', delay: 0.2 });
      }
    }

    // register all boxes by data-anim-id (each box becomes its "component")
    document.querySelectorAll('[data-anim-id]').forEach((box, i)=>{
      const id = box.getAttribute('data-anim-id');
      // decide different options per id pattern
      const base = { duration: 0.9, start: 'top 92%' };
      if(id.startsWith('skill')) registerBoxAnimation('[data-anim-id="'+id+'"]', Object.assign({}, base, { y: 40, hoverRotate: (i%2===0?6:-6) }));
      else if(id.startsWith('proj')) registerBoxAnimation('[data-anim-id="'+id+'"]', Object.assign({}, base, { y: 60, hoverRotate: (i%2===0?4:-4) }));
      else if(id.startsWith('stat')) registerBoxAnimation('[data-anim-id="'+id+'"]', Object.assign({}, base, { y: 20, pulse: true }));
      else if(id.includes('mini')) registerBoxAnimation('[data-anim-id="'+id+'"]', Object.assign({}, base, { y: -10, duration: 1.2 }));
      else registerBoxAnimation('[data-anim-id="'+id+'"]', Object.assign({}, base, { y: 30 }));
    });

    // stagger animation for skills grid (nice group reveal)
    gsap.from('[data-anim-id^="skill"]', {
      y: 50, opacity:0, duration: 0.9, stagger: 0.12, ease: 'power3.out',
      scrollTrigger: { trigger: '#skills', start: 'top 85%' }
    });

    // nav toggle for mobile
    document.getElementById('nav-toggle').addEventListener('click', ()=>{
      const nav = document.createElement('div');
      nav.innerHTML = `
        <div class="fixed inset-0 bg-black/40 z-50 flex justify-end">
          <div class="w-3/4 sm:w-1/2 p-6 glass">
            <button id=\"closeNav\" class=\"glass p-2 rounded mb-4\">Close</button>
            <nav class=\"flex flex-col gap-3\">
              <a href=\"#about\">About</a>
              <a href=\"#skills\">Skills</a>
              <a href=\"#work\">Work</a>
              <a href=\"#contact\">Contact</a>
            </nav>
          </div>
        </div>
      `;
      document.body.appendChild(nav);
      document.getElementById('closeNav').addEventListener('click', ()=> nav.remove());
    });

    // accessibility: focus visible on links inside cards
    document.querySelectorAll('.glass a, .glass button').forEach(el=> el.classList.add('focus-ring'));

  </script>
</body>
</html>
