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


        if((nombre || email || telefono || mensaje ).length=(nombr || co || tele || men )){
            form.reset()
            document.getElementById('alert').classList.add('ale-env')
            setTimeout(()=>{
                document.getElementById('alert').classList.remove('ale-env')
            },5000)
    
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
         const aviso= formcontrol.querySelector('small')
         aviso.innerText=msje
         formcontrol.className='exito'
     }
 
     const validaemail=(email)=>{
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
     }
 
     const validamumeros=(telefono)=>{
         return /^\d{9}$/.test(telefono)
     }
 
     const validanumeros2=(telefono)=>{
         return /^([0-9])*$/.test(telefono)
     }

     
 
 
 })