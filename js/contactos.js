document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".contactos-form");
    const msg = document.getElementById("success-message");

    form.addEventListener("submit", function (e) {
        e.preventDefault();  // impede refresh

        msg.classList.add("show");

        // Opcional: desaparecer após 5s
        setTimeout(() => msg.classList.remove("show"), 5000);
    });
});
