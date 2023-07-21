// Toggle mobile menu
const mobileMenuButton = document.querySelector('.mobile-menu-button');
const mobileMenu = document.querySelector('.hidden.md\\:hidden');

mobileMenuButton.addEventListener('click', function () {
    mobileMenu.classList.toggle('hidden');
});


document.addEventListener('DOMContentLoaded', function() {
    var userDropdown = document.getElementById('userDropdown');
    var userDropdownMenu = document.getElementById('userDropdownMenu');

    userDropdown.addEventListener('click', function() {
        userDropdownMenu.classList.toggle('hidden');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var userDropdown = document.getElementById('userDropdown2');
    var userDropdownMenu = document.getElementById('userDropdownMenu2');

    userDropdown.addEventListener('click', function() {
        userDropdownMenu.classList.toggle('hidden');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var closeButton = document.querySelector('.close-button');
    var alertBox = document.querySelector('.alert-box');

    closeButton.addEventListener('click', function() {
        alertBox.remove();
    });
});
