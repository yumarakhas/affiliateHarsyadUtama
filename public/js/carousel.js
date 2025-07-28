document.addEventListener("DOMContentLoaded", function () {
    const mobileSlides = document.querySelectorAll(
        "#banner-carousel-mobile .banner-slide"
    );
    const desktopSlides = document.querySelectorAll(
        "#banner-carousel .banner-slide"
    );
    const indicators = document.querySelectorAll("#carousel-indicators button");
    const indicatorLines = document.querySelectorAll(".indicator-line");
    const contentElement = document.getElementById("content");
    let currentSlide = 0;
    let slideInterval;

    // Content for each slide
    const slideContents = [
        {
            title: "Gentlebaby Massage Oil",
            description:
                "bantu atasi bayi rewel dan rileks, juga media bonding",
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
        if (contentElement) {
            contentElement.innerHTML = `${slideContents[index].title}<br />
                <span class="text-white lg:text-white font-normal" style="font-size: 20px;">${slideContents[index].description}</span>`;
        }
    }

    function showSlide(index) {
        // Update mobile slides
        mobileSlides.forEach((slide) => {
            slide.style.opacity = "0";
            slide.style.zIndex = "0";
        });

        if (mobileSlides[index]) {
            mobileSlides[index].style.opacity = "1";
            mobileSlides[index].style.zIndex = "1";
        }

        // Update desktop slides
        desktopSlides.forEach((slide) => {
            slide.style.opacity = "0";
            slide.style.zIndex = "0";
        });

        if (desktopSlides[index]) {
            desktopSlides[index].style.opacity = "1";
            desktopSlides[index].style.zIndex = "1";
        }

        // Update indicators
        indicatorLines.forEach((line, i) => {
            if (i === index) {
                line.classList.add("bg-white/80");
                line.classList.remove("bg-white/40");
                line.classList.add("active");
            } else {
                line.classList.remove("bg-white/80");
                line.classList.add("bg-white/40");
                line.classList.remove("active");
            }
        });

        // Update the content text based on the current slide
        updateContent(index);

        currentSlide = index;
    }

    function nextSlide() {
        const totalSlides = Math.max(mobileSlides.length, desktopSlides.length);
        const newIndex = (currentSlide + 1) % totalSlides;
        showSlide(newIndex);
    }

    indicators.forEach((indicator, index) => {
        indicator.addEventListener("click", function () {
            clearInterval(slideInterval);
            showSlide(index);
            startAutoSlide();
        });
    });

    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 2000);
    }

    // Initialize with the first slide's content
    updateContent(0);
    startAutoSlide();
});
