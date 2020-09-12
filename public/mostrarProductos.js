const ajax= {
    cargarArchivo: function(ruta){
        const peticion= new XMLHttpRequest();

        peticion.onreadystatechange= function(){
            
            if(peticion.readyState==this.DONE){
                if(peticion.status==200){
                    console.log(peticion.responseText);
                }else if(peticion.status==400){
                    console.log("Eror");
                }else {
                    console.log("Inesperado")
                }
            }if(peticion.readyState==this.LOADING){
                console.log("cargando...")
            }
        };
        peticion.open("GET",ruta,true);
        peticion.send();
    }
}

ajax.cargarArchivo("../private/getProductos.php");

