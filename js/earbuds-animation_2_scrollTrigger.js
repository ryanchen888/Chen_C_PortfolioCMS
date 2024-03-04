

(() => {

    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(ScrollToPlugin);

    const navLinks = document.querySelectorAll("#main-nav ul li a");

    function scrollLink(e) {    
            e.preventDefault(); 
            console.log(e.currentTarget.hash);
            let selectedLink = e.currentTarget.hash;
            gsap.to(window, {duration: 1, scrollTo:{y:`${selectedLink}`, offsetY:100 }});
    }

    navLinks.forEach((link) => {
        link.addEventListener("click", scrollLink);
    });

    gsap.to("#explode-view", 5, 
		{scrollTrigger: {
			trigger: "#explode-view",
			toggleActions:"restart pause reverse none",
            markers: false,
            // start: "top center"
            start: "center bottom",
            end: "bottom center"
		}, 
		x:200, y:200, ease:Bounce.easeOut
		});
  
})();