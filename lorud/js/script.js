// logout_popup.js

function showLogoutPopup() {
    alert("Anda telah berhasil logout.");
    // Redirect ke halaman beranda
    window.location.href = "../index.php";
}

// script tamba.php
(function () {
    'use strict';
    window.addEventListener("load", function () {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener("submit", function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

// script tambah_jb.php
(function(){
    'use strict';
    window.addEventListener("load", function() {
        var form = document.getElementsByClassName('needs-validation');
        var validator = Array.prototype.filter.call(forms, function(form){
            form.addEventListener('submit', function(event){
                if(form.checkValidity() === false){
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        })
    }, false);
})();