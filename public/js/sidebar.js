/* ========================================= */
/* RESPONSIVE SIDEBAR FUNCTIONALITY         */
/* ========================================= */

class ResponsiveSidebar {
    constructor() {
        this.sidebar = document.getElementById("sidebar");
        this.hamburgerBtn = null;
        this.overlay = null;
        this.mainContent = document.querySelector(".main-content");
        this.isCollapsed = false;
        this.isMobile = window.innerWidth < 1024;

        this.init();
        this.bindEvents();
    }

    init() {
        this.createHamburgerButton();
        this.createOverlay();
        this.setupInitialState();
    }

    createHamburgerButton() {
        // Create hamburger button
        const hamburgerBtn = document.createElement("button");
        hamburgerBtn.id = "hamburger-btn";
        hamburgerBtn.className = "hamburger-btn";
        hamburgerBtn.setAttribute("aria-label", "Toggle Sidebar");

        // Start with hamburger icon (3 lines)
        hamburgerBtn.innerHTML = `
            <svg class="hamburger-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        `;

        document.body.appendChild(hamburgerBtn);
        this.hamburgerBtn = hamburgerBtn;
    }

    createOverlay() {
        // Create overlay for mobile
        const overlay = document.createElement("div");
        overlay.id = "sidebar-overlay";
        overlay.className = "sidebar-overlay";
        document.body.appendChild(overlay);
        this.overlay = overlay;
    }

    setupInitialState() {
        if (this.isMobile) {
            // Mobile: sidebar hidden by default
            this.sidebar.classList.remove("sidebar-open", "sidebar-expanded");
            this.sidebar.classList.add("sidebar-collapsed");
            this.sidebar.style.transform = "translateX(-100%)";

            // Show hamburger button on mobile
            this.hamburgerBtn.style.opacity = "1";
            this.hamburgerBtn.style.visibility = "visible";
            this.hamburgerBtn.style.transform = "translateX(0)";
        } else {
            // Desktop: sidebar collapsed by default to show only icons
            this.sidebar.classList.remove("sidebar-open");
            this.sidebar.classList.add("sidebar-collapsed");
            this.sidebar.style.transform = "translateX(0)";
            this.isCollapsed = true;

            // Show hamburger button on desktop when collapsed
            this.hamburgerBtn.style.opacity = "1";
            this.hamburgerBtn.style.visibility = "visible";
            this.hamburgerBtn.style.transform = "translateX(0)";

            // Update hamburger icon for collapsed state
            this.updateHamburgerIcon();

            if (this.mainContent) {
                this.mainContent.classList.add("sidebar-collapsed");
                this.mainContent.classList.remove("sidebar-expanded");
            }
        }
    }

    bindEvents() {
        // Hamburger button click
        this.hamburgerBtn.addEventListener("click", () => {
            this.toggleSidebar();
        });

        // Overlay click (mobile)
        this.overlay.addEventListener("click", () => {
            if (this.isMobile) {
                this.closeSidebar();
            }
        });

        // Close button in sidebar (mobile & desktop)
        const closeBtn = document.getElementById("sidebar-close");
        const closeBtnTop = document.getElementById("sidebar-close-top");

        if (closeBtn) {
            closeBtn.addEventListener("click", () => {
                this.closeSidebar();
            });
        }

        if (closeBtnTop) {
            closeBtnTop.addEventListener("click", () => {
                if (this.isMobile) {
                    this.closeSidebar();
                } else {
                    this.collapseSidebar();
                }
            });
        }

        // Window resize handler
        window.addEventListener("resize", () => {
            this.handleResize();
        });

        // Escape key handler
        document.addEventListener("keydown", (e) => {
            if (
                e.key === "Escape" &&
                this.isMobile &&
                this.sidebar.classList.contains("sidebar-open")
            ) {
                this.closeSidebar();
            }
        });
    }

    toggleSidebar() {
        if (this.isMobile) {
            // Mobile: toggle open/close
            if (this.sidebar.classList.contains("sidebar-open")) {
                this.closeSidebar();
            } else {
                this.openSidebar();
            }
        } else {
            // Desktop: toggle collapsed/expanded
            if (this.isCollapsed) {
                this.expandSidebar();
            } else {
                this.collapseSidebar();
            }
        }
    }

