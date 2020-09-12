<?php
    include('conectar.php');
    $respuesta= new stdClass();

    $prodts=[];
    $i=0;
    $sql="SELECT * FROM productos";
    $result=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_array($result)){
        $obj=new stdClass();
        $obj->NomP=$row['NomP'];
        $obj->DesP=$row['DesP'];
        $obj->PrecioP=$row['PrecioP'];
        $obj->RutaP=$row['RutaP'];
        $prodts[$i]=$obj;
        $i++;
    }
    $respuesta->prodts=$prodts;
    
    mysqli_close($con);
    header('Content-Type: application/json');
    echo json_encode($respuesta);
?>