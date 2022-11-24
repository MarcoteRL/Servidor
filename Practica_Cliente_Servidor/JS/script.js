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
    if (e.key === 'Enter') {
        console.log(e.target.id);
        let table = document.getElementById("table");
        let row = table.getElementsByTagName("tr");
        let col = null;

        for (let i = 0; i < row.length; i++) {
            col = row[i].getElementsByTagName("td");
            for (let j = 0; j < col.length; j++) {
                console.log(col[j]);
                col[j].contentEditable = false;
            }
        }
    }
});

