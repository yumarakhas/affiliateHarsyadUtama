document.addEventListener("DOMContentLoaded", function () {
    // Mobile carousel elements
    const mobileSlides = document.querySelectorAll(
        "#banner-carousel-mobile .banner-slide"
    );

    // Desktop carousel elements
    const desktopSlides = document.querySelectorAll(
        "#banner-carousel .banner-slide"
    );

    // Common elements
    const indicators = document.querySelectorAll("#carousel-indicators button");
    const indicatorLines = document.querySelectorAll(".indicator-line");
    const mobileContentElement = document.getElementById("content");
    const desktopContentElement = document.getElementById("desktop-content");

    let currentSlide = 0;
    let slideInterval;

    // Content for each slide
    const slideContents = [
        {
            title: "Gentlebaby Massage Oil",
            description:
                "bantu atasi bayi rewel dan rileks, juga media bonding dengan ayah bunda",
        },
        {
            title: "Mamina ASI Booster",
            description:
                "herbal booster ASI alami, tanpa efek samping dan pemanis perisa",
        },
        {
            title: "Nyam BB Booster",
            description:
                "MPASI booster untuk berat badan bayi, diformulasi oleh dokter dan konselor MPASI",
        },
    ];

    function updateContent(index) {
        // Update mobile content
        if (mobileContentElement) {
            mobileContentElement.innerHTML = `<span class="text-white font-nunito font-bold text-xl sm:text-2xl">${slideContents[index].title}</span><br />
            <span class="text-white font-nunito font-normal text-base sm:text-lg">${slideContents[index].description}</span>`;
        }

        // Update desktop content
        if (desktopContentElement) {
            desktopContentElement.innerHTML = `<span class="text-white font-nunito font-bold text-xl lg:text-2xl xl:text-3xl">${slideContents[index].title}</span><br />
            <span class="text-white font-nunito font-normal text-base lg:text-lg">${slideContents[index].description}</span>`;
        }
    }

    function showSlide(index) {
        // Update mobile slides
        mobileSlides.forEach((slide, i) => {
            slide.style.opacity = i === index ? "1" : "0";
            slide.style.zIndex = i === index ? "1" : "0";
        });

        // Update desktop slides
        desktopSlides.forEach((slide, i) => {
            slide.style.opacity = i === index ? "1" : "0";
            slide.style.zIndex = i === index ? "1" : "0";
        });

        // Update indicators
        indicatorLines.forEach((line, i) => {
            if (i === index) {
                line.classList.add("bg-white/80");
                line.classList.remove("bg-white/40");
            } else {
                line.classList.remove("bg-white/80");
                line.classList.add("bg-white/40");
            }
        });

        // Update content
        updateContent(index);
        currentSlide = index;
    }

    function nextSlide() {
        const totalSlides = Math.max(mobileSlides.length, desktopSlides.length);
        const newIndex = (currentSlide + 1) % totalSlides;
        showSlide(newIndex);
    }

    function goToSlide(index) {
        clearInterval(slideInterval);
        showSlide(index);
        startAutoSlide();
    }

    // Event listeners for indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener("click", function () {
            goToSlide(index);
        });
    });

    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    // Touch/swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;

    function handleSwipe() {
        if (touchEndX < touchStartX - 50) {
            // Swipe left - next slide
            goToSlide((currentSlide + 1) % slideContents.length);
        }
        if (touchEndX > touchStartX + 50) {
            // Swipe right - previous slide
            goToSlide(
                (currentSlide - 1 + slideContents.length) % slideContents.length
            );
        }
    }

    // Touch event listeners for mobile carousel
    const mobileCarousel = document.getElementById("banner-carousel-mobile");
    if (mobileCarousel) {
        mobileCarousel.addEventListener("touchstart", function (e) {
            touchStartX = e.changedTouches[0].screenX;
            clearInterval(slideInterval);
        });

        mobileCarousel.addEventListener("touchend", function (e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            startAutoSlide();
        });
    }

    // Pause on hover for desktop
    const desktopCarousel = document.getElementById("banner-carousel");
    if (desktopCarousel) {
        desktopCarousel.addEventListener("mouseenter", () => {
            clearInterval(slideInterval);
        });

        desktopCarousel.addEventListener("mouseleave", () => {
            startAutoSlide();
        });
    }

    // Initialize
    updateContent(0);
    startAutoSlide();
});
