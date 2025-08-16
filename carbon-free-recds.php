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
      height: 300px;
      max-width: 533px;
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

    @media (max-width: 768px) {}

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

    .wc-cta {
      text-align: center;
    }

    .wc-cta .button {
      display: inline-block;
      padding: 12px 28px;
      font-size: 16px;
      color: #fff;
      background-color: var(--wc-accent);
      border-radius: 6px;
      text-decoration: none;
      transition: background-color .25s ease;
    }

    .wc-cta .button:hover {
      background-color: #276c48;
    }

    @media (max-width: 768px) {
      .wc-columns {
        flex-direction: column;
      }

      .why-choose h2 {
        font-size: 24px;
      }
    }

    .step {
      opacity: 0;
      transform: translateY(50px);
      transition: all 0.8s ease-out;
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
        align-items: stretch;

      }

      .animated-line {
        display: none
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
      <h1 style="color:white">CarbonFree Retrofit Emission Control Device</h1>
      <p style="color:white">Advanced Emission Control for a Healthier Tomorrow
      </p>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="recd-intro">
    <div class="recd-container">
      <!-- Left: Image -->
      <div class="recd-image">
        <img src="assets/images/recd/recdDevice.jpg" alt="CarbonFree RECD Device">
      </div>

      <!-- Right: Text -->
      <div class="recd-text">
        <h2>CarbonFree™ RECD</h2>
        <h3>Unlock Clean Air. Maximize Efficiency.</h3>
        <p>
          At Novorbis Itus, we are pioneering a new era of emission control with our
          <strong>CarbonFree™ RECD</strong>, India’s only truly filter-less Retrofit Emission Control Device (RECD),
          engineered to drastically reduce harmful pollutants from diesel generators. Designed with ARAI certification,
          <strong>CarbonFree™ RECD</strong> is the perfect solution for industries looking to meet stringent
          environmental regulations while boosting operational efficiency.
        </p>
      </div>
    </div>
  </section>

  <section class="key-benefits" aria-label="Key benefits">
    <div class="kb-container">
      <header class="kb-header">
        <h2>Key Benefits</h2>
        <p>What you gain with CarbonFree™ RECD?</p>
      </header>

      <ul class="kb-grid" role="list">
        <!-- 1 -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- efficiency bolt -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <polygon points="13 2 3 14 11 14 9 22 21 8 13 8 13 2"></polygon>
            </svg>
          </span>
          <h3>Unmatched Efficiency</h3>
          <p>Cut harmful emissions by up to 90% (NOx, CO, particulates) for cleaner, safer operations.</p>
        </li>

        <!-- 2 -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- filterless / ban -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="9"></circle>
              <line x1="5" y1="19" x2="19" y2="5"></line>
            </svg>
          </span>
          <h3>No Filters, No Hassle</h3>
          <p>Filter‑less design eliminates consumables and minimizes unplanned downtime.</p>
        </li>

        <!-- 3 -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- certificate -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4z"></path>
              <path d="M8.5 14.5 7 22l5-3 5 3-1.5-7.5"></path>
            </svg>
          </span>
          <h3>Certified Performance</h3>
          <p>Independently tested and ARAI‑approved for reliability you can audit.</p>
        </li>

        <!-- 4 -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- cost / wallet -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="6" width="20" height="12" rx="2"></rect>
              <path d="M16 10h4v4h-4a2 2 0 0 1 0-4z"></path>
            </svg>
          </span>
          <h3>Cost‑Effective</h3>
          <p>Lower maintenance and extend DG set life—strong ROI from day one.</p>
        </li>

        <!-- 5 -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- leaf -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 21C11 14 18 7 21 7 21 12 15 21 11 21Z"></path>
              <path d="M5 19c6 0 10-6 10-10"></path>
            </svg>
          </span>
          <h3>Eco‑Friendly</h3>
          <p>Helps meet sustainability targets by sharply reducing your carbon footprint.</p>
        </li>

        <!-- 6 -->
        <li class="kb-card">
          <span class="kb-icon" aria-hidden="true">
            <!-- compliance / shield-check -->
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.8"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 3l7 3v6c0 5-3.5 8-7 9-3.5-1-7-4-7-9V6l7-3z"></path>
              <path d="M9.5 12.5l2 2 3-3"></path>
            </svg>
          </span>
          <h3>Future‑Ready Compliance</h3>
          <p>Stay ahead of tightening emission standards with scalable tech.</p>
        </li>
      </ul>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="why-choose">
    <div class="wc-container">
      <h2>Why Choose CarbonFree™ RECD?</h2>
      <div class="wc-columns">
        <div class="wc-column">
          <div class="wc-item">
            <span class="wc-icon" aria-hidden="true">
              <!-- inline SVG; e.g., plug icon -->
              <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 6V2m-4 4V2m-4 10h16M4 14v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6"></path>
              </svg>
            </span>
            <div class="wc-text">
              <h3>Seamless Retrofit</h3>
              <p>Easily integrates into your existing setup—no major infrastructure changes required.</p>
            </div>
          </div>
          <div class="wc-item">
            <span class="wc-icon" aria-hidden="true">
              <!-- gears icon -->
              <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="3"></circle>
                <path
                  d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09a1.65 1.65 0 0 0-1-1.51 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09a1.65 1.65 0 0 0 1.51-1 1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9c0 .67.26 1.31.73 1.77z">
                </path>
              </svg>
            </span>
            <div class="wc-text">
              <h3>Adaptable for Any Scale</h3>
              <p>Perfect for small commercial facilities or large industrial plants alike.</p>
            </div>
          </div>
        </div>
        <div class="wc-column">
          <div class="wc-item">
            <span class="wc-icon" aria-hidden="true">
              <!-- leaf icon -->
              <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-7.5 8-13a8 8 0 0 0-16 0c0 5.5 8 13 8 13z"></path>
                <path d="M2 10s3-3 8-3 8 3 8 3"></path>
              </svg>
            </span>
            <div class="wc-text">
              <h3>Cost-Efficient Solution</h3>
              <p>Turns pollution management into a predictable and manageable process with low ongoing cost.</p>
            </div>
          </div>
          <div class="wc-item">
            <span class="wc-icon" aria-hidden="true">
              <!-- shield icon -->
              <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.8"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2l7 4v6c0 5-3.5 8-7 9-3.5-1-7-4-7-9V6l7-4z"></path>
                <path d="M9.5 11.5l2 2 3-3"></path>
              </svg>
            </span>
            <div class="wc-text">
              <h3>Sustainable Operations</h3>
              <p>Drive a cleaner & greener future across your operations with sustainable emission control.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How it works -->
  <!-- HOW IT WORKS - Horizontal Timeline with Extended Air Flow -->
  <section class="how-it-works" style="background:#f8faf9;padding:56px 0;">
    <div class="hiw-container" style="max-width:1120px;margin:0 auto;">
      <header style="text-align:center;margin-bottom:36px;">
        <h2 style="color:#263529;font-size:28px;margin-bottom:6px;">How CarbonFree™ RECD Works</h2>
        <p style="color:#5b6e62;font-size:16px;margin:0 0 2px;">A seamless, filter-less multi-stage process for
          unmatched clean air.</p>
      </header>
      <div class="hiw-timeline-horizontal"
        style="display:flex;align-items:flex-start;justify-content:center;position:relative;gap:0;flex-wrap:wrap;">

        <!-- Animated Air Flow Line with pipe extension -->
        <div class="animated-line-wrap"
          style="position:absolute;top:50%;left:4%;right:4%;height:10px;border-radius:8px;overflow:hidden;z-index:1;transform:translateY(-50%);">
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

        <!-- Steps -->
        <ol class="hiw-steps-list"
          style="display:flex;justify-content:space-between;align-items:center;list-style:none;padding:0;margin:0;width:100%;z-index:2;">
          <li data-aos="fade-up"
            style="flex:1;min-width:160px;display:flex;flex-direction:column;align-items:center;position:relative;">
            <!-- Gas Inlet Icon -->
            <span
              style="margin-bottom:15px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(46,139,87,.09);">
              <svg width="26" height="26" fill="none" stroke="#2e8b57" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M6 12h14M6 12a4 4 0 1 1 0-8C7.67 4 9 5.33 9 7v6" />
              </svg>
            </span>
            <div class="hiw-step-card"
              style="background:#fff;border-radius:8px;padding:17px 15px;box-shadow:0 3px 12px rgba(16,24,20,0.05);margin-top:0;max-width:180px;">
              <h3 style="margin:0 0 5px 0;font-size:17px;color:#263529;font-weight:600;text-align:center;">1. Gas Inlet
              </h3>
              <p style="color:#5b6e62;font-size:15px;margin:0;text-align:center;">Exhaust gas enters directly from the
                generator.</p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="90"
            style="flex:1;min-width:160px;display:flex;flex-direction:column;align-items:center;position:relative;">
            <!-- Particle Charging Icon -->
            <span
              style="margin-bottom:15px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(46,139,87,.09);">
              <svg width="26" height="26" fill="none" stroke="#2e8b57" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" viewBox="0 0 24 24">
                <polygon points="13 2 3 14 12 14 11 22 21 8 13 8 13 2" />
              </svg>
            </span>
            <div class="hiw-step-card"
              style="background:#fff;border-radius:8px;padding:17px 15px;box-shadow:0 3px 12px rgba(16,24,20,0.05);margin-top:0;max-width:180px;">
              <h3 style="margin:0 0 5px 0;font-size:17px;color:#263529;font-weight:600;text-align:center;">2. Particle
                Charging</h3>
              <p style="color:#5b6e62;font-size:15px;margin:0;text-align:center;">A corona discharge charges fine
                particles for efficient removal.</p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="180"
            style="flex:1;min-width:160px;display:flex;flex-direction:column;align-items:center;position:relative;">
            <!-- Electrostatic Collection Icon -->
            <span
              style="margin-bottom:15px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(46,139,87,.09);">
              <svg width="26" height="26" fill="none" stroke="#2e8b57" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" viewBox="0 0 24 24">
                <rect x="3" y="7" width="18" height="7" rx="2"></rect>
                <path d="M7 20v-6M17 20v-6"></path>
              </svg>
            </span>
            <div class="hiw-step-card"
              style="background:#fff;border-radius:8px;padding:17px 15px;box-shadow:0 3px 12px rgba(16,24,20,0.05);margin-top:0;max-width:180px;">
              <h3 style="margin:0 0 5px 0;font-size:17px;color:#263529;font-weight:600;text-align:center;">3.
                Electrostatic Collection</h3>
              <p style="color:#5b6e62;font-size:15px;margin:0;text-align:center;">Charged particles adhere to collection
                plates, trapping pollution.</p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="270"
            style="flex:1;min-width:160px;display:flex;flex-direction:column;align-items:center;position:relative;">
            <!-- Automatic Cleaning Icon -->
            <span
              style="margin-bottom:15px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(46,139,87,.09);">
              <svg width="26" height="26" fill="none" stroke="#2e8b57" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M12 3C9.07 7.13 5 13.68 5 17a7 7 0 0 0 14 0c0-3.32-4.07-9.87-7-14z"></path>
              </svg>
            </span>
            <div class="hiw-step-card"
              style="background:#fff;border-radius:8px;padding:17px 15px;box-shadow:0 3px 12px rgba(16,24,20,0.05);margin-top:0;max-width:180px;">
              <h3 style="margin:0 0 5px 0;font-size:17px;color:#263529;font-weight:600;text-align:center;">4. Automatic
                Cleaning</h3>
              <p style="color:#5b6e62;font-size:15px;margin:0;text-align:center;">Water flush periodically removes
                trapped pollutants automatically.</p>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="360"
            style="flex:1;min-width:160px;display:flex;flex-direction:column;align-items:center;position:relative;">
            <!-- Clean Gas Exit Icon -->
            <span
              style="margin-bottom:15px;display:flex;align-items:center;justify-content:center;width:40px;height:40px;border-radius:50%;background:rgba(46,139,87,.09);">
              <svg width="26" height="26" fill="none" stroke="#2e8b57" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M18 8a6 6 0 1 0-12 0c0 7 6 13 6 13s6-6 6-13" />
                <path d="M6 8a6 6 0 0 1 12 0" />
              </svg>
            </span>
            <div class="hiw-step-card"
              style="background:#fff;border-radius:8px;padding:17px 15px;box-shadow:0 3px 12px rgba(16,24,20,0.05);margin-top:0;max-width:180px;">
              <h3 style="margin:0 0 5px 0;font-size:17px;color:#263529;font-weight:600;text-align:center;">5. Clean Gas
                Exit</h3>
              <p style="color:#5b6e62;font-size:15px;margin:0;text-align:center;">Purified air is released back into the
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
      Fits Every Diesel Genset – No Exceptions
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