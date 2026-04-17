// Cargar precio cuando se selecciona una casa
function cargarPrecio() {
    var select = document.getElementById('IdCasa');
    var input = document.getElementById('Precio');
    
    if (!select || !input) return;
    
    var opcion = select.options[select.selectedIndex];
    if (!opcion) return;
    
    var precio = opcion.getAttribute('data-precio');
    
    if (precio) {
        var num = parseInt(precio);
        if (!isNaN(num)) {
            input.value = 'C ' + num.toLocaleString('es-CR');
        }
    }
}

// Ejecutar cuando carga la pagina
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', cargarPrecio);
} else {
    cargarPrecio();
}

window.addEventListener('load', cargarPrecio);

function validar() {
    let usuario = document.getElementById("Usuario").value;
    let select = document.getElementById("IdCasa");
    let usuarioCasa = select.options[select.selectedIndex].getAttribute("data-usuario");

    if(usuario === "") {
        alert("Debe ingresar usuario");
        return false;
    }
    if(usuarioCasa !== null && usuarioCasa !== "") {
        alert("Esta casa ya está reservada por " + usuarioCasa);
        return false;
    }
    return true;
}

function validarLiberar() {
    let select = document.getElementById("IdCasaLiberar");
    if(select.selectedIndex === -1) {
        alert("Seleccione una casa para liberar");
        return false;
    }
    return confirm("¿Está seguro de liberar esta casa?");
}