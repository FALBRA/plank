// Función para manejar la búsqueda
const inputBusqueda = document.querySelector("#busqueda");

inputBusqueda.addEventListener("keyup", () => {
  const filtro = inputBusqueda.value.toUpperCase();
  const listaServicios = document.querySelector("#lista-servicios");
  const servicios = listaServicios.querySelectorAll(".servicio");

  // Iterar sobre cada servicio y mostrar u ocultar según la búsqueda
  servicios.forEach((servicio) => {
    const textoServicio = servicio.querySelector("h1").textContent || servicio.querySelector("h1").innerText;

    if (textoServicio.toUpperCase().indexOf(filtro) > -1) {
      servicio.style.display = "";
    } else {
      servicio.style.display = "none";
    }
  });
});
