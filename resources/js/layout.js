const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

const mobileThemeToggleDarkIcon = document.getElementById('mobile-theme-toggle-dark-icon');
const mobileThemeToggleLightIcon = document.getElementById('mobile-theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
    mobileThemeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
    mobileThemeToggleDarkIcon.classList.remove('hidden');
}

const themeToggleBtn = document.getElementById('theme-toggle');

function toggleMode() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');
    mobileThemeToggleDarkIcon.classList.toggle('hidden');
    mobileThemeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

}

themeToggleBtn.addEventListener('click', toggleMode);

const mobileThemeToggleBtn = document.getElementById('mobile-theme-toggle');

mobileThemeToggleBtn.addEventListener('click', toggleMode);

const mobileMenuBtn = document.getElementById('mobile-menu-button');

const menuToggleOpenIcon = document.getElementById('mobile-menu-toggle-open-icon');
const menuToggleCloseIcon = document.getElementById('mobile-menu-toggle-close-icon');

const mobileMenu = document.getElementById('mobile-menu');

mobileMenuBtn.addEventListener('click', function () {

    if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.remove('hidden');
        menuToggleCloseIcon.classList.remove('hidden');
        menuToggleOpenIcon.classList.add('hidden');
    } else {
        mobileMenu.classList.add('hidden');
        menuToggleCloseIcon.classList.add('hidden');
        menuToggleOpenIcon.classList.remove('hidden');
    }

});