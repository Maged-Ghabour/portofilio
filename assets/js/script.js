// ===== Preloader =====
function hidePreloader() {
  const preloader = document.getElementById('preloader');
  if (preloader && preloader.style.display !== 'none') {
    preloader.classList.add('fade-out');
    setTimeout(() => { preloader.style.display = 'none'; }, 600);
  }
}
window.addEventListener('load', hidePreloader);
setTimeout(hidePreloader, 1500); // Fallback in case 'load' is delayed

// ===== AOS Init =====
AOS.init({ duration: 800, once: true, offset: 80 });

// ===== Typed.js =====
const typedStrings = window.magedTypedStrings || {
  en: ['PHP Developer', 'Laravel Developer', 'Full Stack Developer', 'Web Developer'],
  ar: ['مطور PHP', 'مطور Laravel', 'مطور ويب متكامل', 'مطور ويب']
};
let typedInstance = null;
function initTyped(lang) {
  const typedEl = document.querySelector('#typed-text');
  if (!typedEl) return;
  
  if (typedInstance) typedInstance.destroy();
  typedInstance = new Typed('#typed-text', {
    strings: typedStrings[lang],
    typeSpeed: 60,
    backSpeed: 40,
    loop: true,
    showCursor: true,
    cursorChar: '|'
  });
}
initTyped('en');

// ===== Language Toggle =====
let currentLang = 'en';
const langBtn = document.getElementById('lang-toggle');

function applyLanguage(lang) {
  currentLang = lang;
  const html = document.documentElement;

  if (lang === 'ar') {
    html.setAttribute('lang', 'ar');
    html.setAttribute('dir', 'rtl');
    document.body.classList.add('rtl');
    langBtn.textContent = 'English';
  } else {
    html.setAttribute('lang', 'en');
    html.setAttribute('dir', 'ltr');
    document.body.classList.remove('rtl');
    langBtn.textContent = 'عربي';
  }

  // Translate all data-en / data-ar elements
  document.querySelectorAll('[data-en]').forEach(el => {
    const text = el.getAttribute('data-' + lang);
    if (text) el.innerHTML = text;
  });

  // Translate placeholders
  document.querySelectorAll('[data-en-placeholder]').forEach(el => {
    const ph = el.getAttribute('data-' + lang + '-placeholder');
    if (ph) el.placeholder = ph;
  });

  // Restart typed
  initTyped(lang);
  localStorage.setItem('portfolio-lang', lang);
}

if (langBtn) {
  langBtn.addEventListener('click', () => {
    applyLanguage(currentLang === 'en' ? 'ar' : 'en');
  });
}

// Load saved language
const savedLang = localStorage.getItem('portfolio-lang');
if (savedLang && savedLang !== 'en') applyLanguage(savedLang);

// ===== Mobile Menu =====
const menuBtn = document.getElementById('menu');
const header = document.querySelector('header');
if (menuBtn && header) {
  menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('fa-times');
    header.classList.toggle('open');
  });
}
window.addEventListener('scroll', () => {
  menuBtn.classList.remove('fa-times');
  header.classList.remove('open');
});

// ===== Active Nav on Scroll =====
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('header .navbar ul li a');
window.addEventListener('scroll', () => {
  let current = '';
  sections.forEach(sec => {
    if (window.scrollY >= sec.offsetTop - 200) current = sec.getAttribute('id');
  });
  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href') === '#' + current) link.classList.add('active');
  });
});

// ===== Scroll Top Button =====
const scrollTop = document.getElementById('scroll-top');
window.addEventListener('scroll', () => {
  scrollTop.classList.toggle('show', window.scrollY > 300);
});

// ===== Smooth Scroll =====
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const target = document.querySelector(this.getAttribute('href'));
    if (!target) return;
    e.preventDefault();
    target.scrollIntoView({ behavior: 'smooth' });
  });
});

// ===== Skills Animation =====
const skillObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.querySelectorAll('.skill-fill').forEach(fill => {
        fill.style.width = fill.getAttribute('data-width') + '%';
      });
    }
  });
}, { threshold: 0.3 });
const skillsSection = document.querySelector('.skills');
if (skillsSection) skillObserver.observe(skillsSection);

