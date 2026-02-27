console.log("Theme loaded");


document.addEventListener("DOMContentLoaded", function(){

    const closeBannerBtn = document.getElementById("closeBannerBtn");
    const toggle = document.getElementById("menuToggle");
    const menu = document.querySelector(".nav-menu");
    const mobileMenu = document.querySelector(".mobile-menu");

    if(closeBannerBtn){
        closeBannerBtn.addEventListener("click", closeBanner);
    }
    
    function closeBanner(){

        const banner = document.getElementById("topBanner");

        if(!banner) return;

        banner.style.transition = "opacity 0.5s ease-in-out";
        banner.style.opacity = "0";
        setTimeout(() => {
            banner.style.display = "none";
        }, 500);

        // Save preference using cookie for 1 minute (60 seconds) so that the banner doesn't show again during this time
        document.cookie =
            "franz_banner_closed=1; path=/; max-age=" + 60;

        menu.classList.add("top-hidden");

    }

    if(toggle){

        toggle.addEventListener("click", function(){
            menu.classList.toggle("active");
            mobileMenu.style.display = mobileMenu.style.display === "block" ? "none" : "block";

            if (!closeBannerBtn) {
                // If the banner is closed, ensure the menu stays in the correct position
                if (menu.classList.contains("active")) {
                    menu.classList.add("top-hidden");
                } else {
                    menu.classList.remove("top-hidden");
                }
            }
        });

    }


    const filterContainer = document.querySelector(".contact-location .filter-container");
    
    if (!filterContainer) return;

        filterContainer.addEventListener("click", function(e) {

            if (e.target.tagName === "LI") {

                this.querySelectorAll("li").forEach(li => 
                    li.classList.remove("active")
                );

                e.target.classList.add("active");

                console.log("Selected filter:", e.target.dataset.value);
            }
        });


    document.querySelectorAll('.faq-item').forEach(item => {
        item.addEventListener('click', () => {

            const answer = item.querySelector('.faq-answer');
            const toggle = item.querySelector('.faq-toggle');

            const isOpen = answer.style.display === 'block';

            // Close all
            document.querySelectorAll('.faq-answer').forEach(a => a.style.display = 'none');
            document.querySelectorAll('.faq-toggle').forEach(t => t.textContent = '+');

            // Toggle clicked one
            if (!isOpen) {
                answer.style.display = 'block';
                toggle.textContent = '−';
            }

        });
    });

});