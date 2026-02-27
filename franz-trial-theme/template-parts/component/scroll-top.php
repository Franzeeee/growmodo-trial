<button id="scrollTopBtn" class="scroll-top-btn" aria-label="Scroll to top">
    <svg width="20" height="20" viewBox="0 0 24 24">
        <path d="M12 5l-7 7h4v7h6v-7h4z" fill="currentColor"/>
    </svg>
</button>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const scrollBtn = document.getElementById("scrollTopBtn");
    const mainNav = document.querySelector(".main-nav");

    if (!scrollBtn || !mainNav) return;

    window.addEventListener("scroll", function () {

        const navRect = mainNav.getBoundingClientRect();

        // Show button only if nav is completely hidden
        if (navRect.bottom <= 0) {
            scrollBtn.classList.add("active");
        } else {
            scrollBtn.classList.remove("active");
        }

    });

    scrollBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

});
</script>