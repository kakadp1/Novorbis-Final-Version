<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECD - Retrofit Emission Control Device</title>
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
            max-width: 50%;
            border-radius: 8px;
        }

        p {
            margin-bottom: 12px;
        }

        /* ===== HERO ===== */
        .hero {
            background: url('https://images.unsplash.com/photo-1542601906990-b4d3fb778b09') center/cover no-repeat;
            color: white !important;
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
            color: white !important
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

        /* ===== BENEFITS ===== */
        .benefits {
            display: grid;
            grid-template-columns:1fr 1fr;
            gap: 18px;
            height:300px
        }

        .benefit-card {
            background: white;
            height:200px
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

        /* ===== SPECS ===== */
        .specs table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        .specs th,
        .specs td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .specs tr:hover {
            background: #f0f0f0;
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
        <div class="hero-content" style="color: white !important" data-aos="fade-up">
            <h1 style="color:white">Retrofit Emission Control Device (RECD)</h1>
            <p style="color:white">ARAI-certified filterless technology that delivers unmatched emission reduction
                without clogging or
                costly maintenance.</p>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="flex-section" data-aos="fade-right">
        <img src="https://images.unsplash.com/photo-1535378917042-10a22c95931a" alt="RECD Device">
        <div class="text">
            <h2>About RECD</h2>
            <p>The Retrofit Emission Control Device (RECD) is an advanced <strong>filterless</strong> catalytic system
                developed to tackle urban air pollution from diesel-powered vehicles and generators. Unlike traditional
                DPFs, our design ensures there is no risk of filter clogging, eliminating costly downtime and
                replacements.</p>
            <p>Tested and approved by the <strong>Automotive Research Association of India (ARAI)</strong>, it
                guarantees compliance with Bharat Stage VI norms while delivering superior performance across varying
                load conditions. The RECD is engineered to fit seamlessly into existing exhaust systems with minimal
                modification.</p>
        </div>
    </section>

    <!-- BENEFITS -->
    <section data-aos="fade-up">
        <h2>Key Benefits</h2>
        <div class="benefits">
            <div class="benefit-card" data-aos="zoom-in">
                <!-- <img src="https://images.unsplash.com/photo-1581092334501-e605cbaea57a" alt="Filterless Technology"> -->
                <h3>Filterless Operation</h3>
                <p>Eliminates the need for filter cleaning or replacement, reducing lifecycle costs.</p>
            </div>
            <div class="benefit-card" data-aos="zoom-in" data-aos-delay="100">
                <!-- <img src="https://images.unsplash.com/photo-1535378917042-10a22c95931a" alt="Emission Reduction"> -->
                <h3>90% PM Reduction</h3>
                <p>Proven to reduce particulate matter emissions significantly, improving local air quality.</p>
            </div>
            <div class="benefit-card" data-aos="zoom-in" data-aos-delay="200">
                <!-- <img src="https://images.unsplash.com/photo-1581093588401-22b9b6b934c8" alt="Certification"> -->
                <h3>ARAI Certified</h3>
                <p>Compliance with Indian regulatory norms, tested for performance and safety.</p>
            </div>
            <div class="benefit-card" data-aos="zoom-in" data-aos-delay="300">
                <!-- <img src="https://images.unsplash.com/photo-1603297623367-26ffb537ef9a" alt="Fuel Efficiency"> -->
                <h3>Fuel-Efficient Design</h3>
                <p>Maintains engine performance with minimal back pressure impact.</p>
            </div>
        </div>
    </section>

    <!-- HOW IT WORKS -->
    <section data-aos="fade-left">
        <h2>How It Works</h2>
        <div class="steps">
            <div class="step" data-aos="flip-left">
                <h3>Step 1: Exhaust Entry</h3>
                <p>Diesel exhaust enters the RECD chamber, directed through a series of flow channels.</p>
            </div>
            <div class="step" data-aos="flip-left" data-aos-delay="100">
                <h3>Step 2: Catalytic Conversion</h3>
                <p>Pollutants are broken down via oxidation and reduction on catalytic surfaces.</p>
            </div>
            <div class="step" data-aos="flip-left" data-aos-delay="200">
                <h3>Step 3: Clean Emission</h3>
                <p>The treated exhaust exits with reduced PM, HC, and CO emissions.</p>
            </div>
        </div>
    </section>

    <!-- TECH SPECS -->
    <section class="specs" data-aos="fade-up">
        <h2>Technical Specifications</h2>
        <table>
            <tr>
                <th>Parameter</th>
                <th>Specification</th>
            </tr>
            <tr>
                <td>Technology</td>
                <td>Filterless Catalytic System</td>
            </tr>
            <tr>
                <td>Certification</td>
                <td>ARAI Approved</td>
            </tr>
            <tr>
                <td>PM Reduction</td>
                <td>≥ 90%</td>
            </tr>
            <tr>
                <td>Operating Temp</td>
                <td>200°C – 600°C</td>
            </tr>
            <tr>
                <td>Material</td>
                <td>High-grade stainless steel</td>
            </tr>
            <tr>
                <td>Maintenance</td>
                <td>Minimal — no filter replacement</td>
            </tr>
        </table>
    </section>

    <!-- CTA -->

    <?php include "footer.php" ?>
    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>

</html>