<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crematorium Air Purification System (CAPS)</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
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
            background: url('https://images.unsplash.com/photo-1542601906990-b4d3fb778b09') center/cover no-repeat;
            color: white;
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
        }

        .flex-section img {
            flex: 1 1 350px;
        }

        .flex-section .text {
            flex: 1 1 350px;
        }

        /* ===== BENEFITS / FEATURES ===== */
        .benefits {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 18px;
        }

        .benefit-card {
            background: white;
            padding: 18px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .benefit-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
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
    </style>
</head>

<body>
    <?php include "navbar.php" ?>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-content" data-aos="fade-up">
            <h1 style="color:white">CAPS-Crematorium Air Purification System</h1>
            <p style="color:white">Clean Cremations. Cleaner Air. Healthier Cities. / Breathe Easier with CAPS</p>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="flex-section" data-aos="fade-right">
        <img src="" alt="CAPS Device">
        <div class="text">
            <h2>About CAPS</h2>
            <p>CarbonFree CAPS is an advanced Crematorium Air Purification System that captures and removes harmful
                emissions from cremation processes. It ensures compliance with CPCB & EPA standards while protecting
                public health and the environment.
            </p>
            <p>The CarbonFree Crematorium Air Purification System is an advanced emission control solution that
                effectively reduces pollutants from cremation, ensuring CPCB and EPA compliance while enhancing air
                quality and public health.
            </p>
        </div>
    </section>

    <!-- KEY BENEFITS & FEATURES -->
    <section data-aos="fade-up" style="margin-top: 50px;">
        <h2>Key Benefits & Features</h2>
        <div class="benefits">
            <!-- <div class="benefit-card">
                <h5>Filterless Operation</h5>
                <p>No need for filter cleaning or replacement, lowering lifecycle costs.</p>
            </div> -->
            <div class="benefit-card">
                <h5>90%+ PM Reduction</h5>
                <p>Reduces particulate matter emissions significantly for better air quality.</p>
            </div>
            <!-- <div class="benefit-card">
                <h5>ARAI Certified</h5>
                <p>Meets Indian regulatory norms, tested for safety and performance.</p>
            </div> -->
            <div class="benefit-card">
                <h5>Fuel-Efficient Design</h5>
                <p>Maintains engine performance with minimal back pressure.</p>
            </div>
            <!-- <div class="benefit-card">
                <h4>95% PM2.5 & PM10 Capture</h4>
                <p>Captures up to 95% of harmful particulate matter, ensuring cleaner emissions.</p>
            </div> -->
            <div class="benefit-card">
                <h5>Removes Hazardous Gases</h5>
                <p>Eliminates toxic fumes and hazardous gases effectively.</p>
            </div>
            <div class="benefit-card">
                <h5>Self-Cleaning System</h5>
                <p>No manual maintenance required, reducing downtime.</p>
            </div>
            <div class="benefit-card">
                <h5>Energy Efficient</h5>
                <p>Low operational cost with optimized energy use.</p>
            </div>
            <div class="benefit-card">
                <h5>20-Year Lifespan</h5>
                <p>Durable design for long-term, reliable operation.</p>
            </div>
            <div class="benefit-card">
                <h5>Compliance Ready</h5>
                <p>CPCB & EPA certified for legal and safe operation.</p>
            </div>
            <div class="benefit-card">
                <h5>Live Pollution Monitoring</h5>
                <p>Optional real-time monitoring and analysis system.</p>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section data-aos="fade-left">
        <h2>How It Works</h2>
        <div class="steps">
            <div class="step">
                <h4>Gas Capture</h4>
                <p>Collects exhaust gases from cremation chamber.</p>
            </div>
            <div class="step">
                <h4>Cyclone Separator</h4>
                <p>Removes large particles before fine filtration.</p>
            </div>
            <div class="step">
                <h4>Dust Vortex System</h4>
                <p>Enhances separation efficiency.</p>
            </div>
            <div class="step">
                <h4>VapoX Gas Treatment</h4>
                <p>Removes oils, chemicals, and toxic fumes.</p>
            </div>
            <div class="step">
                <h4>Byproduct Conversion</h4>
                <p>Converts gases into usable materials like gypsum.</p>
            </div>
            <div class="step">
                <h4>Clean Air Release</h4>
                <p>Releases purified air into the atmosphere.</p>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>

</body>

</html>