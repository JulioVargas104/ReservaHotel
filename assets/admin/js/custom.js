function cerrarSesion() {
  Swal.fire({
    title: "Cerrar Sesion",
    text: "¿Estás seguro de cerrar sesión?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, salir",
    cancelButtonText: "Cancelar",
  }).then((result) => {
    if (result.isConfirmed) {
      window.location = base_url + "Dashboard/salir";
    }
  });
}