// ===== Counter Animation =====
const counterObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.querySelectorAll('.count').forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        let count = 0;
        const step = Math.ceil(target / 40);
        const timer = setInterval(() => {
          count += step;
          if (count >= target) { count = target; clearInterval(timer); }
          counter.textContent = count;
        }, 40);
      });
      counterObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });
const aboutSection = document.querySelector('.about');
if (aboutSection) counterObserver.observe(aboutSection);

// ===== Nav Click Sound =====
const clickSound = document.getElementById('audio4');
document.querySelectorAll('nav ul li').forEach(li => {
  li.addEventListener('click', () => { if (clickSound) clickSound.play().catch(() => {}); });
});

// ===== Contact Form =====
const form = document.getElementById('contact-form');
if (form) {
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    const btn = form.querySelector('button[type="submit"]');
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
    setTimeout(() => {
      btn.disabled = false;
      btn.innerHTML = (currentLang === 'ar' ? '<span>إرسال الرسالة</span>' : '<span>Send Message</span>') + ' <i class="fas fa-paper-plane"></i>';
      const successMsg = document.getElementById('form-success');
      successMsg.style.display = 'flex';
      form.reset();
      setTimeout(() => { successMsg.style.display = 'none'; }, 5000);
    }, 1500);
  });
}


// ===== Theme Toggle (Dark / Light) =====
const themeBtn = document.getElementById('theme-toggle');
const whooshSound = document.getElementById('audio1');

function applyTheme(mode) {
  if (mode === 'light') {
    document.body.classList.add('light-mode');
    themeBtn.innerHTML = '<i class="fas fa-moon"></i>';
  } else {
    document.body.classList.remove('light-mode');
    themeBtn.innerHTML = '<i class="fas fa-sun"></i>';
  }
  localStorage.setItem('portfolio-theme', mode);
}

if (themeBtn) {
  themeBtn.addEventListener('click', () => {
    const isLight = document.body.classList.contains('light-mode');
    applyTheme(isLight ? 'dark' : 'light');
    if (whooshSound) whooshSound.play().catch(() => {});
  });
}

// Load saved theme
const savedTheme = localStorage.getItem('portfolio-theme');
if (savedTheme) applyTheme(savedTheme);

// ===== Particle System =====
const canvas = document.getElementById('particles');
if (canvas) {
  const ctx = canvas.getContext('2d');
  let particles = [];
  const particleCount = 60;
  const maxDist = 120;

  function resizeCanvas() {
    const section = canvas.parentElement;
    canvas.width = section.offsetWidth;
    canvas.height = section.offsetHeight;
  }

  function createParticles() {
    particles = [];
    for (let i = 0; i < particleCount; i++) {
      particles.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        vx: (Math.random() - 0.5) * 0.6,
        vy: (Math.random() - 0.5) * 0.6,
        r: Math.random() * 2 + 1
      });
    }
  }

  function drawParticles() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    const color = document.body.classList.contains('light-mode') ? '30,30,30' : '249,202,36';

    // Draw lines
    for (let i = 0; i < particles.length; i++) {
      for (let j = i + 1; j < particles.length; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const dist = Math.sqrt(dx * dx + dy * dy);
        if (dist < maxDist) {
          ctx.beginPath();
          ctx.strokeStyle = `rgba(${color},${0.15 * (1 - dist / maxDist)})`;
          ctx.lineWidth = 0.5;
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.stroke();
        }
      }
    }

    // Draw & move particles
    particles.forEach(p => {
      p.x += p.vx;
      p.y += p.vy;
      if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
      if (p.y < 0 || p.y > canvas.height) p.vy *= -1;
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(${color},0.5)`;
      ctx.fill();
    });

    requestAnimationFrame(drawParticles);
  }

  resizeCanvas();
  createParticles();
  drawParticles();
  window.addEventListener('resize', () => { resizeCanvas(); createParticles(); });
}
