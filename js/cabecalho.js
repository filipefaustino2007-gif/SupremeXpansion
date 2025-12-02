document.addEventListener("DOMContentLoaded", () => {

    const current = window.location.pathname.split("/").pop(); // ficheiro atual

    const servicos = ["servico.php", "servico1.php", "servico2.php", "servico3.php"];
    const portfolio = ["portfolio.php", "portfolio_res.php", "portfolio_urb.php", "portfolio_com.php", "portfolio_ind.php"];

    // Marca o link em que o utilizador está
    document.querySelectorAll(".navbar a").forEach(link => {
        const href = link.getAttribute("href");

        if (href === current) {
            link.classList.add("active");
        }
    });

    // Marca SERVIÇOS como ativo se estiver numa subpágina
    if (servicos.includes(current)) {
        const servicosLink = document.querySelector(".servicos-dropdown > a");
        if (servicosLink) servicosLink.classList.add("active");
    }

// Marca PORTFOLIO como ativo se estiver numa subpágina
    if (portfolio.includes(current)) {
        const portfolioLink = document.querySelector(".portfolio-dropdown > a");
        if (portfolioLink) portfolioLink.classList.add("active");
    }

    const languageSelector = document.querySelector(".language-selector");
    const languageToggle = document.querySelector(".language-toggle");
    const languageMenu = document.querySelector(".language-menu");
    const languageForm = document.querySelector(".language-form");
    const languageInput = document.querySelector("input[name='lang']");

    const closeLanguageMenu = () => {
        if (!languageSelector || !languageToggle || !languageMenu) return;
        languageSelector.classList.remove("open");
        languageToggle.setAttribute("aria-expanded", "false");
    };

    const toggleLanguageMenu = () => {
        if (!languageSelector || !languageToggle || !languageMenu) return;
        const isOpen = languageSelector.classList.toggle("open");
        languageToggle.setAttribute("aria-expanded", String(isOpen));
    };

    languageToggle?.addEventListener("click", (event) => {
        event.stopPropagation();
        toggleLanguageMenu();
    });

    languageMenu?.addEventListener("click", (event) => {
        const target = event.target;
        if (!(target instanceof HTMLElement)) return;
        const option = target.closest(".language-option");
        if (!option || !languageInput || !languageForm) return;

        const selectedLang = option.getAttribute("data-lang");
        if (!selectedLang) return;

        languageInput.value = selectedLang;
        languageForm.submit();
    });

    document.addEventListener("click", (event) => {
        if (!languageSelector || !languageSelector.classList.contains("open")) return;
        if (!(event.target instanceof Node)) return;
        if (!languageSelector.contains(event.target)) {
            closeLanguageMenu();
        }
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            closeLanguageMenu();
        }
    });

});
