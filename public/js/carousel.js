document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.banner-slide');
    const indicators = document.querySelectorAll('#carousel-indicators button');
    const indicatorLines = document.querySelectorAll('.indicator-line');
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach(slide => {
            slide.style.opacity = '0';
            slide.style.zIndex = '0';
        });

        slides[index].style.opacity = '1';
        slides[index].style.zIndex = '1';

        indicatorLines.forEach((line, i) => {
            if (i === index) {
                line.classList.add('bg-white/80');
                line.classList.remove('bg-white/40');
                line.classList.add('active');
            } else {
                line.classList.remove('bg-white/80');
                line.classList.add('bg-white/40');
                line.classList.remove('active');
            }
        });

        currentSlide = index;
    }

    function nextSlide() {
        const newIndex = (currentSlide + 1) % slides.length;
        showSlide(newIndex);
    }

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function () {
            clearInterval(slideInterval);
            showSlide(index);
            startAutoSlide();
        });
    });

    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 2000);
    }

    startAutoSlide();
});
