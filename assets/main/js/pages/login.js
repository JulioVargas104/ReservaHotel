const formulario = document.querySelector("#formulario");
document.addEventListener("DOMContentLoaded", function () {
  formulario.addEventListener("submit", function (e) {
    e.preventDefault();
    if (formulario.dni.value == "" || formulario.clave.value == "") {
      AlertSweet("¡Algo salió mal! Comprobar campos.", "warning");
    } else {
      const http = new XMLHttpRequest();
      const url = base_url + "Login/verify";
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
    }
  });
});
