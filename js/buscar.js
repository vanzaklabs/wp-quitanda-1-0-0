var divBuscador = document.getElementById('divBuscador');
divBuscador.classList.add('ocultarDivBuscador');

document.getElementById('btnAbreBuscador').addEventListener("click", abreBuscador);
document.getElementById('btnFechaBuscador').addEventListener("click", fechaBuscador);

function abreBuscador() {
  divBuscador.classList.replace('ocultarDivBuscador', 'exibirDivBuscador')
}

function fechaBuscador() {
  divBuscador.classList.replace('exibirDivBuscador', 'ocultarDivBuscador')
}