/* Make dynamic date appear */
(function () {
    if (document.getElementById("get-current-year")) {
        document.getElementById("get-current-year").innerHTML =
            new Date().getFullYear();
    }
})();
/* Sidebar - Side navigation menu on mobile/responsive mode */
function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("bg-white");
    document.getElementById(collapseID).classList.toggle("m-2");
    document.getElementById(collapseID).classList.toggle("py-3");
    document.getElementById(collapseID).classList.toggle("px-6");
}
/* Function for dropdowns */
function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "A") {
        element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start"
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
}

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