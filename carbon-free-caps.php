<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RECD - Retrofit Emission Control Device</title>
  <!-- bootstrap css -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="icon" type="image/png" href="assets/images/fav.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Custom css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    /* ===== GLOBAL ===== */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background: #f5f5f5;
      color: #333;
      line-height: 1.6;
    }

    h1,
    h2,
    h3 {
      margin: 0 0 10px;
    }

    section {
      padding: 50px 8%;
    }

    img {
      max-width: 100%;
      border-radius: 8px;
    }

    p {
      margin-bottom: 12px;
    }

    /* ===== HERO ===== */
    .hero {
      background: url('assets/images/recd/RECD-2.png');
      color: white;
      height: 249px;
      text-align: center;
      padding: 100px 8%;
      position: relative;
    }

    .hero::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
    }

    .hero-content {
      position: relative;
      z-index: 2;
      color: white;
    }

    .hero h1 {
      font-size: 2.8rem;
      margin-top: -19px;
    }

    .hero p {
      font-size: 1.2rem;
      margin-top: 8px;
    }

    /* ===== FLEX SECTIONS ===== */
    .flex-section {
      display: flex;
      gap: 30px;
      align-items: center;
      flex-wrap: wrap;
      flex-direction: row-reverse;
    }

    .flex-section img {
      flex: 0 0 250px;
      height: auto;
    }

    .flex-section .text {
      flex: 1 1 350px;
    }

    .recd-intro {
      padding: 60px 20px;
      background-color: #f9f9f9;
    }

    .recd-container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 40px;
      max-width: 1200px;
      margin: 0 auto;
      flex-direction: row-reverse;
    }

    .recd-image {
      flex: 1 1 45%;
      display: flex;
      justify-content: center;
    }

    .recd-image img {
      width: 100%;
      max-width: 500px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .recd-text {
      flex: 1 1 50%;
    }

    .recd-text h2 {
      font-size: 28px;
      color: #222;
      margin-bottom: 15px;
    }

    .recd-text h3 {
      font-size: 20px;
      color: #007B55;
      margin-bottom: 20px;
    }

    .recd-text p {
      font-size: 16px;
      line-height: 1.6;
      color: #555;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .recd-container {
        flex-direction: column;
        text-align: center;
      }

      .recd-text h2 {
        font-size: 24px;
      }

      .recd-text h3 {
        font-size: 18px;
      }
    }

    @media (min-width:1100px) {
      .hiw-steps-list {}
    }

    /* ===== HOW IT WORKS ===== */
    .steps {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    .step {
      flex: 1 1 230px;
      background: white;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
      transition: background 0.3s;
    }

    .step:hover {
      background: #f0f8ff;
    }

    /* ===== CTA ===== */
    .cta {
      text-align: center;
      background: linear-gradient(90deg, #004e92, #000428);
      color: white;
      padding: 40px 8%;
    }

    .cta button {
      background: #ff9800;
      border: none;
      padding: 14px 26px;
      font-size: 1rem;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .cta button:hover {
      background: #e68900;
    }

    :root {
      --kb-bg: #f8faf9;
      --kb-card-bg: #ffffff;
      --kb-border: #e6ece8;
      --kb-text: #263529;
      --kb-muted: #5b6e62;
      --kb-accent: #2e8b57;
      /* subtle, not a dark theme */
      --kb-shadow: 0 8px 26px rgba(16, 24, 20, .06);
    }

    .key-benefits {
      background: var(--kb-bg);
    }

    .kb-container {
      max-width: 1120px;
      margin: 0 auto;
      padding: 56px 20px;
    }

    .kb-header {
      text-align: center;
      margin-bottom: 28px;
    }

    .kb-header h2 {
      margin: 0 0 6px 0;
      font-size: 28px;
      color: var(--kb-text);
      letter-spacing: .2px;
      margin-top: -53px;
    }

    .kb-header p {
      margin: 0;
      color: var(--kb-muted);
      font-size: 16px;
    }

    .kb-grid {
      display: grid;
      grid-template-columns: repeat(3, minmax(0, 1fr));
      gap: 22px;
      padding: 0;
      list-style: none;
    }

    /* Card */
    .kb-card {
      background: var(--kb-card-bg);
      border: 1px solid var(--kb-border);
      border-radius: 14px;
      padding: 20px 18px;
      box-shadow: var(--kb-shadow);
      transition: transform .22s ease, box-shadow .22s ease, border-color .22s ease;
      display: grid;
      grid-template-rows: auto auto 1fr;
      min-height: 170px;
    }

    .kb-card:hover {
      transform: translateY(-4px);
      border-color: rgba(46, 139, 87, .35);
      box-shadow: 0 12px 34px rgba(16, 24, 20, .09);
    }

    .kb-icon {
      display: inline-grid;
      place-items: center;
      width: 52px;
      height: 52px;
      border-radius: 50%;
      color: var(--kb-accent);
      background: rgba(46, 139, 87, .10);
      margin-bottom: 12px;
    }

    .kb-card h3 {
      margin: 0 0 6px 0;
      font-size: 18px;
      color: var(--kb-text);
    }

    .kb-card p {
      margin: 0;
      font-size: 14px;
      line-height: 1.55;
      color: var(--kb-muted);
    }

    /* Responsive */
    @media (max-width: 992px) {
      .kb-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }

    @media (max-width: 640px) {
      .kb-grid {
        grid-template-columns: 1fr;
      }
    }

    /* Motion-safe hover */
    @media (prefers-reduced-motion: reduce) {
      .kb-card {
        transition: none;
      }

      .kb-card:hover {
        transform: none;
      }
    }

    /*why Choose us*/
    :root {
      --wc-bg: #ffffff;
      --wc-text: #263529;
      --wc-muted: #5b6e62;
      --wc-accent: #2e8b57;
    }

    .why-choose {
      background-color: var(--wc-bg);
      padding: 60px 20px;
      margin-top: -81px;
    }

    .wc-container {
      max-width: 1100px;
      margin: 0 auto;
    }

    .why-choose h2 {
      font-size: 28px;
      text-align: center;
      color: var(--wc-text);
      margin-bottom: 40px;
    }

    .wc-columns {
      display: flex;
      gap: 40px;
      justify-content: space-between;
      margin-bottom: 32px;
    }

    .wc-column {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 24px;
    }

    .wc-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      margin-left: 100px;
    }

    .wc-icon {
      min-width: 40px;
      color: var(--wc-accent);
    }

    .wc-text h3 {
      margin: 0 0 6px;
      font-size: 18px;
      color: var(--wc-text);
    }

    .wc-text p {
      margin: 0;
      font-size: 15px;
      color: var(--wc-muted);
      line-height: 1.56;
    }

    @media (max-width: 768px) {
      .wc-columns {
        flex-direction: column;
      }

      .why-choose h2 {
        font-size: 24px;
      }
    }

    /* How it works */
    @keyframes flowAnimation {
      0% {
        background-position: 0 0;
      }

      100% {
        background-position: 100% 0;
      }
    }

    /* Responsive for smaller screens */
    @media (max-width:1100px) {
      .hiw-steps-list {
        flex-direction: column;
        align-items: center;
      }

      .hiw-timeline-horizontal>div.animated-line-wrap {
        position: relative !important;
        top: unset !important;
        left: unset !important;
        right: unset !important;
        height: 10px;
        width: 100%;
        transform: none !important;
        margin-bottom: 20px;
        overflow: hidden;
        border-radius: 8px;
      }
    }
  </style>
</head>

<body>
  <?php include "navbar_index.html" ?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-content" data-aos="fade-up">
      <h1 style="color:white">CarbonFree Crematorium Air Purification System (CAPS)</h1>
      <p style="color:white">Clean Air for a Cleaner Tomorrow
      </p>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="recd-intro">
    <div class="recd-container">
      <!-- Left: Image -->
      <div class="recd-image">
        <img src="assets/images/recd/CAPS-1.jpg" alt="CarbonFree RECD Device">
      </div>

      <!-- Right: Text -->
      <div class="recd-text">
        <h2>CarbonFree™ CAPS</h2>
        <h3>Purifying the Air. Honoring the Process.</h3>
        <p>
          Our <b>Crematorium Air Purification System (CAPS)</b> is specifically designed to address the growing
          pollution
          challenges faced by urban crematoriums. With <b>CAPS</b>, crematoriums can now operate with cleaner emissions,
          significantly reducing the release of harmful gases like CO₂, SOx, NOx, and particulate matter,
          creating a safer and more environmentally-friendly environment.
        </p>
      </div>
    </div>
  </section>

  <section class="key-benefits" aria-label="Key benefits">
    <div class="kb-container">
      <header class="kb-header">
        <h2>Key Benefits</h2>
        <p>What you gain with CarbonFree™ CAPS?</p>
      </header>

      <ul class="kb-grid" role="list">
        <!-- 1: Comprehensive Filtration -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- Filtration icon -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 4h18M3 9h18M7 14h10M10 19h4"></path>
              <line x1="3" y1="4" x2="7" y2="14"></line>
              <line x1="21" y1="4" x2="17" y2="14"></line>
              <line x1="7" y1="14" x2="10" y2="19"></line>
              <line x1="14" y1="19" x2="17" y2="14"></line>
            </svg>
          </span>
          <h3>Comprehensive Filtration</h3>
          <p>Multi-stage filtration system that targets SOx, NOx, CO, CO₂, and particulate matter.</p>
        </li>

        <!-- 2: Efficient Energy Use -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- Lightning bolt icon -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <polygon points="13 2 3 14 11 14 9 22 21 8 13 8 13 2"></polygon>
            </svg>
          </span>
          <h3>Efficient Energy Use</h3>
          <p>Designed to operate efficiently with low energy consumption, making it cost-effective for large-scale
            installations.</p>
        </li>

        <!-- 3: Certified Performance -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- Certificate icon -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"></circle>
              <path d="M9 12l2 2 4-4"></path>
            </svg>
          </span>
          <h3>Certified Performance</h3>
          <p>Independently tested and ARAI‑approved for reliability you can audit.</p>
        </li>

        <!-- 4: Compliance with National Standards -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- Shield check icon -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2l7 4v6c0 5-3.5 8-7 9-3.5-1-7-4-7-9V6l7-4z"></path>
              <path d="M9.5 12.5l2 2 3-3"></path>
            </svg>
          </span>
          <h3>Compliance with National Standards</h3>
          <p>Meets the stringent requirements set by India’s National Clean Air Programme (NCAP) for crematorium
            operations.</p>
        </li>

        <!-- 5: Minimal Maintenance -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- Wrench icon -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M14.7 8.3a4 4 0 0 1 0 5.7l-5.6 5.6-3-3 5.6-5.6a4 4 0 0 1 5.7 0z"></path>
              <path d="M20.7 2.7a8.6 8.6 0 0 1-1.9 12.4"></path>
            </svg>
          </span>
          <h3>Minimal Maintenance</h3>
          <p>Low upkeep and high reliability, ensuring your crematorium continues to operate with minimal downtime.</p>
        </li>

        <!-- 6: Eco-Conscious Design -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- Leaf icon -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-7.5 8-13a8 8 0 0 0-16 0c0 5.5 8 13 8 13z"></path>
              <path d="M2 10s3-3 8-3 8 3 8 3"></path>
            </svg>
          </span>
          <h3>Eco-Conscious Design</h3>
          <p>Contributes to cleaner air by reducing harmful emissions, promoting a sustainable and green community.</p>
        </li>
      </ul>
    </div>
  </section>


  <!-- Why Choose Us -->
  <section class="why-choose">
    <div class="wc-container">
      <h2>Why Choose CarbonFree™ CAPS?</h2>
      <div class="wc-columns">
        <div class="wc-column">
          <div class="wc-item">
            <span class="wc-icon" aria-hidden="true">
              <!-- Advanced Air Filtration Technology icon: filter funnel -->
              <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 4h18M3 9h18M7 14h10M10 19h4"></path>
                <line x1="3" y1="4" x2="7" y2="14"></line>
                <line x1="21" y1="4" x2="17" y2="14"></line>
                <line x1="7" y1="14" x2="10" y2="19"></line>
                <line x1="14" y1="19" x2="17" y2="14"></line>
              </svg>
            </span>
            <div class="wc-text">
              <h3>Advanced Air Filtration Technology</h3>
              <p>CAPS integrates state-of-the-art air filtration to ensure cleaner air around crematoriums.</p>
            </div>
          </div>
          <div class="wc-item">
            <span class="wc-icon" aria-hidden="true">
              <!-- Regulatory Compliance icon: shield with check -->
              <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2l7 4v6c0 5-3.5 8-7 9-3.5-1-7-4-7-9V6l7-4z"></path>
                <path d="M9.5 12.5l2 2 3-3"></path>
              </svg>
            </span>
            <div class="wc-text">
              <h3>Regulatory Compliance</h3>
              <p>Helps meet emission standards and environmental regulations effectively.</p>
            </div>
          </div>
        </div>
        <div class="wc-column">
          <div class="wc-item">
            <span class="wc-icon" aria-hidden="true">
              <!-- Cleaner & Safer Atmosphere icon: leaf -->
              <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-7.5 8-13a8 8 0 0 0-16 0c0 5.5 8 13 8 13z"></path>
                <path d="M2 10s3-3 8-3 8 3 8 3"></path>
              </svg>
            </span>
            <div class="wc-text">
              <h3>Cleaner & Safer Atmosphere</h3>
              <p>Ensures a healthier environment for both people and nature around the crematorium.</p>
            </div>
          </div>
          <div class="wc-item">
            <span class="wc-icon" aria-hidden="true">
              <!-- Seamless Integration icon: plug -->
              <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 6V2m-4 4V2m-4 10h16M4 14v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6"></path>
              </svg>
            </span>
            <div class="wc-text">
              <h3>Seamless Integration</h3>
              <p>Whether upgrading existing crematoriums or new builds, CAPS installs with minimal disruption.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="how-it-works" style="background:#f8faf9;padding:56px 0;">
    <div class="hiw-container" style="max-width:1120px;margin:0 auto;">
      <header style="text-align:center;margin-bottom:36px;">
        <h2 style="color:#263529;font-size:28px;margin-bottom:6px;">How CarbonFree™ CAPS Works</h2>
        <p style="color:#5b6e62;font-size:16px;margin:0 0 2px;">Advanced, multi‑stage air purification — protecting
          communities and honoring traditions.</p>
      </header>
      <div class="hiw-timeline-horizontal"
        style="display:flex;align-items:flex-start;justify-content:center;position:relative;gap:0;flex-wrap:wrap;">
        <!-- Animated Air Flow Line with pipe extension -->
        <div class="animated-line-wrap"
          style="position:absolute;top:50%;left:4%;right:14%;height:10px;border-radius:8px;overflow:hidden;z-index:1;transform:translateY(-50%);">
          <div class="animated-line" style="
          height: 100%;
          width: 220%;
          max-width: calc(100% + 120px);
          background: linear-gradient(90deg, 
            #2e8b57 15%, 
            #bef2d4 30%,
            #2e8b57 45%, 
            #bef2d4 60%,
            #2e8b57 75%);
          background-size: 50% 100%;
          animation: flowAnimation 3.6s linear infinite;
          border-radius: 8px;
          ">
          </div>
        </div>
        <ol class="hiw-steps-list"
          style="display:flex;justify-content:space-between;align-items:center;list-style:none;padding:0;margin:0;width:100%;z-index:2; margin-right: 19px; gap: 17px;">
          <!-- 1. Gas Capture -->
          <li data-aos="fade-up"
            style="flex:1;min-width:160px;display:flex;flex-direction:column;align-items:center;position:relative;margin:0 12px;">
            <span
              style="margin-bottom:15px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(46,139,87,.09);">
              <!-- Gas Capture Icon: Funnel -->
              <svg width="26" height="26" fill="none" stroke="#2e8b57" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M3 4h18M3 9h18M7 14h10M10 19h4"></path>
                <line x1="3" y1="4" x2="7" y2="14"></line>
                <line x1="21" y1="4" x2="17" y2="14"></line>
                <line x1="7" y1="14" x2="10" y2="19"></line>
                <line x1="14" y1="19" x2="17" y2="14"></line>
              </svg>
            </span>
            <div class="hiw-step-card"
              style="background:#fff;border-radius:8px;padding:17px 15px;box-shadow:0 3px 12px rgba(16,24,20,0.05);max-width:180px;">
              <h3 style="margin:0 0 5px 0;font-size:17px;color:#263529;font-weight:600;text-align:center;">1. Fume
                Collector</h3>
              <p style="color:#5b6e62;font-size:15px;margin:0;text-align:center;">Exhaust gases are collected from the
                cremation chamber.</p>
            </div>
          </li>
          <!-- 3. Dust Vortex System -->
          <li data-aos="fade-up" data-aos-delay="180"
            style="flex:1;min-width:160px;display:flex;flex-direction:column;align-items:center;position:relative;margin:0 12px;">
            <span
              style="margin-bottom:15px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(46,139,87,.09);">
              <!-- Dust Vortex Icon: swirling dust -->
              <svg width="26" height="26" fill="none" stroke="#2e8b57" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M4 12a8 8 0 1 0 14.9-4"></path>
                <path d="M12 2v5l2-2"></path>
                <path d="M12 22v-5l-2 2"></path>
              </svg>
            </span>
            <div class="hiw-step-card"
              style="background:#fff;border-radius:8px;padding:17px 15px;box-shadow:0 3px 12px rgba(16,24,20,0.05);max-width:180px;">
              <h3 style="margin:0 0 5px 0;font-size:17px;color:#263529;font-weight:600;text-align:center;">2. Dust
                Vortex System</h3>
              <p style="color:#5b6e62;font-size:15px;margin:0;text-align:center;">Enhances particle separation
                efficiency.</p>
            </div>
          </li>
          <!-- 4. Electrostatic Precipitation (ESP) -->
          <li data-aos="fade-up" data-aos-delay="270"
            style="flex:1;min-width:160px;display:flex;flex-direction:column;align-items:center;position:relative;margin:0 12px;">
            <span
              style="margin-bottom:15px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(46,139,87,.09);">
              <!-- ESP Icon: electric spark -->
              <svg width="26" height="26" fill="none" stroke="#2e8b57" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" viewBox="0 0 24 24">
                <polygon points="13 2 3 14 12 14 11 22 21 8 13 8 13 2" />
              </svg>
            </span>
            <div class="hiw-step-card"
              style="background:#fff;border-radius:8px;padding:17px 15px;box-shadow:0 3px 12px rgba(16,24,20,0.05);max-width:180px;">
              <h3 style="margin:0 0 5px 0;font-size:17px;color:#263529;font-weight:600;text-align:center;">3.
                Electrostatic Precipitation (ESP)</h3>
              <p style="color:#5b6e62;font-size:15px;margin:0;text-align:center;">Uses high-voltage charges to trap fine
                particles on collection plates.</p>
            </div>
          </li>
          <!-- 5. VapoX Gas Treatment -->
          <li data-aos="fade-up" data-aos-delay="360"
            style="flex:1;min-width:160px;display:flex;flex-direction:column;align-items:center;position:relative;margin:0 12px;">
            <span
              style="margin-bottom:15px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(46,139,87,.09);">
              <!-- Gas Treatment Icon: chemical flask -->
              <svg width="26" height="26" fill="none" stroke="#2e8b57" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M7 21h10M7 21L9 9h6l2 12M9 9l2-6h2l2 6" />
              </svg>
            </span>
            <div class="hiw-step-card"
              style="background:#fff;border-radius:8px;padding:17px 15px;box-shadow:0 3px 12px rgba(16,24,20,0.05);max-width:180px;">
              <h3 style="margin:0 0 5px 0;font-size:17px;color:#263529;font-weight:600;text-align:center;">4. VapoX
                Treatment</h3>
              <p style="color:#5b6e62;font-size:15px;margin:0;text-align:center;">Removes oils, chemicals, and toxic
                fumes.</p>
            </div>
          </li>
          <!-- 7. Clean Air Release -->
          <li data-aos="fade-up" data-aos-delay="540"
            style="flex:1;min-width:160px;display:flex;flex-direction:column;align-items:center;position:relative;margin:0 12px;">
            <span
              style="margin-bottom:15px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(46,139,87,.09);">
              <!-- Clean Air Icon: leaf & wind -->
              <svg width="26" height="26" fill="none" stroke="#2e8b57" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M12 22s8-7.5 8-13a8 8 0 0 0-16 0c0 5.5 8 13 8 13z"></path>
                <path d="M2 10s3-3 8-3 8 3 8 3"></path>
              </svg>
            </span>
            <div class="hiw-step-card"
              style="background:#fff;border-radius:8px;padding:17px 15px;box-shadow:0 3px 12px rgba(16,24,20,0.05);max-width:180px;">
              <h3 style="margin:0 0 5px 0;font-size:17px;color:#263529;font-weight:600;text-align:center;">5. Clean Air
                Release</h3>
              <p style="color:#5b6e62;font-size:15px;margin:0;text-align:center;">Purified air is released into the
                atmosphere.</p>
            </div>
          </li>
        </ol>
      </div>
    </div>
  </section>


  <section class="closing-message"
    style="background:#36af45; color:#f0f4f1; padding:17px 20px; text-align:center; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <h2 style="font-size:28px; font-weight:700; letter-spacing:0.05em;">
      Works with all Electric, Gas, and Traditional Crematoriums
    </h2>
    <!-- <p style="font-size:18px; max-width:900px; margin:0 auto; line-height:1.6;">
    Whether it’s powering a hospital, a data center, or an entire factory, 
    <strong>CarbonFree RECD</strong> integrates seamlessly with <strong>any diesel generator</strong>. 
    <strong>No complicated retrofitting. Just pure, plug-and-play clean air.</strong>
  </p> -->
  </section>


  <?php include "footer.php" ?>

  <!-- AOS Script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });
  </script>



</body>

</html>