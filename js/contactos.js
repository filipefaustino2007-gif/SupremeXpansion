document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".contactos-form");
    const msg = document.getElementById("success-message");

    form.addEventListener("submit", function (e) {
        e.preventDefault();  // impede refresh

        msg.classList.add("show");

        setTimeout(() => msg.classList.remove("show"), 5000);
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const motivoSelect = document.getElementById("motivo");
    const assuntoWrapper = document.getElementById("assunto-wrapper");
    const assuntoInput = document.getElementById("assunto");

    if (!motivoSelect || !assuntoWrapper || !assuntoInput) return;

    motivoSelect.addEventListener("change", () => {
        if (motivoSelect.value === "outro") {
            assuntoWrapper.style.display = "block";
            assuntoInput.required = true;
        } else {
            assuntoWrapper.style.display = "none";
            assuntoInput.required = false;
            assuntoInput.value = "";
        }
    });
});
