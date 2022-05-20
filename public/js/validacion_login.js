window.onload = () =>{
    var txtError = document.querySelector('#txt_error')
    txtError.style.display = 'none'

    var form_login = document.querySelector('#form_login')
    form_login.addEventListener('submit',(e)=>{
        e.preventDefault()
        var inputs = document.querySelectorAll('#input_form')
        var error = false
        for(var i = 0; i < inputs.length; i++){
            if(inputs[i].value == ""){
                inputs[i].classList.add('border-red-400')
                txtError.style.display = 'block'
                error = true
            }
        }
        if(!error){
            form_login.submit()
        }
    })
}