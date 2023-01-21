function validar()
{
    var nombre,email,telefono,mensaje
    nombre=document.getElementById('nombre').value.trim()
    email=document.getElementById('email').value.trim()
    telefono=document.getElementById('telefono').value.trim()
    mensaje=document.getElementById('mensaje').value.trim()
    
    if(nombre==="" || email==="" || telefono ==="" || mensaje ===""){
        validafalla(nombre,"vnjnijvnjd")
        //alert("Todos los campos son obligatorios")
        return false
    }
    else if(!validacioncorreo(email)){
        alert("El e-mail no es valido")
        return false
    }
    else if(!validatelefono(telefono)){
        alert("El numero ingresado deve  de tener 9 caracteres")
        return false
    }
    


    function validacioncorreo(email){
        return /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(email)
    }

    function validatelefono(telefono){
        return /^\d{9}$/.test(telefono)
    }

    
    function validafalla(input,msje){
        var formcontrol =input.parentElement
        var aviso= formcontrol.querySelector('small')
        aviso.innerText=msje
        formcontrol.className='falla'
    }


}
