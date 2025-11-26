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


// ==== DRAG-TO-SLIDE PARA O SLIDESHOW DO TOPO ====
(() => {
    const container = document.querySelector('.slideshow-container');
    if (!container) return;

    const prevBtn = container.querySelector('.prev');
    const nextBtn = container.querySelector('.next');

    let isDown = false;
    let startX = 0;

    container.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.clientX;
    });

    window.addEventListener('mouseup', (e) => {
        if (!isDown) return;
        isDown = false;

        const diff = e.clientX - startX;
        const threshold = 60; // mínimo de arrasto para contar como swipe

        if (diff > threshold && prevBtn) {
            prevBtn.click();      // arrastou para a direita → slide anterior
        } else if (diff < -threshold && nextBtn) {
            nextBtn.click();      // arrastou para a esquerda → slide seguinte
        }
    });

    container.addEventListener('mouseleave', () => {
        isDown = false;
    });
})();


// ==== DRAG PARA O CARROSSEL DO PORTFÓLIO (segue o rato) ====
(() => {
    const carousel = document.querySelector('.portfolio-strip-carousel');
    const track = document.querySelector('.portfolio-strip-track');
    if (!carousel || !track) return;

    let isDown = false;
    let startX = 0;
    let startTranslateX = 0;

    // Lê o translateX atual do track (transform)
    function getCurrentTranslateX() {
        const style = window.getComputedStyle(track);
        const transform = style.transform;

        if (transform === 'none' || !transform) return 0;

        const matrix = new DOMMatrixReadOnly(transform);
        return matrix.m41; // componente X
    }

    carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        carousel.classList.add('dragging');
        track.classList.add('dragging');

        startX = e.clientX;
        startTranslateX = getCurrentTranslateX();
    });

    window.addEventListener('mouseup', () => {
        isDown = false;
        carousel.classList.remove('dragging');
        track.classList.remove('dragging');
    });

    carousel.addEventListener('mouseleave', () => {
        isDown = false;
        carousel.classList.remove('dragging');
        track.classList.remove('dragging');
    });

    carousel.addEventListener('mousemove', (e) => {
        if (!isDown) return;

        e.preventDefault(); // evita o “arrastar para guardar imagem”

        const delta = e.clientX - startX;
        let nextX = startTranslateX + delta;

        // limites: track não pode sair completamente do viewport
        const maxRight = 0; // não passa mais para a direita do que o início
        const maxLeft = carousel.offsetWidth - track.scrollWidth; // negativo

        if (nextX > maxRight) nextX = maxRight;
        if (nextX < maxLeft) nextX = maxLeft;

        track.style.transform = `translateX(${nextX}px)`;
    });
})();
