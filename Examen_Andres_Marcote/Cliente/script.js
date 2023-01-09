"use strict";
let contador = 0;

/**
 * Función que recoge tres angulos del input y comprueba que suman 180, si lo hacen muestra que el triangulo es correcto
 * si está mal, muestra que es incorrecto.
 * @param {*} primero 
 * @param {*} segundo 
 * @param {*} tercero 
 */
function triangulo(primero, segundo, tercero) {
  if (parseInt(primero.value) + parseInt(segundo.value) + parseInt(tercero.value) === 180) {
    document.getElementById('resultadoTriangulo').innerHTML = "El triangulo es correcto!"
  } else {
    document.getElementById('resultadoTriangulo').innerHTML = "El triangulo es incorrecto!"
  }
}

/**
 * Función que empieza mostrando un asterisco y va en ascenso hasta mostrar 5.
 */
function asteriscos() {
  contador++;
  for (let i = 0; i < 5; i++) {
    if (contador === 1) {
      document.getElementById('mostrar').innerText += "✳".repeat(i + 1) + "\n";
    }
  }
}

/**
 * Función que recibe un número y dos posiciones. La función devolverá el número con las posiciones cambiadas de los elementos.
 * @param {*} input 
 * @param {*} cambio1 
 * @param {*} cambio2 
 */
function cambiarPosiciones(input, cambio1, cambio2) {
  let splitted = input.value.split('');
  let numero1 = splitted[cambio1.value];
  let numero2 = splitted[cambio2.value];
  splitted[cambio1.value] = numero2;
  splitted[cambio2.value] = numero1;
  console.log({splitted})
  document.getElementById('resultadoCambio').innerHTML = "El resultado es: " + splitted.join('');
}