const maquina=document.getElementById("maquina")

const maquinaEscribir = (text = '',tiempo = 200, etiqueta = '') => {
    let arrayCaracteres = text.split('')
    etiqueta.innerHTML = ''
    let i = 0
    let j = text.length
    let escribir = setInterval(function(){
      if (i === arrayCaracteres.length) {
        etiqueta.innerHTML = text.substring(0,j)
        j--
        if (j === 0) {
          etiqueta.innerHTML = ''
          i = 0
          j = text.length
        }
      } else {
        etiqueta.innerHTML += arrayCaracteres[i]
        i++
      }
    }, tiempo)
  }
  
  maquinaEscribir("GESTIÓN DE REDES  SOCIALES.  ",100, maquina);

  const maquina1=document.getElementById("maquina1")

const maquinaEscribir1 = (text1 = '',tiempo = 200, etiqueta = '') => {
    let arrayCaracteres1 = text1.split('')
    etiqueta.innerHTML = ''
    let a = 0
    let b = text.length
    let escribir = setInterval(function(){
      if (a === arrayCaracteres.length) {
        etiqueta.innerHTML = text.substring(0,b)
        b--
        if (b === 0) {
          etiqueta.innerHTML = ''
          a = 0
          b = text.length
        }
      } else {
        etiqueta.innerHTML += arrayCaracteres[a]
        a++
      }
    }, tiempo)
  }
  
  maquinaEscribir1 ("xddddf ",100, maquina1)