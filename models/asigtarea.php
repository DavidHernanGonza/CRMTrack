<?php 
include 'liga_BD.php';


if(!empty($_POST)){
    if($_POST['action']=='infoProducto'){
        $coreous = $_POST['correous'];
        $query=mysqli_query($link,"SELECT nom_cliente, apellido, celular,correo  FROM cliente WHERE correo='$coreous'");
        mysqli_close($link);
        $result= mysqli_num_rows($query);
      
       if($result>0){
           $data=mysqli_fetch_assoc($query);
           echo json_encode($data, JSON_UNESCAPED_UNICODE);
           exit;
       }
       echo 'error';
       exit;
    }
}
exit;
?>