(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
  
          form.classList.add('was-validated')
        }, false)
      })
  })()
  
  const nombre = document.getElementById("nombre")
  const apellido = document.getElementById("apellido")
  const email = document.getElementById("email")
  const fechaNacimiento = document.getElementById("fechaNacimiento")
  const nombreUsuario = document.getElementById("nombreUsuario")
  const contraseña = document.getElementById("contraseña")
  const error = document.getElementById("error")
  error.innerHTML = " ";

  form.addEventListener("submit", e=>{
    e.preventDefault()
    if (nombre.length <= 2) {
      error.innerHTML = "El nombre debe tener 2 o mas letras";
      return false;
    }
    if (apellido.length <= 2) {
      error.innerHTML = "El apellido debe tener 2 o mas letras";
      return false; 
    }
  })
 
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
        } else if (mesActual === mesNacimiento) {
            if (diaActual < diaNacimiento) {
                edad--
            }
        }
        return edad
    }
  
  function mensaje(){
      const alerta = document.getElementsByClassName("btn btn-primary")
      var msg = 'Su mensaje fue enviado con exito'
      alert(msg)
  }
  
  function redireccion() {
    setTimeout(function () {
      location.href = "/sesion.php";
    }, 5000); 
   }
  
  function cambiarColor(obj, color){
      document.getElementsByClassName("evento")
      obj.style.backgroundColor = "midnightblue"
  }
  
  function volverColor(obj, color){
      document.getElementsByClassName("evento")
      obj.style.backgroundColor = "skyblue"
  }