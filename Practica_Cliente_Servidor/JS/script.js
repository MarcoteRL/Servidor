"use strict";

function removeClass() {
    document.getElementById('formulario_add').classList.remove('d-none');
}

function editarAlumno(id) {
    let element = document.querySelectorAll("[id=" + CSS.escape(id) + "]");
    for (let i = 0; i < element.length; i++) {
        element[i].contentEditable = 'true';
    }
}

async function removeAlumno(id) {
    await jQuery.get('config.php?value=' + id, false, function (data) { console.log(data) });
    location.reload();
}



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