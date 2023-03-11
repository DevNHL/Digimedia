window.addEventListener('load',()=>{
    const form= document.getElementById('formulario')
    const nombre= document.getElementById('nombre')
    const telefono=document.getElementById('telefono')
    const email= document.getElementById('email')
    const mensaje= document.getElementById('mensaje')
    
    //sss
    const nom= nombre.value.trim()
    const te=telefono.value.trim()
    const c=email.value.trim()
    const m=mensaje.value.trim()
   
    
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
        const campos={
            nombr:false,
            tele:false,
            co:false,
            men:false,

        }
        //validando nombre y apellidos
        if(nombr === '' ){
         //console.log('campo vacio')
         validafalla(nombre,'Campo vacio')
         campos['nombr']=true
         
         
        }else{
          //console.log(nombr)
          validaok(nombre)
          campos['nombr']=false
          
          
        }
        //validando correo
        if(!co){
         validafalla(email,'Campo vacio')
         campos['co']=true
         
        }else if(!validaemail(co)){
             validafalla(email,'El e-mail no es valido')
             campos['co']=true
             
        }else{
         validaok(email)
         campos['co']=false
         
        }
 
        //validacion de numero de telefono
        if(!tele){
         validafalla(telefono,'Campo vacio')
         campos['tele']=true
         
        }else if(!validamumeros(tele)){
             validafalla(telefono,'Debes de tener 9 caracteres')
             campos['tele']=true
             
        }else{
         validaok(telefono)
         campos['tele']=false
         
        }
 
        //validacion para el mensajee
        if(!men){
         validafalla(mensaje,'Campo vacio')
         campos['men']=true
         
 
        }else{
         validaok(mensaje )
         campos['men']=false
 
        }
       
        if((nombr && tele && co && men )){
            form.reset()
            document.getElementById('alert').classList.add('ale-env')
            setTimeout(()=>{
                document.getElementById('alert').classList.remove('ale-env')
            },5000)
            
            document.querySelectorAll('.exito').forEach((icono)=>{
                icono.classList.remove('exito')
            })
            
            
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
 


     
     
 
 
 })