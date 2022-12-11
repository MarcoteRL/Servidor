"use strict";

let contador = 0;
let idAlumno = 0;

/**
 * Elimina la clase d-none que se utiliza para ocultar el formulario
 */
function removeClass() {
    if (document.getElementById('formulario_add').classList.contains('d-none')) {
        document.getElementById('formulario_add').classList.remove('d-none');
    } else {
        document.getElementById('formulario_add').classList.add('d-none');
    }
}


/**
 * Recibe el ID del alumno y añade a todas las celdas el parametro "contenteditable" para 
 * poder editar los datos.
 * @param {number} id 
 */
function editarAlumno(id) {
    idAlumno = id;
    contador++;
    console.log({ contador })
    let element = document.querySelectorAll("[id=" + CSS.escape(id) + "]");
    for (let i = 0; i < element.length; i++) {
        if (element[i].tagName != 'BUTTON') {
            element[i].contentEditable = 'true';
        }
    }
    if (contador == 1) {
        document.querySelector("button[id=" + CSS.escape(id) + "]").innerHTML = "Guardar";
        document.querySelector("button[id=" + CSS.escape(id) + "]").classList.remove('btn-primary');
        document.querySelector("button[id=" + CSS.escape(id) + "]").classList.add('btn-success');
    }
    if (contador == 2) {
        actualizar();
        contador = 0;
    }
}


/**
 * Recorre la tabla y envía al PHP los elementos de la tabla que coincide con el ID del alumno, para que se actualicen los datos.
 */
async function actualizar() {
    let array = [];
    let table = document.getElementById("table");
    let row = table.getElementsByTagName("tr");
    let col = null;
    for (let i = 0; i < row.length; i++) {
        col = row[i].getElementsByTagName("td");
        for (let j = 0; j < col.length; j++) {
            if (col[j].id == idAlumno) {
                col[j].contentEditable = false;
                array.push(col[j]);
            }
        }
    }
    if (array.length > 0) {
        let objeto = {
            "id": idAlumno,
            "nombre": array[0].innerHTML,
            "apellidos": array[1].innerHTML,
            "telefono": array[2].innerHTML,
            "edad": array[3].innerHTML
        }
        await jQuery.get('config.php?objeto=' + objeto["id"] + "," + objeto["nombre"] + "," + objeto["apellidos"] + "," + objeto["telefono"] + "," + objeto["edad"] + ",", false, function (data) { console.log(data) });
        location.reload();
    }
}


/**
 * Recibe el ID y envia se lo envía al PHP para que lo elimine.
 * @param {number} id 
 */
async function removeAlumno(id) {
    await jQuery.get('config.php?value=' + id, false, function (data) { console.log(data) });
    location.reload();
}


/**
 * Detecta si el usuario pulsa enter dentro de la tabla y llama al la función de actualizar.
 */
document.querySelector('#table').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        actualizar();
    }
});