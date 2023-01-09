"use strict";
let contador = 0;

<<<<<<< HEAD
/**
 * Función que recoge tres angulos del input y comprueba que suman 180, si lo hacen muestra que el triangulo es correcto
 * si está mal, muestra que es incorrecto.
 * @param {*} primero 
 * @param {*} segundo 
 * @param {*} tercero 
 */
=======
>>>>>>> 039daf822fd1e93d7ac1fca133f6866658a9c495
function triangulo(primero, segundo, tercero) {
  if (parseInt(primero.value) + parseInt(segundo.value) + parseInt(tercero.value) === 180) {
    document.getElementById('resultadoTriangulo').innerHTML = "El triangulo es correcto!"
  } else {
    document.getElementById('resultadoTriangulo').innerHTML = "El triangulo es incorrecto!"
  }
}

<<<<<<< HEAD
/**
 * Función que empieza mostrando un asterisco y va en ascenso hasta mostrar 5.
 */
=======
>>>>>>> 039daf822fd1e93d7ac1fca133f6866658a9c495
function asteriscos() {
  contador++;
  for (let i = 0; i < 5; i++) {
    if (contador === 1) {
<<<<<<< HEAD
      document.getElementById('mostrar').innerText += "✳".repeat(i + 1) + "\n";
=======
      document.getElementById('mostrar').innerText += "*".repeat(i + 1) + "\n";
>>>>>>> 039daf822fd1e93d7ac1fca133f6866658a9c495
    }
  }
}

<<<<<<< HEAD
/**
 * Función que recibe un número y dos posiciones. La función devolverá el número con las posiciones cambiadas de los elementos.
 * @param {*} input 
 * @param {*} cambio1 
 * @param {*} cambio2 
 */
=======
>>>>>>> 039daf822fd1e93d7ac1fca133f6866658a9c495
function cambiarPosiciones(input, cambio1, cambio2) {
  let splitted = input.value.split('');
  let numero1 = splitted[cambio1.value];
  let numero2 = splitted[cambio2.value];
  splitted[cambio1.value] = numero2;
  splitted[cambio2.value] = numero1;
  console.log({splitted})
  document.getElementById('resultadoCambio').innerHTML = "El resultado es: " + splitted.join('');
}