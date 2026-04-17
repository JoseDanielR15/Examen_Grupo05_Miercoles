function cargarPrecio() {
    let select = document.getElementById("IdCasa");
    let precio = select.options[select.selectedIndex].getAttribute("data-precio");
    document.getElementById("Precio").value = precio;
}

function validar() {
    let usuario = document.getElementById("Usuario").value;

    if(usuario === "") {
        alert("Debe ingresar usuario");
        return false;
    }
    return true;
}