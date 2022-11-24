"use strict";

let contador = 0;

/**
 * Elimina la clase d-none que se utiliza para ocultar el formulario
 */
function removeClass() {
    document.getElementById('formulario_add').classList.remove('d-none');
}

/**
 * Recibe el ID del alumno y añade a todas las celdas el parametro "contenteditable" para 
 * poder editar los datos.
 * @param {number} id 
 */
function editarAlumno(id) {
    contador++;
    let element = document.querySelectorAll("[id=" + CSS.escape(id) + "]");
    for (let i = 0; i < element.length; i++) {
        element[i].contentEditable = 'true';
    }
    if (contador == 1) {
        let boton = document.querySelector("button[class=" + CSS.escape(id) + "]");
        document.querySelector("button[class=" + CSS.escape(id) + "]").innerHTML = "Guardar";
        document.querySelector("button[class=" + CSS.escape(id) + "]").classList.remove('btn-primary');
        document.querySelector("button[class=" + CSS.escape(id) + "]").classList.add('btn-success');
    }
    if(contador == 2){
        contador = 0;
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
 * Detecta si el usuario pulsa enter, elimina la opcion de editar celdas y envia los cambios
 * al PHP para que se actualice en la Base de Datos.
 */
document.querySelector('#table').addEventListener('keypress', function (e) {
    let array = [];
    if (e.key === 'Enter') {
        let table = document.getElementById("table");
        let row = table.getElementsByTagName("tr");
        let col = null;

        for (let i = 0; i < row.length; i++) {
            col = row[i].getElementsByTagName("td");
            for (let j = 0; j < col.length; j++) {
                col[j].contentEditable = false;
                array.push(col[j]);
            }
        }
    }
    if (array.length > 0) {
        let objeto = {
            "id": array[0].innerHTML,
            "nombre": array[1].innerHTML,
            "apellidos": array[2].innerHTML,
            "telefono": array[3].innerHTML,
            "edad": array[4].innerHTML
        }
        jQuery.get('config.php?objeto=' + objeto["id"] + "," + objeto["nombre"] + "," + objeto["apellidos"] + "," + objeto["telefono"] + "," + objeto["edad"] + ",", false, function (data) { console.log(data) });
        location.reload();
    }
});