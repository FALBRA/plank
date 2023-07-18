const loginBtn = document.getElementById("login");
const modal = document.getElementById("modal-login");
const closeBtn = document.getElementsByClassName("close")[0];
const body = document.getElementsByTagName("body")[0];

loginBtn.addEventListener("click", () => {
  modal.style.display = "block";
  body.style.overflow = "hidden";
});

closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
  body.style.overflow = "auto";
});

window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
    body.style.overflow = "auto";
  }
});

// También puedes agregar la funcionalidad del formulario para el inicio de sesión aquí.
// Por ejemplo, enviar los datos a un servidor mediante una solicitud AJAX.
