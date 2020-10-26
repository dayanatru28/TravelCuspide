function validar() {
    var nombre, correo, celular;
    nombre= document.getElementById("nombreCoti").value;
    correo=document.getElementById("correoCoti").value;
    celular=document.getElementById("celularCoti").value;

    if(nombre===""){
        alert("El campo nombre esta vacio");
    }

}