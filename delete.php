<?php
include 'conexion.php';
	class consultas{
        private $lista;

        public function __construct(){
            $this->db=conexion::con();
            $this->lista=array();
        }

        public function eliminarClienteBD($id){
            $del_cliente = $this->db->query("DELETE FROM dato_gen WHERE id=$id");

            echo'<script type="text/javascript">
                             alert("¡Eliminado!");
                             window.location.href="../views/cliente.php";
                             </script>';
        }
        public function eliminarCliente_prospectoBD($id){
            $del_cliente = $this->db->query("DELETE FROM dato_gen WHERE id=$id");

            echo'<script type="text/javascript">
                             alert("¡Eliminado!");
                             window.location.href="../views/index.php";
                             </script>';
        }

        public function addPasswords($correo, $token){
            //.$correo"','".$token."', '" .$codigo."')";
            $c = "'". $correo."','".$token."'";
            $pass = $this->db->query("INSERT INTO  passwords (correo, token) VALUES(".$c.")");

           /* echo'<script type="text/javascript">
                             alert("Accede a tu correo electrónico");
                             window.location.href="../views/enviarEmail.php";
                             </script>';*/
        }
        public function buscarToken($token){
            $pass = $this->db->query("SELECT * FROM  passwords WHERE token = '".$token."'");

            $fila=$pass->fetch_assoc();
            if(isset($fila['token'])){
                return $fila["fecha"];
            }
           return "";
        }

        public function buscarUsuario($correo){
            $pass = $this->db->query("SELECT * FROM  usuarios WHERE correo = '".$correo."'");

            $fila=$pass->fetch_assoc();
            if(isset($fila['correo'])){
                return $fila["id"];
            }
           return "";
        }


        public function updatePassword($id,$password){
            $pass = $this->db->query("UPDATE usuarios SET contrasena = '$password' WHERE id = '$id'");

        }
    
        public function eliminarToken($token){
            $del_cliente = $this->db->query("DELETE FROM passwords WHERE token='$token'");
            echo $del_cliente;

        }
        

    }
?>