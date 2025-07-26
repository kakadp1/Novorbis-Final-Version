<!-- header area -->
<div class="rts-header header-style-nine">


    <header class="header-four header--sticky">
        <div class="header-left">
            <a href="index.php">
                <img src="assets/images/logo2.png" alt="Novorbis Itus Pvt Ltd Logo" class="margin-top: 5px;">
            </a>
        </div>
        <div class="nav-area">

            <!-- navigation area start -->
            <div class="header-nav main-nav-one navBarPosition">
                <nav>
                    <?php
                    $currentPage = basename($_SERVER['PHP_SELF']);
                    ?>

                    <ul>
                        <li class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">
                            <a class="nav-link individualPadding" href="index.php">Home</a>
                        </li>
                        <li class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">
                            <a class="nav-link individualPadding" href="about.php">About Us</a>
                        </li>
                        <li
                            class="has-dropdown <?= ($currentPage == 'carbon-free-recds.php' || $currentPage == 'carbon-free-caps.php') ? 'active' : '' ?>">
                            <a class="nav-link individualPadding" href="#">Products</a>
                            <ul class="submenu">
                                <li class="<?= ($currentPage == 'carbon-free-recds.php') ? 'active' : '' ?>">
                                    <a href="carbon-free-recds.php">RECDs</a>
                                </li>
                                <li class="<?= ($currentPage == 'carbon-free-caps.php') ? 'active' : '' ?>">
                                    <a href="carbon-free-caps.php">CAPS</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= ($currentPage == 'regulations.php') ? 'active' : '' ?>">
                            <a class="nav-link individualPadding" href="regulations.php">Regulations</a>
                        </li>
                        <li class="<?= ($currentPage == 'media.php') ? 'active' : '' ?>">
                            <a class="nav-link individualPadding" href="media.php">Media</a>
                        </li>
                        <li class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">
                            <a class="nav-link individualPadding" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- navigation area end -->
        </div>
        <div class="header-right">
            <div class="action-button-menu">
                <!-- <a href="#" class="contact">Let’s Talk</a> -->
                <div id="menu-btn">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="4" height="4" fill="white" />
                        <rect y="7" width="4" height="4" fill="white" />
                        <rect y="14" width="4" height="4" fill="white" />
                        <rect x="7" width="4" height="4" fill="white" />
                        <rect x="7" y="7" width="4" height="4" fill="white" />
                        <rect x="7" y="14" width="4" height="4" fill="white" />
                        <rect x="14" width="4" height="4" fill="white" />
                        <rect x="14" y="7" width="4" height="4" fill="white" />
                        <rect x="14" y="14" width="4" height="4" fill="white" />
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <style>
        .header-nav .active>a.nav-link,
        .header-nav .submenu .active>a {
            color: #FFFFFF !important;
            font-weight: bold;
            text-decoration: underline !important;
            text-underline-offset: 4px;
        }

        /* Remove underline decoration if any */
        .header-nav a.nav-link,
        .header-nav .submenu a {
            /* text-decoration: none !important; */
        }

        header.header-four .nav-area .main-nav-one ul li.has-dropdown a.nav-link {
            color: #fff;
        }

        header.header-four .nav-area .main-nav-one ul li a.nav-link {
            color: #fff;
        }

        .header-four.header--sticky.sticky {
            background-color: rgb(0 0 0 / 99%);
            opacity: 0.7;
            /* background: var(--color-primary); */
        }
    </style>

    <!-- Floating WhatsApp & Call Buttons -->
    <div class="floating-contact">
        <!-- WhatsApp -->
        <a href="https://wa.me/+918484062464" target="_blank" aria-label="WhatsApp" class="whatsapp-btn">
            <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp Icon" />
        </a>

        <!-- Call -->
        <a href="tel:+918484062464" aria-label="Call Now" class="call-btn">
            <img src="https://img.icons8.com/color/48/000000/phone.png" alt="Call Icon" />
        </a>

    </div>

    <style>
        .floating-contact {
            position: fixed;
            right: 15px;
            top: 40%;
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 10000;
        }

        .floating-contact a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .floating-contact a:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .floating-contact img {
            width: 28px;
            height: 28px;
        }

        .img-tow {
            max-width: 150px;
        }
    </style>
</div>