/**
 * Topbar Navigation JavaScript
 * Handles mobile menu toggle and dropdown functionality
 */
document.addEventListener("DOMContentLoaded", function () {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");

            // Toggle hamburger icon animation
            const menuIcon = mobileMenuButton.querySelector("svg");
            menuIcon.classList.toggle("rotate-90");
        });
    }

    // Desktop dropdown functionality
    const produkDropdownBtn = document.getElementById("produk-dropdown-btn");
    const produkDropdownMenu = document.getElementById("produk-dropdown-menu");

    if (produkDropdownBtn && produkDropdownMenu) {
        let timeoutId;

        // Show dropdown on hover
        produkDropdownBtn.parentElement.addEventListener(
            "mouseenter",
            function () {
                clearTimeout(timeoutId);
                produkDropdownMenu.classList.remove(
                    "opacity-0",
                    "invisible",
                    "translate-y-2"
                );
                produkDropdownMenu.classList.add(
                    "opacity-100",
                    "visible",
                    "translate-y-0"
                );
            }
        );

        // Hide dropdown on mouse leave with delay
        produkDropdownBtn.parentElement.addEventListener(
            "mouseleave",
            function () {
                timeoutId = setTimeout(() => {
                    produkDropdownMenu.classList.remove(
                        "opacity-100",
                        "visible",
                        "translate-y-0"
                    );
                    produkDropdownMenu.classList.add(
                        "opacity-0",
                        "invisible",
                        "translate-y-2"
                    );
                }, 150);
            }
        );

        // Toggle dropdown on button click (for touch devices)
        produkDropdownBtn.addEventListener("click", function (e) {
            e.preventDefault();
            const isVisible =
                produkDropdownMenu.classList.contains("opacity-100");

            if (isVisible) {
                produkDropdownMenu.classList.remove(
                    "opacity-100",
                    "visible",
                    "translate-y-0"
                );
                produkDropdownMenu.classList.add(
                    "opacity-0",
                    "invisible",
                    "translate-y-2"
                );
            } else {
                produkDropdownMenu.classList.remove(
                    "opacity-0",
                    "invisible",
                    "translate-y-2"
                );
                produkDropdownMenu.classList.add(
                    "opacity-100",
                    "visible",
                    "translate-y-0"
                );
            }
        });

        // Close dropdown when clicking outside
        document.addEventListener("click", function (e) {
            if (!produkDropdownBtn.parentElement.contains(e.target)) {
                produkDropdownMenu.classList.remove(
                    "opacity-100",
                    "visible",
                    "translate-y-0"
                );
                produkDropdownMenu.classList.add(
                    "opacity-0",
                    "invisible",
                    "translate-y-2"
                );
            }
        });
    }

    // Mobile dropdown functionality
    const mobileProdukDropdownBtn = document.getElementById(
        "mobile-produk-dropdown-btn"
    );
    const mobileProdukDropdownMenu = document.getElementById(
        "mobile-produk-dropdown-menu"
    );

    if (mobileProdukDropdownBtn && mobileProdukDropdownMenu) {
        mobileProdukDropdownBtn.addEventListener("click", function (e) {
            e.preventDefault();
            const isHidden =
                mobileProdukDropdownMenu.classList.contains("hidden");

            // Toggle visibility
            mobileProdukDropdownMenu.classList.toggle("hidden");

            // Rotate arrow with smooth animation
            const arrow = mobileProdukDropdownBtn.querySelector("svg");
            arrow.classList.toggle("rotate-180");

            // Smooth slide animation
            if (isHidden) {
                // Show menu
                mobileProdukDropdownMenu.style.maxHeight =
                    mobileProdukDropdownMenu.scrollHeight + "px";
                setTimeout(() => {
                    mobileProdukDropdownMenu.style.maxHeight = "none";
                }, 300);
            } else {
                // Hide menu
                mobileProdukDropdownMenu.style.maxHeight =
                    mobileProdukDropdownMenu.scrollHeight + "px";
                setTimeout(() => {
                    mobileProdukDropdownMenu.style.maxHeight = "0px";
                }, 10);
            }
        });
    }

    // Close mobile menu when clicking outside
    document.addEventListener("click", function (e) {
        const isClickInsideNav = document
            .querySelector("header")
            .contains(e.target);

        if (
            !isClickInsideNav &&
            mobileMenu &&
            !mobileMenu.classList.contains("hidden")
        ) {
            mobileMenu.classList.add("hidden");
        }
    });

    // Close mobile menu when window is resized to desktop
    window.addEventListener("resize", function () {
        if (
            window.innerWidth >= 1024 &&
            mobileMenu &&
            !mobileMenu.classList.contains("hidden")
        ) {
            mobileMenu.classList.add("hidden");
        }
    });
});
