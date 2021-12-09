document.addEventListener("DOMContentLoaded", function() {
document.getElementById("form").addEventListener('submit', validarRegistro); 
});
    function validarRegistro(evento) {
        const mensaje = document.getElementById("alerta")
        expresion = /^[A-Z]+$/i
        expresionCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/

        evento.preventDefault();
        var nombre = document.getElementById('nombre').value;
        if(nombre.length < 2){
            mensaje.innerHTML="El nombre debe tener 2 o mas carcteres"
            return
        }
        else if(nombre.length > 25){
            mensaje.innerHTML="El nombre es demasiado largo"
            return
        }
        else if(!expresion.test(nombre)){
            mensaje.innerHTML="Ingrese solo letras en el campo 'Nombre'"
            return
        }
        var apellido = document.getElementById('apellido').value;
        if(apellido.length < 2){
            mensaje.innerHTML="El apellido debe tener 2 o mas carcteres"
            return
        }
        else if(apellido.length > 25){
            mensaje.innerHTML="El apellido es demasiado largo"
            return
        }
        else if(!expresion.test(apellido)){
            mensaje.innerHTML="Ingrese solo letras en el campo 'Apellido'"
            return
        }
        var correo=document.getElementById("correo").value
        if(correo.length < 5){
            mensaje.innerHTML="El correo es demasiado corto"
            return
        }
        else if(correo.length > 40){
            mensaje.innerHTML="El correo es demasiado largo"
            return
        }
        else if(!expresionCorreo.test(correo)){
            mensaje.innerHTML="Formato de correo no valido"
            return
        }
        var telefono = document.getElementById('telefono').value
            if(telefono.length < 5){
            mensaje.innerHTML="Numeros insuficientes para un telefono"
            return
        }
        else if(telefono.length > 15){
            mensaje.innerHTML="Numero demasiado largo"
            return
        }   
        var pais = document.getElementById('pais').value
        if(pais.length < 4){
            mensaje.innerHTML="Caracteres insuficientes para un pais"
            return
        }
        else if(pais.length > 25){
            mensaje.innerHTML="Nombre de pais demasiado largo"
            return
        }
        else if(!expresion.test(pais)){
            mensaje.innerHTML="Ingrese solo letras en el campo 'Pais'"
            return
        }
        var provincia = document.getElementById('provincia').value
            if(provincia.length < 4){
            mensaje.innerHTML="Caracteres insuficientes para una provincia"
            return
        }
        else if(provincia.length > 25){
            mensaje.innerHTML="Nombre de provincia demasiado largo"
            return
        }
        else if(!expresion.test(provincia)){
            mensaje.innerHTML="Ingrese solo letras en el campo 'Provincia'"
            return
        }
        var nombreUsuario = document.getElementById('nombreUsuario').value
            if(nombreUsuario.length < 2){
            mensaje.innerHTML="Nombre de usuario demasiado corto"
            return
        }
        var contraseña = document.getElementById('contraseña').value
            if(contraseña.length < 2){
            mensaje.innerHTML="Contraseña demasiada corta"
            return
        }
        alert("Sus datos fueron registrados correctamente")
        this.submit();
      }

document.addEventListener("DOMContentLoaded", function() {
document.getElementById("form1").addEventListener('submit', validarMensaje); 
});
                function validarMensaje(evento) {
                const mensaje = document.getElementById("alerta1")
                expresion = /^[A-Z]+$/i
                expresionCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
        
                evento.preventDefault();
                var nombre = document.getElementById('nombre1').value;
                if(nombre.length < 2){
                    mensaje.innerHTML="El nombre debe tener 2 o mas carcteres"
                    return
                }
                else if(nombre.length > 25){
                    mensaje.innerHTML="El nombre es demasiado largo"
                    return
                }
                else if(!expresion.test(nombre)){
                    mensaje.innerHTML="Ingrese solo letras en el campo 'Nombre'"
                    return
                }
                var apellido = document.getElementById('apellido1').value;
                if(apellido.length < 2){
                    mensaje.innerHTML="El apellido debe tener 2 o mas carcteres"
                    return
                }
                else if(apellido.length > 25){
                    mensaje.innerHTML="El apellido es demasiado largo"
                    return
                }
                else if(!expresion.test(apellido)){
                    mensaje.innerHTML="Ingrese solo letras en el campo 'Apellido'"
                    return
                }
                var correo=document.getElementById("correo1").value
                if(correo.length < 5){
                    mensaje.innerHTML="El correo es demasiado corto"
                    return
                }
                else if(correo.length > 40){
                    mensaje.innerHTML="El correo es demasiado largo"
                    return
                }
                else if(!expresionCorreo.test(correo)){
                    mensaje.innerHTML="Formato de correo no valido"
                    return
                }
                var texto = document.getElementById('mensaje').value;
                if(texto.length > 300){
                    mensaje.innerHTML="El mensaje es demasiado largo"
                    return
                }
                alert("Su mensaje fue enviado correctamente")
                setTimeout(redireccion1(), 1000) 
                this.submit()
            }

window.addEventListener ('load', function calcularEdad(){
    fechaNacimiento.addEventListener('change', function () {
      if (this.value) {
        edad.innerText = `Edad: ${calculoEdad(this.value)} años`
          }
      })
  }) 
    
const edad = document.getElementById("edad")
const calculoEdad = (fechaNacimiento) => {
    let fechaActual = new Date();
    const anoActual = parseInt(fechaActual.getFullYear())
    const mesActual = parseInt(fechaActual.getMonth())+1
    const diaActual = parseInt(fechaActual.getDate())
        
    const anoNacimiento = parseInt(String(fechaNacimiento).substring(0, 4))
    const mesNacimiento = parseInt(String(fechaNacimiento).substring(5, 7))
    const diaNacimiento = parseInt(String(fechaNacimiento).substring(8, 10))
        
    let edad = anoActual - anoNacimiento;
    if (mesActual < mesNacimiento) {
        edad--
    } 
    else if (mesActual === mesNacimiento) {
        if (diaActual < diaNacimiento) {
            edad--
        }
    }
        return edad
}

function redireccion() {
    setTimeout(function () {
      location.href = "login.html"
    }, 7000) 
}

function redireccion1() {
    location.href = "index.html" 
}

function cambiarColor(obj, color){
    document.getElementsByClassName("evento")
    obj.style.backgroundColor = "midnightblue"
    }
        
function volverColor(obj, color){
    document.getElementsByClassName("evento")
    obj.style.backgroundColor = "darkslategray"
}