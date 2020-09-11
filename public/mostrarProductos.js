const ajax= {
    cargarArchivo: function(ruta){
        const peticion= new XMLHttpRequest();

        peticion.onreadystatechange= function(){
            
            if(peticion.readyState==XMLHttpRequest.DONE){
                if(peticion==200){
                    console.log(JSON.parse(peticion.responseText));
                }else if(peticion.status==400){
                    console.log("Eror");
                }else {
                    console.log("Inesperado")
                }
            }

            peticion.open("GET",ruta,true);
            peticion.send();
        };
    }
}

document.addEventListener("DOMContentLoaded", function(){
    ajax.cargarArchivo("../private/getProductos.php");
},false);