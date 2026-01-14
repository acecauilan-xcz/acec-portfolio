<?php
// One-page slider portfolio using provided content
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ace Cauilan | Developer Portfolio</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: #0f172a;
      color: #e5e7eb;
      overflow: hidden;
    }
    .slider {
      display: flex;
      width: 800vw;
      transition: transform .6s ease;
    }
    .slide {
      width: 100vw;
      min-height: 100vh;
      padding: 3rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .card {
      max-width: 900px;
      width: 100%;
      background: #020617;
      border-radius: 18px;
      border: none;
      padding: 3rem;
      box-shadow: 0 20px 50px rgba(0,0,0,.45);
    }
    h1,h2,h3 { color: #f8fafc; }
    .muted { color: #94a3b8; }
    .nav-btn {
      position: fixed;
      bottom: 24px;
      right: 24px;
      z-index: 10;
    }
    .nav-btn button { margin-left: .5rem; }
    ul { padding-left: 1.1rem; }
    li { margin-bottom: .4rem; }
  </style>
</head>
<body>

<div id="slider" class="slider">

  <!-- Intro -->
  <section class="slide">
    <div class="card text-center">
      <h1 class="fw-bold">Ace Cauilan</h1>
      <p class="muted">Web Developer | Data Analyst</p>
      <p>Philippines (Serving AU Clients)</p>
      <p class="mt-3">PHP • MySQL • Bootstrap • SQL • BI • Looker Studio</p>
      <p class="mt-4">📧 yourname@email.com</p>
    </div>
  </section>

  <!-- Professional Summary -->
  <section class="slide">
    <div class="card">
      <h2>Professional Summary</h2>
      <p class="mt-3">Results-driven <strong>Web Developer and Business Data Analyst</strong> with experience delivering modern, scalable websites and data-driven solutions for business clients. Strong background in PHP, MySQL, Bootstrap, SQL, BI tools, and stakeholder collaboration. Experienced working with international teams and aligning solutions to business goals, KPIs, and timelines.</p>
    </div>
  </section>

  <!-- Core Skills -->
  <section class="slide">
    <div class="card">
      <h2>Core Skills</h2>
      <h5 class="mt-4">Web Development</h5>
      <ul>
        <li>PHP, MySQL, HTML5, CSS3, JavaScript</li>
        <li>Bootstrap 5 (responsive, mobile-first)</li>
        <li>WordPress & Wix customization</li>
        <li>Forms, authentication, admin dashboards</li>
        <li>Performance optimization & security basics</li>
      </ul>
      <h5 class="mt-3">Data & Analytics</h5>
      <ul>
        <li>SQL (extraction, transformation, reporting)</li>
        <li>Looker Studio / BI dashboards</li>
        <li>KPI tracking & operational reports</li>
      </ul>
    </div>
  </section>

  <!-- Projects -->
  <section class="slide">
    <div class="card">
      <h2>Selected Projects</h2>
      <h5 class="mt-3">Borealis Travel and Tours</h5>
      <p>PHP, MySQL, Bootstrap 5</p>
      <ul>
        <li>Travel booking website with filtering</li>
        <li>Secure login and admin-managed content</li>
        <li>Optimized UI for conversion</li>
      </ul>
    </div>
  </section>

  <section class="slide">
    <div class="card">
      <h5>Filflag Website</h5>
      <p>PHP, HTML, CSS, Bootstrap</p>
      <ul>
        <li>Multi-page corporate & advocacy website</li>
        <li>Embedded Facebook videos</li>
        <li>Public-facing engagement focus</li>
      </ul>
    </div>
  </section>

  <section class="slide">
    <div class="card">
      <h5>Innovit Website</h5>
      <p>PHP, Bootstrap</p>
      <ul>
        <li>Professional services website</li>
        <li>Clean, brand-aligned UI</li>
        <li>Improved navigation and inquiries</li>
      </ul>
    </div>
  </section>

  <!-- Systems & Analytics -->
  <section class="slide">
    <div class="card">
      <h2>Systems & Analytics</h2>
      <ul>
        <li>Cash-to-Order Management System – digitized Excel tracking</li>
        <li>People Allocation & Productivity Dashboard – BI & SQL</li>
      </ul>
    </div>
  </section>

  <!-- Why Work With Me -->
  <section class="slide">
    <div class="card">
      <h2>Why Work With Me</h2>
      <ul>
        <li>Clear communication & documentation</li>
        <li>Aligned with Australian business expectations</li>
        <li>Strong mix of technical & business skills</li>
        <li>Flexible with AU time zones</li>
      </ul>
    </div>
  </section>

</div>

<div class="nav-btn">
  <button class="btn btn-outline-light" onclick="prev()">◀</button>
  <button class="btn btn-outline-light" onclick="next()">▶</button>
</div>

<script>
  let index = 0;
  const slider = document.getElementById('slider');
  const total = slider.children.length;

  function update() {
    slider.style.transform = `translateX(-${index * 100}vw)`;
  }
  function next() {
    if (index < total - 1) index++;
    update();
  }
  function prev() {
    if (index > 0) index--;
    update();
  }
</script>

</body>
</html>
