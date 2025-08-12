<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECD - Retrofit Emission Control Device</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="icon" type="image/png" href="assets/images/fav.png">
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
            <h1 style="color:white">RECD-Retrofit Emission Control Device</h1>
            <p style="color:white">Advanced Emission Control for a Healthier Tomorrow
            </p>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="flex-section" data-aos="fade-right">
        <img src="" alt="RECD Device">
        <div class="text">
            <h2>About RECD</h2>
            <p>RECD (Retrofit Emission Control Device) is an advanced system that reduces harmful emissions from diesel
                generators by capturing particulate matter (PM2.5, PM10), aerosols, and toxic pollutants before they are
                released into the air.
            </p>
            <p>
                Our CarbonFree RECD reduces emissions by capturing PM, aerosols, and pollutants using electrostatic
                precipitation and water-based scrubbing. It retrofits existing diesel engines to curb air pollution
                effectively
            </p>
            <p>Our CarbonFree RECD, India’s first truly filter-less solution, combines electrostatic precipitation and
                water-based scrubbing to capture PM, aerosols, and pollutants with high efficiency, zero maintenance,
                and easy installation on existing diesel engines effectively curbing air pollution at the source
            </p>
        </div>
    </section>

    <!-- KEY BENEFITS & FEATURES -->
    <section data-aos="fade-up" style="margin-top: 50px;">
        <h3>Key Benefits & Features</h3>
        <div class="benefits">

            <div class="benefit-card">
                <!-- <h5>ARAI Approved</h5> -->
                <p>ARAI Approved for CPCB I & CPCB II gensets.
                </p>
            </div>

            <div class="benefit-card">
                <p>Highest PM capture efficiency in the country 92%</p>
                <!-- <p> 92%</p> -->
            </div>
            <div class="benefit-card">
                <!-- <h5>Lowest back pressure </h5> -->
                <p> Lowest back pressure of any RECD, without site modifications
                </p>
            </div>

            <div class="benefit-card">
                <!-- <h5></h5> -->
                <p>No filter required-zero replacement cost
                </p>
            </div>
            <div class="benefit-card">
                <!-- <h5> </h5> -->
                <p>Self-Cleaning-automated water flushing, no manual work
                </p>
            </div>
            <div class="benefit-card">
                <!-- <h5>Seamless retrofitting </h5> -->
                <p>Seamless retrofitting-ready-to-use device, easy to install</p>
            </div>
            <div class="benefit-card">
                <!-- <h5>Zero back pressure </h5> -->
                <p>Zero back pressure-no impact on engine performance</p>
            </div>
            <div class="benefit-card">
                <!-- <h5>Zero back pressure </h5> -->
                <p>Captures fine dust, heavy metals, acid mist
                </p>
            </div>

        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section data-aos="fade-left">
        <h3>How It Works</h3>
        <div class="steps">
            <div class="step">
                <h4>Gas Inlet </h4>
                <p>Collects exhausExhaust gas enters directly from the generator.
                </p>
            </div>
            <div class="step">
                <h4>Particle Charging </h4>
                <p>A corona discharge charges fine particles.
                </p>
            </div>
            <div class="step">
                <h4>Electrostatic Collection </h4>
                <p>Charged particles stick to collection plates.
                </p>
            </div>
            <div class="step">
                <h4>Automatic Cleaning </h4>
                <p>Water flush removes trapped pollutants.
                </p>
            </div>
            <div class="step">
                <h4>Clean Gas Exit </h4>
                <p>Purified air is released into the atmosphere.
                </p>
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