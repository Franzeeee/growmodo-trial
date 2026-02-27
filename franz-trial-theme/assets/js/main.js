console.log("Theme loaded");


document.addEventListener("DOMContentLoaded", function(){

    const closeBannerBtn = document.getElementById("closeBannerBtn");
    const toggle = document.getElementById("menuToggle");
    const menu = document.querySelector(".nav-menu");
    const mobileMenu = document.querySelector(".mobile-menu");
    const mainNav = document.querySelector(".main-nav");

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

        // Save preference using cookie for 1 minute (5 seconds) so that the banner doesn't show again during this time
        document.cookie =
            "franz_banner_closed=1; path=/; max-age=" + 5;

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

});