function handleSubmit(){

    const form = document.querySelector('form');

    form.addEventListener('submit', async (e) =>{
        e.preventDefault();
        
        let formData = new FormData(form);

        let req = await fetch('/login', {method: 'POST', body: formData});

        if(req.status === 401){
            let data = await req.json()
            Object.keys(data).forEach((key, index) => {
                 showError(key, data[key][0])
            });
            console.log(data)  
        }

        if(req.status === 200){
            window.location.assign("/");
        }
    })
}

function showError(field, msg){
    const input = document.querySelector(`input[name='${field}']`)
    input.classList.add('border-danger')
    input.nextElementSibling.innerHTML = msg
    input.nextElementSibling.classList.remove('d-none')
}

function hideError(input){
    input.classList.remove('border-danger')
    input.nextElementSibling.innerHTML = ''
    input.nextElementSibling.classList.add('d-none')
}

handleSubmit();