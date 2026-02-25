console.log("Theme loaded");


document.addEventListener("DOMContentLoaded", function(){

    const closeBannerBtn = document.getElementById("closeBannerBtn");

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

    }

    const toggle = document.getElementById("menuToggle");
    const menu = document.querySelector(".nav-menu");

    if(toggle){

        toggle.addEventListener("click", function(){
            menu.classList.toggle("active");
        });

    }

});