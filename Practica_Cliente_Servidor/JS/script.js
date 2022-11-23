"use strict";

function removeClass() {
    document.getElementById('formulario_add').classList.remove('d-none');
}

function editarAlumno(contador) {
    let element = document.querySelectorAll("[id=" + CSS.escape(contador) + "]");
    for (let i = 0; i < element.length; i++) {
        element[i].contentEditable = 'true';
    }
}

async function removeAlumno(id) {
    await jQuery.get('config.php?value=' + id, false, function (data) { console.log(data) });
    location.reload();
}   