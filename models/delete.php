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


        

    }
?>