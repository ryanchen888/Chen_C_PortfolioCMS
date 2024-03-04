
(() => {

    const canvas = document.querySelector("#logo-animation");
    const context = canvas.getContext("2d");
    canvas.width = 1920;
    canvas.height = 1080;
    const frameCount = 180;
    const images = []; 

    
    const buds = {
        frame: 0
    }

    for(let i=0; i<frameCount; i++) {
        console.log(i);
        const img = new Image();
        img.src = `images/animation/logo_at${(i+1).toString().padStart(4, '0')}.webp`;
        images.push(img);

    }

     gsap.to(buds, {
        frame: 180,
        snap: "frame",
        scrollTrigger: {
            trigger: "#logo-animation",
            pin: true,
            scrub: 1,
            markers: false,
            start: "top top"
        },
        onUpdate: render
    })

    images[0].addEventListener("load", render);

    function render() {
        console.log(buds.frame);
        console.log(images[buds.frame]);
        context.clearRect(0,0, canvas.width, canvas.height);
        context.drawImage(images[buds.frame],0,0);
    }

})();