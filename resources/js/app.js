import "./bootstrap";

import.meta.glob(["../images/**"]);

document.addEventListener("DOMContentLoaded", function () {
    const sidebarToggle = document.getElementById("sidebar-toggle");
    const sidebarClose = document.getElementById("sidebar-close");
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("sidebar-overlay");

    function openSidebar() {
        sidebar.classList.remove("translate-x-full");
        overlay.classList.remove("hidden");
    }

    function closeSidebar() {
        sidebar.classList.add("translate-x-full");
        overlay.classList.add("hidden");
        document.body.classList.remove("overflow-hidden"); // Allow scrolling
    }

    sidebarToggle.addEventListener("click", openSidebar);

    sidebarClose.addEventListener("click", closeSidebar);

    overlay.addEventListener("click", closeSidebar);
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            closeSidebar();
        }
    });

    // Handle window resize
    window.addEventListener("resize", function () {
        if (window.innerWidth >= 768) {
            // md breakpoint
            closeSidebar();
        }
    });
});
