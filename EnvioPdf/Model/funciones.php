<?php   
include 'conexion2.php';

function insertar_datos($correo){        
    global $conexión;
    $insertar = "INSERT INTO correos_informacion (correo) VALUES ('$correo')";
    $ejecutar = mysqli_query($conexión,$insertar);
    return $ejecutar;
    
}
class Correo{
    private $db;
    private $lista;

    public function __construct()
    {
        $this->db = conexion::con();
        $this->lista = array();
    }

    public function existeCorreo($email){
        $consulta = $this->db->query("SELECT * FROM correos_informacion WHERE correo='$email'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function insertar_datos($email){
        $sql = "INSERT INTO correos_informacion (correo) VALUES ('$email')";
        $this->run($sql); //Devuelve true
    }

    private function run($sql){
        $this->db->begin_transaction(); //Inicia una transacción (usar para insercion, actualizacion, y eliminacion)
        $transaction = $this->db->query($sql); //Realiza una consulta a la base de datos

        if ($transaction === TRUE) {
            $this->db->commit();
            return true;
        } else {
            $this->db->rollback();
            return $this->db->error;
        }
    }


}


?>