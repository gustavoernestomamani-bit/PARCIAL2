const formCita = document.querySelector("#form-cita");
const avisoCita = document.querySelector("#aviso-cita");

function validarCita(event) {
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;

  if (nombre === "" || correo === "") {
    event.preventDefault();
    avisoCita.textContent = "Ingrese su nombre por favor";
    avisoCita.classList.add("error");
    avisoCita.classList.remove("exito");
  } else if (!correo.includes("@")) {
    event.preventDefault();
    avisoCita.textContent = "Ingrese un correo valido por favor";
    avisoCita.classList.add("error");
    avisoCita.classList.remove("exito");
  } else {
    avisoCita.textContent = "Cita reservada - te atiende Gustavo Ernesto Mamani Cutipa";
    avisoCita.classList.add("exito");
    avisoCita.classList.remove("error");
  }
}

formCita.addEventListener("submit", validarCita);
