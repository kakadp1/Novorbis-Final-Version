// Get DOM elements
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');
const navLinks = document.querySelectorAll('.nav-link');
const products = document.querySelector('.products');
const productsSubMenu = document.querySelector('.submenu');

let submenuOpenedByClick = false;

// Show submenu on hover (desktop)
products.addEventListener('mouseenter', () => {
    if (window.innerWidth > 768 && !submenuOpenedByClick) {
        productsSubMenu.style.display = 'flex';
    }
});
products.addEventListener('mouseleave', () => {
    if (window.innerWidth > 768 && !submenuOpenedByClick) {
        productsSubMenu.style.display = 'none';
    }
});

// Toggle submenu on click (mobile & desktop)
products.addEventListener('click', (e) => {
    // Only prevent default if the clicked target is the main Products link
    if (e.target === products.querySelector('.nav-link')) {
        e.preventDefault();
        submenuOpenedByClick = !submenuOpenedByClick;
        if (submenuOpenedByClick) {
            productsSubMenu.style.display = 'flex';
        } else {
            productsSubMenu.style.display = 'none';
        }
    }
});

// Optional: Close submenu when clicking elsewhere
document.addEventListener('click', (e) => {
    if (!products.contains(e.target) && !productsSubMenu.contains(e.target)) {
        productsSubMenu.style.display = 'none';
        submenuOpenedByClick = false;
    }
});
const submenuLinks = productsSubMenu.querySelectorAll('a');
submenuLinks.forEach(link => {
    link.addEventListener('click', function () {
        submenuLinks.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});

// Toggle mobile menu
function mobileMenu() {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
}

// Close mobile menu when clicking on a link
function closeMenu() {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
}

// Add event listeners
hamburger.addEventListener('click', mobileMenu);

// Close menu when clicking on nav links
navLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        closeMenu();
    }
});

// Handle window resize
window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
        closeMenu();
    }
});

// Add active class to current page link (optional)
function setActiveLink() {
    const currentPage = window.location.hash || '#home';

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        }
    });
}

// Set active link on page load and hash change
window.addEventListener('load', setActiveLink);
window.addEventListener('hashchange', setActiveLink);

