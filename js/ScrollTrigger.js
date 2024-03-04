(() => {

gsap.registerPlugin(ScrollTrigger);

    gsap.from("#left-side", {
        x: "-100%", 
        opacity: 0, 
        scrollTrigger: {
            trigger: "#icons",
            start: "top 100%", 
            end: "top 50%", 
            toggleActions: "play none none reverse", 
        },
    });

    gsap.from("#right-side", {
        x: "100%", 
        opacity: 0, 
        scrollTrigger: {
            trigger: "#icons",
            start: "top 100%", 
            end: "top 50%", 
            toggleActions: "play none none reverse", 
        },
    });
})();
