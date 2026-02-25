console.log("Theme loaded");


document.addEventListener("DOMContentLoaded", function(){

  function closeBanner(){

      const banner = document.getElementById("topBanner");

      if(!banner) return;

      banner.style.display = "none";

      // Save preference using cookie
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