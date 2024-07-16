const formulario = document.querySelector("#formulario");
const terminos = document.querySelector("#chb2");
document.addEventListener("DOMContentLoaded", function () {
  formulario.addEventListener("submit", function (e) {
    e.preventDefault();
    if (
      formulario.nombre.value == "" ||
      formulario.apellido.value == "" ||
      formulario.dni.value == "" ||
      formulario.correo.value == "" ||
      formulario.clave.value == "" ||
      formulario.confirmar.value == ""
    ) {
      AlertSweet("¡Algo salió mal! Comprobar campos.", "warning");
    } else if (!terminos.checked) {
      AlertSweet("¡No aceptó los terminos y condiciones.!", "warning");
    } else {
      if (formulario.clave.value == formulario.confirmar.value) {
        const http = new XMLHttpRequest();
        const url = base_url + "Registro/crear";
        http.open("POST", url, true);
        http.send(new FormData(formulario));
        http.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            const res = JSON.parse(this.responseText);
            AlertSweet(res.msg, res.tipo);
            if (res.tipo == "success") {
              formulario.reset();
              //OTRA RUTA
              window.location = base_url + 'Dashboard';
            }
          }
        };
      } else {
        AlertSweet("Las contraseñas no coinciden.", "warning");
      }
    }
  });
});
