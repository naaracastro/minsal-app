function confirmacion(e){
    if (confirm("¿Está seguro que desea modificar/eliminar al usuario?")){
        return true;
    } else{
        e.preventDefault();
    }
}

let linkdelete = document.querySelectorAll(".table__item_link");

for(var i=0; i<linkdelete.length; i++){
    linkdelete[i].addEventListener('click', confirmacion);
}