const formulario = document.querySelector("#formulario");
document.addEventListener("DOMContentLoaded", function () {
  //VALIDAR CAMPOS
  formulario.addEventListener("submit", function (e) {
    e.preventDefault();
    if (
      formulario.f_llegada.value == "" ||
      formulario.f_salida.value == "" ||
      formulario.habitacion.value == "Seleccionar"
    ) {
      AlertSweet("¡Algo salió mal! Comprobar campos.", "warning");
    } else {
      this.submit();
    }
  });
});
