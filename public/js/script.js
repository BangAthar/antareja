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

// Ambil elemen-elemen yang diperlukan
const btnOpenPopup = document.getElementById('openPopup');
const popup = document.getElementById('popup');
const btnClosePopup = document.getElementById('closePopup');

// Tambahkan event listener untuk membuka popup
btnOpenPopup.addEventListener('click', function() {
  popup.classList.remove('hidden');
});

// Tambahkan event listener untuk menutup popup
btnClosePopup.addEventListener('click', function() {
  popup.classList.add('hidden');
});

// document.addEventListener("DOMContentLoaded", function () {
//     // Semua konten website selesai dimuat
//     // Sembunyikan preloader
//     document.getElementById("preloader").classList.add('hidden');
// });
