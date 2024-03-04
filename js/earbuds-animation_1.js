(() => {

    const canvas = document.querySelector("#first-view");
    const context = canvas.getContext("2d");
    canvas.width = 1920;
    canvas.height = 1080;
    const frameCount = 390;
    const images = []; 

    const buds = {
        frame: 0
    }


    for(let i=0; i<frameCount; i++) {
        const img = new Image();

        img.src = `images/pic_animation/animation_b${(i+1).toString().padStart(4, '0')}.webp`;
        images.push(img);

    }

   
    gsap.to(buds, {
        frame: 390,
        snap: "frame",
        scrollTrigger: {
            trigger: "#first-view",
            pin: true,
            scrub: 1,
            markers: false,
            start: "top top"
        },
        onUpdate: render
    })

    images[0].addEventListener("load", render);

    function render() {
        // console.log(buds.frame);
        // console.log(images[buds.frame]);
        context.clearRect(0,0, canvas.width, canvas.height);
        context.drawImage(images[buds.frame],0,0);
    }

})();