    openSidebar() {
        this.sidebar.classList.add("sidebar-open");
        this.sidebar.classList.remove("sidebar-collapsed");
        this.sidebar.style.transform = "translateX(0)";
        this.overlay.classList.add("active");

        // Hide hamburger button when sidebar opens
        this.hamburgerBtn.style.opacity = "0";
        this.hamburgerBtn.style.visibility = "hidden";
        this.hamburgerBtn.style.transform = "translateX(-100%)";

        this.updateHamburgerIcon();

        // Prevent body scrolling when sidebar is open on mobile
        document.body.style.overflow = "hidden";
    }

    closeSidebar() {
        this.sidebar.classList.remove("sidebar-open");
        this.sidebar.classList.add("sidebar-collapsed");
        this.sidebar.style.transform = "translateX(-100%)";
        this.overlay.classList.remove("active");

        // Show hamburger button when sidebar closes
        this.hamburgerBtn.style.opacity = "1";
        this.hamburgerBtn.style.visibility = "visible";
        this.hamburgerBtn.style.transform = "translateX(0)";

        this.updateHamburgerIcon();

        // Restore body scrolling
        document.body.style.overflow = "";
    }

    expandSidebar() {
        this.sidebar.classList.add("sidebar-expanded");
        this.sidebar.classList.remove("sidebar-collapsed");
        this.isCollapsed = false;

        if (this.mainContent) {
            this.mainContent.classList.add("sidebar-expanded");
            this.mainContent.classList.remove("sidebar-collapsed");
        }

        // Hide hamburger button when sidebar expands
        this.hamburgerBtn.style.opacity = "0";
        this.hamburgerBtn.style.visibility = "hidden";
        this.hamburgerBtn.style.transform = "translateX(-100%)";

        this.updateHamburgerIcon();
    }

    collapseSidebar() {
        this.sidebar.classList.remove("sidebar-expanded");
        this.sidebar.classList.add("sidebar-collapsed");
        this.isCollapsed = true;

        if (this.mainContent) {
            this.mainContent.classList.remove("sidebar-expanded");
            this.mainContent.classList.add("sidebar-collapsed");
        }

        // Show hamburger button when sidebar collapses
        this.hamburgerBtn.style.opacity = "1";
        this.hamburgerBtn.style.visibility = "visible";
        this.hamburgerBtn.style.transform = "translateX(0)";

        this.updateHamburgerIcon();
    }

    updateHamburgerIcon() {
        const icon = this.hamburgerBtn.querySelector(".hamburger-icon");
        if (this.isMobile) {
            // Mobile: hamburger/close icon
            if (this.sidebar.classList.contains("sidebar-open")) {
                // Show X (close) icon when sidebar is open
                icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>`;
            } else {
                // Show hamburger icon when sidebar is closed
                icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>`;
            }
        } else {
            // Desktop: always show burger/close depending on state
            if (this.isCollapsed) {
                // Show hamburger icon when collapsed (closed)
                icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>`;
            } else {
                // Show X (close) icon when expanded (open)
                icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>`;
            }
        }
    }

    handleResize() {
        const wasMobile = this.isMobile;
        this.isMobile = window.innerWidth < 1024;

        if (wasMobile !== this.isMobile) {
            // Screen size changed between mobile/desktop
            if (this.isMobile) {
                // Switched to mobile
                this.closeSidebar();
                document.body.style.overflow = "";
            } else {
                // Switched to desktop
                this.overlay.classList.remove("active");
                this.sidebar.classList.remove("sidebar-open");
                document.body.style.overflow = "";

                if (this.isCollapsed) {
                    this.collapseSidebar();
                } else {
                    this.expandSidebar();
                }
            }

            // Update icon for new screen size
            this.updateHamburgerIcon();
        }
    }
}

// ========================================= //
// INITIALIZE SIDEBAR                        //
// ========================================= //

let responsiveSidebar;

document.addEventListener("DOMContentLoaded", function () {
    responsiveSidebar = new ResponsiveSidebar();
});

// ========================================= //
// GLOBAL FUNCTIONS (for backward compatibility) //
// ========================================= //

function toggleSidebar() {
    if (responsiveSidebar) {
        responsiveSidebar.toggleSidebar();
    }
}

function closeSidebar() {
    if (responsiveSidebar) {
        responsiveSidebar.closeSidebar();
    }
}

function openSidebar() {
    if (responsiveSidebar) {
        responsiveSidebar.openSidebar();
    }
}
