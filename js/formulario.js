window.addEventListener('load',()=>{
   const form= document.getElementById('formulario')
   const nombre= document.getElementById('nombre')
   const telefono=document.getElementById('telefono')
   const email= document.getElementById('email')
   const mensaje= document.getElementById('mensaje')
   

   form.addEventListener('submit',(e)=>{
    e.preventDefault()
    validacampos()

   })

   const validacampos =() =>{
       //capturando los valores ingresados 
       const nombr= nombre.value.trim()
       const tele=telefono.value.trim()
       const co=email.value.trim()
       const men=mensaje.value.trim()
       //validando nombre y apellidos
       if(nombr === '' ){
        //console.log('campo vacio')
        validafalla(nombre,'Campo vacio')
       }else{
         //console.log(nombr)
         validaok(nombre)
       }
       //validando correo
       if(!co){
        validafalla(email,'Campo vacio')
       }else if(!validaemail(co)){
            validafalla(email,'El e-mail no es valido')
       }else{
        validaok(email)
       }

       //validacion de numero de telefono
       if(!tele){
        validafalla(telefono,'Campo vacio')
       }else if(!validanumeros2(tele)){
           validafalla(telefono,'No tiene el formato correcto porfavor de corregir') 
       }
       else if(!validamumeros(tele)){
            validafalla(telefono,'Debes de tener 9 caracteres')
       }else{
        validaok(telefono)
       }

       //validacion para el mensajee
       if(!men){
        validafalla(mensaje,'Campo vacio')

       }else{
        validaok(mensaje )

       }
   }

   const validafalla=(input,msje)=>{
    const formcontrol =input.parentElement
    const aviso= formcontrol.querySelector('small')
    aviso.innerText=msje
    formcontrol.className='falla'
    }

    const validaok=(input,msje)=>{
        const formcontrol =input.parentElement
        formcontrol.className='exito'
    }

    const validaemail=(email)=>{
        return  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(email)
    }

    const validamumeros=(telefono)=>{
        return /^\d{9}$/.test(telefono)
    }

    const validanumeros2=(telefono)=>{
        return /^([0-9])*$/.test(telefono)
    }


})