
// scroll to section smooth
document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll("#nav a");

  navLinks.forEach((link) => {
      link.addEventListener("click", function (e) {
          e.preventDefault();
          const targetId = link.getAttribute("href").substring(1);
          const targetElement = document.getElementById(targetId);

          if (targetElement) {
              targetElement.scrollIntoView({
                  behavior: "smooth", 
              });
          }
      });
  });
});



// hot-spots

(() => {

    const model = document.querySelector("#model");
    const hotspots = document.querySelectorAll(".Hotspot");
    const infoBoxes = [
      { title: "Multi-function Control Button", 
        text:  "Multifunction button on Bluetooth earphones: Controls playback, calls, and voice assistants with ease.", 
        image: "images/Button.jpg"
      },
      { title: "Intelligent Rotating Axis", 
        text:  "It can be manually rotated to suit each person's ear canal, catering for the different needs of each individual.", 
        image: "images/Axis.jpg"
      },
      { title: "Noise-canceling Earplugs", 
        text:  "Comfortable earplugs made of eco-friendly silicone, while different sizes are available for replacement.", 
        image: "images/Earplugs.jpg"
      },
      { title: "Charging Contacts", 
        text:  "VOCO's exclusive patented fast-charging technology allows the headset to be fully charged to 80% in less than 10 minutes.", 
        image: "images/Charging.jpg"
      }
    ]
  
    function modelLoaded() {
      // console.log(hotspots);
      hotspots.forEach(hotspot => {
        hotspot.style.display = "block";
      });
    }
  
    function loadInfo() {
      infoBoxes.forEach((infoBox, index) => {
      let selected = document.querySelector(`#hotspot-${index+1}`);
      // console.log(selected);
    
      
      let h2 = document.createElement("h2");
      h2.textContent = infoBox.title;
  
      let p = document.createElement("p");
      p.textContent = infoBox.text;
      // console.log(infoBox.title);
      // console.log(infoBox.text);
  
      let imageElement = document.createElement('img');
      imageElement.src = infoBox.image; 
      imageElement.alt = "Image"; 
      
      selected.appendChild(h2);
      selected.appendChild(p);
      selected.appendChild(imageElement);
  
    })
  }
  
    loadInfo();
  
    function showInfo() {
      let selected = document.querySelector(`#${this.slot}`);
      gsap.to(selected, 1, { autoAlpha: 1 });
    }
  
    function hideInfo() {
      let selected = document.querySelector(`#${this.slot}`);
      gsap.to(selected, 1, { autoAlpha: 0 });
    }
  
    model.addEventListener("load", modelLoaded);
  
    hotspots.forEach(function (hotspot) {
      hotspot.addEventListener("mouseover", showInfo);
      hotspot.addEventListener("mouseout", hideInfo);
    });


    
 

  // x-ray part

    // variables
    let imageCon = document.querySelector('#imageCon'),
        drag = document.querySelector('.image-drag'),
        left = document.querySelector('.image-left'),
        dragging = false,
        min = 0,
        max = imageCon.offsetWidth;

    function onDown() {
        dragging = true;
        // console.log("on Down called");
    }

    function onUp() {
        dragging = false;
        // console.log("on Up called");
    }

    function onMove(event) {
        if(dragging===true) {
            let x = event.clientX - imageCon.getBoundingClientRect().left;   

            if (x < min) {
                x = min;
            } else if (x > max) {
                x = max-10;
            }

            drag.style.left = x + 'px';
            left.style.width = x + 'px';
        }
    }
    drag.addEventListener('mousedown',onDown);
    document.body.addEventListener('mouseup', onUp);
    document.body.addEventListener('mousemove', onMove);
})();



// pics-light boxes
document.addEventListener('DOMContentLoaded', function() {
  var lightboxTriggers = document.querySelectorAll('.lightbox-trigger');
  var lightbox = document.getElementById('lightbox');
  var closeLightbox = document.getElementById('closeLightbox');
  var lightboxContent = document.querySelector('.lightbox-content');

  lightboxTriggers.forEach(function(trigger) {
      trigger.addEventListener('click', function() {
          lightboxContent.src = trigger.src;
          lightbox.style.display = 'block';
      });
  });

  closeLightbox.addEventListener('click', function() {
      lightbox.style.display = 'none';
  });
});

