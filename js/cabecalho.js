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

});
