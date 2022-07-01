function mostrarO(){
    const opcionesM = document.getElementsByName("sabor");
    for(var i=0;i<opcionesM.length;i++){
        if(opcionesM[i].checked){
            alert( "seleccionaste "+opcionesM[i].value);
            break;
        }
    }
}