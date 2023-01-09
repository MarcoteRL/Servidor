"use strict";
let contador = 0;

function triangulo(primero, segundo, tercero) {
  if (parseInt(primero.value) + parseInt(segundo.value) + parseInt(tercero.value) === 180) {
    document.getElementById('resultadoTriangulo').innerHTML = "El triangulo es correcto!"
  } else {
    document.getElementById('resultadoTriangulo').innerHTML = "El triangulo es incorrecto!"
  }
}

function asteriscos() {
  contador++;
  for (let i = 0; i < 5; i++) {
    if (contador === 1) {
      document.getElementById('mostrar').innerText += "*".repeat(i + 1) + "\n";
    }
  }
}

function cambiarPosiciones(input, cambio1, cambio2) {
  let splitted = input.value.split('');
  let numero1 = splitted[cambio1.value];
  let numero2 = splitted[cambio2.value];
  splitted[cambio1.value] = numero2;
  splitted[cambio2.value] = numero1;
  console.log({splitted})
  document.getElementById('resultadoCambio').innerHTML = "El resultado es: " + splitted.join('');
}