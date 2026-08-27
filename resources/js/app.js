document.addEventListener("DOMContentLoaded", function () {
    document.documentElement.classList.add("js-reveal");

    // ── Scroll reveal (in-view on enter, out on leave) ──
    const reveals = document.querySelectorAll(".reveal");
    if (typeof IntersectionObserver !== "undefined") {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("in-view");
                    } else {
                        entry.target.classList.remove("in-view");
                    }
                });
            },
            { threshold: 0.12, rootMargin: "0px 0px -32px 0px" },
        );
        reveals.forEach((el) => {
            var variant = el.getAttribute("data-variant");
            var delay = el.getAttribute("data-delay");
            if (variant) el.classList.add("reveal-" + variant);
            if (delay) el.style.transitionDelay = delay + "ms";
            observer.observe(el);
        });
    } else {
        reveals.forEach((el) => el.classList.add("in-view"));
    }

    // ── Navbar hide on scroll down, show on scroll up ──
    const navWrapper = document.querySelector(".nav-enter");
    let lastScrollY = 0;
    if (navWrapper) {
        window.addEventListener(
            "scroll",
            function () {
                const y = window.scrollY;
                if (y < 10) {
                    navWrapper.classList.remove("-translate-y-full");
                    navWrapper.classList.add("translate-y-0");
                } else if (y > lastScrollY + 5) {
                    navWrapper.classList.add("-translate-y-full");
                    navWrapper.classList.remove("translate-y-0");
                } else if (y < lastScrollY - 5) {
                    navWrapper.classList.remove("-translate-y-full");
                    navWrapper.classList.add("translate-y-0");
                }
                lastScrollY = y;
            },
            { passive: true },
        );
    }

    // ── Mobile nav toggle ──
    const toggleBtn = document.getElementById("mobileToggle");
    const drawer = document.getElementById("mobileDrawer");
    const menuIcon = document.getElementById("menuIcon");
    const closeIcon = document.getElementById("closeIcon");
    if (toggleBtn && drawer) {
        toggleBtn.addEventListener("click", function () {
            const hidden = drawer.classList.contains("invisible");
            if (hidden) {
                drawer.classList.remove(
                    "invisible",
                    "opacity-0",
                    "-translate-y-4",
                    "pointer-events-none",
                    "max-h-0",
                );
                drawer.classList.add(
                    "opacity-100",
                    "translate-y-0",
                    "pointer-events-auto",
                    "max-h-[85vh]",
                );
                drawer.classList.add("overflow-y-auto");
                menuIcon.classList.add("hidden");
                closeIcon.classList.remove("hidden");
            } else {
                drawer.classList.add(
                    "invisible",
                    "opacity-0",
                    "-translate-y-4",
                    "pointer-events-none",
                    "max-h-0",
                );
                drawer.classList.remove(
                    "opacity-100",
                    "translate-y-0",
                    "pointer-events-auto",
                    "max-h-[85vh]",
                );
                drawer.classList.remove("overflow-y-auto");
                menuIcon.classList.remove("hidden");
                closeIcon.classList.add("hidden");
                // Close all mobile mega menus when drawer closes
                document
                    .querySelectorAll(".mobile-mega-content")
                    .forEach(function (el) {
                        el.classList.add("hidden");
                    });
                document
                    .querySelectorAll(".mobile-mega-toggle svg")
                    .forEach(function (el) {
                        el.style.transform = "";
                    });
            }
        });
    }

    // ── Mobile mega menu accordion ──
    document.querySelectorAll(".mobile-mega-toggle").forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            var targetId = btn.getAttribute("data-target");
            var content = document.getElementById(targetId);
            var icon = btn.querySelector("svg");
            if (content) {
                var isOpen = !content.classList.contains("hidden");
                if (isOpen) {
                    content.classList.add("hidden");
                    icon.style.transform = "";
                } else {
                    content.classList.remove("hidden");
                    icon.style.transform = "rotate(180deg)";
                }
            }
        });
    });

    // ── Desktop mega menu dropdown ──
    var megaTriggers = document.querySelectorAll("[data-mega]");
    var megaPanel = document.getElementById("megaMenuPanel");
    var megaNav = document.getElementById("desktopNav");
    var closeTimer = null;

    function clearCloseTimer() {
        if (closeTimer) {
            clearTimeout(closeTimer);
            closeTimer = null;
        }
    }

    function positionMega() {
        if (megaNav && megaPanel) {
            var navRect = megaNav.getBoundingClientRect();
            megaPanel.style.top = navRect.bottom + "px";
        }
    }

    function showMega(key) {
        clearCloseTimer();
        positionMega();
        document.querySelectorAll(".mega-category").forEach(function (el) {
            if (el.dataset.megaKey === key) {
                el.style.display = "block";
                el.setAttribute("data-visible", "true");
            } else {
                el.style.display = "none";
                el.setAttribute("data-visible", "false");
            }
        });
        megaPanel.classList.remove("hidden");
        requestAnimationFrame(function () {
            megaPanel.style.opacity = "1";
        });
        megaTriggers.forEach(function (t) {
            if (t.dataset.mega === key) {
                t.classList.add("nav-active");
            } else {
                t.classList.remove("nav-active");
            }
        });
    }

    function hideMega() {
        closeTimer = setTimeout(function () {
            megaPanel.style.opacity = "0";
            setTimeout(function () {
                megaPanel.classList.add("hidden");
            }, 150);
            megaTriggers.forEach(function (t) {
                t.classList.remove("nav-active");
            });
        }, 150);
    }

    megaTriggers.forEach(function (trigger) {
        trigger.addEventListener("mouseenter", function () {
            showMega(trigger.dataset.mega);
        });
        trigger.addEventListener("mouseleave", function () {
            hideMega();
        });
    });
    if (megaPanel) {
        megaPanel.addEventListener("mouseenter", clearCloseTimer);
        megaPanel.addEventListener("mouseleave", hideMega);
    }

    window.addEventListener(
        "scroll",
        function () {
            if (megaPanel && !megaPanel.classList.contains("hidden")) {
                positionMega();
            }
        },
        { passive: true },
    );

    // ── Hero slider (handled in blade @push after Swiper CDN loads) ──
    // ── Blog slider (handled in blade @push) ──

    // ── Partners slider ──
    var partnersEl = document.querySelector(".partners-swiper");
    if (partnersEl && typeof Swiper !== "undefined") {
        new Swiper(".partners-swiper", {
            autoplay: { delay: 2500, disableOnInteraction: false },
            loop: true,
            slidesPerView: 2,
            spaceBetween: 20,
            breakpoints: {
                640: { slidesPerView: 3, spaceBetween: 30 },
                768: { slidesPerView: 4, spaceBetween: 30 },
                1024: { slidesPerView: 5, spaceBetween: 40 },
            },
        });
    }

    // ── Testimonial slider (handled in blade @push) ──
});
