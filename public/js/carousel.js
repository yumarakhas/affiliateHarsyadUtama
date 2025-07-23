document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".banner-slide");
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
                <span class="text-white font-normal" style="font-size: 20px;">${slideContents[index].description}</span>`;
        }
    }

    function showSlide(index) {
        slides.forEach((slide) => {
            slide.style.opacity = "0";
            slide.style.zIndex = "0";
        });

        slides[index].style.opacity = "1";
        slides[index].style.zIndex = "1";

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
        const newIndex = (currentSlide + 1) % slides.length;
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
