function mantenimientos(){
    

    var aceite=documet.createElement('imput');
    aceite.type="checkbox";
    aceite.name="aceite";
    aceite.id="aceite";

    var labaceite=document.createElement('label');
    labeaceite.for="aceite";
    labeaceite.id="laceite";
    labeaceite.txtComtent="Aceite";

    //frenos
    var frenos=documet.createElement('imput');
    frenos.type="checkbox";
    frenos.name="frenos";
    frenos.id="frenos";
    var labfrenos=document.createElement('label');
    labfrenos.for="frenos";
    labfrenos.id="lfrenos";
    labfrenos.txtComtent="Frenos";

    //llantas 
    var llantas=documet.createElement('imput');
    llantas.type="checkbox";
    llantas.name="llantas";
    llantas.id="llantas";
    var labllantas=document.createElement('label');
    labllantas.for="llantas";
    labllantas.id="lllantas";
    labllantas.txtComtent="Llantas";

    opcion.appendChild(aceite);
    opcion.appendChild(labaceite);
    opcion.appendChild(frenos);
    opcion.appendChild(labfrenos);
    opcion.appendChild(llantas);
    opcion.appendChild(labllantas);

}

function ocultarmantenimietos(){
    var aceite=document.getElementById('aceite');
    aceite.remove();
    
    
    var laceite=document.getElementById('laceite');
    laceite.remove();

    var frenos=document.getElementById('frenos');
    frenos.remove();
    var lfrenos=document.getElementById('lfrenos');
    lfrenos.remove();

    var llantas=document.getElementById('llantas');
    llantas.remove();
    var Llantas=document.getElementById('Llantas');
    Llantas.remove();

}