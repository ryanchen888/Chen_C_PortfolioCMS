// function contactForm() {

    const form = document.querySelector('#form-msg');
    const feedBack = document.querySelector('#feedback');


    function regForm(event) {
        event.preventDefault(); 
        const url = 'form_message.php';
        const thisForm = event.currentTarget;
        console.log(thisForm.elements);
        const formdata =
    "fname=" + thisForm.elements.fname.value +
    "&lname=" + thisForm.elements.lname.value +
    "&email=" + thisForm.elements.email.value +
    "&contents=" + thisForm.elements.contents.value;

        console.log(formdata);

        fetch(url, {
            method: 'POST',
            headers: { "Content-Type": "application/x-www-form-urlencoded" },

            body: formdata
        })
        .then(response => response.json())
            .then(msg => {
                console.log(msg);
                feedBack.innerHTML = "";
                form.reset();
                 if (msg.errors===true) {
                    msg.errors.forEach(error => {
                        const errorElement = document.createElement("p");
                        errorElement.textContent = error;
                        feedBack.appendChild(errorElement);
                    })
                } 

            })
            .catch()
        

    }

    form.addEventListener('submit', regForm); 


    

// }