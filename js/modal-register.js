const registerBtn = document.getElementById("register");
const modalRegister = document.getElementById("modal-register");
const modallogin = document.getElementById("modal-login");
const returnlogin = document.getElementById("returnLogin");
const registrate = document.getElementById("registrate");
const modalConfirmCuenta = document.getElementById("confirm-cuenta");
const closeRegister = document.getElementsByClassName("close-register")[0];
const closeConfirmCuenta = document.getElementsByClassName("close-confirm-cuenta")[0];
const bodyRegister = document.getElementsByTagName("body")[0];

registerBtn.addEventListener("click", () => {
  modalRegister.style.display = "block";
  bodyRegister.style.overflow = "hidden";
  modallogin.style.display = "none";
});

closeRegister.addEventListener("click", () => {
  modalRegister.style.display = "none";
  bodyRegister.style.overflow = "auto";
});

window.addEventListener("click", (event) => {
  if (event.target === modalRegister) {
    modalRegister.style.display = "none";
    bodyRegister.style.overflow = "auto";
  }
  if (event.target === modalConfirmCuenta){
    modalConfirmCuenta.style.display = "none";
    bodyRegister.style.overflow = "auto";
  }
});


closeConfirmCuenta.addEventListener("click", () => {
  modalConfirmCuenta.style.display = "none";
  bodyRegister.style.overflow = "auto";
});

returnlogin.addEventListener("click", () => {
    modalRegister.style.display = "none";
    modallogin.style.display = "block";
});

registrate.addEventListener("click", () => {
  modalRegister.style.display = "none";
  modalConfirmCuenta.style.display = "block";
});


// script verificar
