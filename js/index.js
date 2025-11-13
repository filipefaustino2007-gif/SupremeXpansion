// Slideshow automático sincronizado com zoom + botões manuais + bloqueio de cliques
let currentSlide = 0;
let isAnimating = false;
let slideInterval;

document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".slide");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");
    const transitionTime = 1000; // ms (igual à duração da animação CSS)
    const slideDelay = 7000; // intervalo entre slides

    // Mostra o primeiro slide
    slides[currentSlide].classList.add("active");

    // Função que limpa classes de transição
    function resetClasses() {
        slides.forEach(slide => {
            slide.classList.remove(
                "slide-in-right",
                "slide-out-left",
                "slide-in-left",
                "slide-out-right",
                "active"
            );
        });
    }

    // Função principal para mostrar slide
    function showSlide(nextIndex, direction) {
        if (isAnimating) return; // evita múltiplos cliques
        isAnimating = true;

        const totalSlides = slides.length;
        const next = (nextIndex + totalSlides) % totalSlides;

        const current = slides[currentSlide];
        const upcoming = slides[next];

        const outClass = direction === "next" ? "slide-out-left" : "slide-out-right";
        const inClass = direction === "next" ? "slide-in-right" : "slide-in-left";

        resetClasses(); // limpa tudo antes da transição
        current.classList.add(outClass);
        upcoming.classList.add(inClass);

        // Espera até o final da animação
        setTimeout(() => {
            resetClasses();
            upcoming.classList.add("active");
            currentSlide = next;
            isAnimating = false;
        }, transitionTime);
    }

    function nextSlide() {
        showSlide(currentSlide + 1, "next");
    }

    function prevSlide() {
        showSlide(currentSlide - 1, "prev");
    }

    // Controlador de intervalo automático
    function startAutoSlide() {
        clearInterval(slideInterval);
        slideInterval = setInterval(() => {
            if (!isAnimating) nextSlide();
        }, slideDelay);
    }

    // Inicia slideshow automático
    startAutoSlide();

    // Botões de navegação
    nextBtn.addEventListener("click", () => {
        clearInterval(slideInterval);
        nextSlide();
        startAutoSlide();
    });

    prevBtn.addEventListener("click", () => {
        clearInterval(slideInterval);
        prevSlide();
        startAutoSlide();
    });
});


// Carrossel de Portfolio (faixa com 17 imagens com transição suave)
document.addEventListener("DOMContentLoaded", () => {
    const track = document.querySelector(".portfolio-strip-track");
    const items = document.querySelectorAll(".portfolio-item");
    if (!track || items.length === 0) return;

    const slideInterval = 7000; // 7 segundos
    const slideWidth = items[0].offsetWidth + 28; // largura + gap

    setInterval(() => {
        // Move o track suavemente para a esquerda
        track.style.transform = `translateX(-${slideWidth}px)`;

        // Quando termina a animação, reposiciona o primeiro item no fim e reseta transform
        setTimeout(() => {
            track.appendChild(track.firstElementChild);
            track.style.transition = "none";
            track.style.transform = "translateX(0)";
            // força reflow e reativa a transição
            void track.offsetWidth;
            track.style.transition = "transform 1.2s ease-in-out";
        }, 1200); // igual à duração da transição
    }, slideInterval);
});

