function calculartotal() {

    //funcion que calcula el incremental de un valor y se coloca en otra casilla

    document.getElementById('capa_mensaje').innerHTML="";
    
    var base=document.getElementById('peajes').value;
    var base=document.getElementById('combustible').value;
    var base=document.getElementById('conductor').value;
    var base=document.getElementById('encarrosada').value;
    var base=document.getElementById('desancarrosada').value;
    var base=document.getElementById('llantas').value;
    var base=document.getElementById('parqueadero').value;
    var base=document.getElementById('viaticos').value;
    var base=document.getElementById('comision').value;
    var base=document.getElementById('lavada').value;
    var base=document.getElementById('cargue').value;
    var base=document.getElementById('descargue').value;
    var base=document.getElementById('otros').value;

    var sumar=document.getElementById('suma').value;

   // var descuento=document.getElementById('descuento').value;
    
    // validar que base sea mayor que cero. 
    // si no lo cumple, colocar mensaje y que el mouse se ubique en la casilla valor
    if (parseInt(base)<=0) {
        mensaje="<span class='btn btn-danger' >El valor debe ser mayor que cero</span>";
        document.getElementById('peajes').focus();
        document.getElementById('peajes').value="";
        document.getElementById('capa_mensaje').innerHTML=mensaje;
        return; //lo saca de la funcion
    }
    // validar que el incremental no sea menor que cero y tampoco mayor     que 100
    if (parseInt(sumar)<=0 || parseInt(sumar)>100000000 ) {
        mensaje="<span class='btn btn-danger' >El valor debe estar entre 0 y 100000000</span>";
        document.getElementById('suma').focus();
        document.getElementById('suma').value="";
        document.getElementById('capa_mensaje').innerHTML=mensaje;
        return; //lo saca de la funcion
    }
    // convertir los datos a numeros usando parseInt
    var total=parseInt(base)+(parseInt(base)+parseInt(sumar));
    // agregar el calculo del valor de descuento y ese valor restarlo al total
    
    //var valordescuento=(parseInt(descuento)+total);
    total = peajes+combustible+conductor+encarrosada+desancarrosada+llantas+parqueadero+viaticos+comision+lavada+cargue+descargue+otros;



    // para ver como esta el resultado usemos console.log
    console.log("El resultado es "+total);
    // asignar el valor a la casilla total
    document.getElementById('total').value=total;
    // asignar el valor de descuento
    //document.getElementById('valordescuento').value=valordescuento;

}