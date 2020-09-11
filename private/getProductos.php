<?php
    include("conectar.php");
    $respuesta= new stdClass();

    $prodts=[];
    $i=0;
    $sql="selec * from productos where Disponible=1";
    $result=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_array($result)){
        $obj=new stdClass();
        $obj->nomP=$row['NomP'];
        $obj->desP=$row['DesP'];
        $obj->precioP=$row['PrecioP'];
        $obj->rutP=$row['RutaP'];
        $prodts[$i]=$obj;
        $i++;
    }
    $respuesta->data=$prodts;
    mysqli_close($con);
    header('Content-Type: application/json');
    echo json_encode($respuesta);
?>