<?php
include 'conexion.php';
class consul{
    private $db;//database
    private $lista;
    private $prov;
    private $tbl;

    public function __construct(){
        $this->db=conexion::con();
        $this->lista=array();
    }

    public function lista_datos(){
        $consulta=$this->db->query("SELECT d.id_datos, d.nombre, d.ape_paterno, d.ape_materno, d.telefono, d.email, d.fecha_contacto, d.fecha_seguimiento, t.nom_tarea, t.icono, d.comentario, t.nom_tarea, s.nom_status, s.color_status, d.fuente_contacto, cl.clave_lada FROM datos d, statuss s, tareas t , clave_lada cl WHERE d.id_datos=d.id_datos AND d.tarea=t.id AND d.statu=s.codigo_status and cl.id_lada=d.id_clavelada AND d.statu_seg<=6");
        while($filas=$consulta->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
    }

    public function lista_datos2(){
        $consulta=$this->db->query("SELECT cliente.nom_cliente, cliente.apellido, cliente.correo, cliente.celular, cliente.fuente_prospecto, seguimiento.id_seguimiento,seguimiento.icono_seg , tarea.id_tarea, tarea.icono, estatus.color_status, producto.nombre, dato_gen.id,dato_gen.seguimiento, dato_gen.tarea, dato_gen.statuss, dato_gen.fecha_contacto, dato_gen.fecha_seguimiento FROM dato_gen INNER JOIN seguimiento ON seguimiento.nom_seguimiento= dato_gen.seguimiento INNER JOIN tarea ON tarea.nom_tarea=dato_gen.tarea INNER JOIN estatus ON estatus.nom_status=dato_gen.statuss INNER JOIN producto ON producto.nombre=dato_gen.productos INNER JOIN cliente ON cliente.correo=dato_gen.correoda WHERE dato_gen.dato_gene LIKE '%Ya compró%' OR dato_gen.dato_gene LIKE '%Ya compro%' OR dato_gen.dato_gene LIKE '%compro%' OR dato_gen.dato_gene LIKE '%compró%'");
        while($filas=$consulta->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
    }
   
    public function lista_todos_datos(){
        $consulta=$this->db->query("SELECT DISTINCT d.fecha_contacto, d.fecha_seguimiento, d.comentario, d.seguimiento, s.icono_seg,d.id,d.tarea, t.icono, d.statuss, d.hora_seguimeinto,d.hora_tarea, d.fuente_contacto, c.nom_cliente, c.apellido, c.correo, c.celular, e.color_status, s.id_seguimiento, t.id_tarea FROM dato_gen as d, cliente as c, seguimiento as s, tarea as t, estatus as e WHERE dato_gene not LIKE '%ya compró%' AND not dato_gene LIKE '%Ya compró%' AND not dato_gene LIKE '%compró%' AND not dato_gene LIKE '%compro%' AND c.correo=d.correoda AND s.nom_seguimiento=d.seguimiento AND t.nom_tarea=d.tarea AND e.nom_status=d.statuss");
        while($filas=$consulta->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
    }
    

    public function seguimiento()
    {
        $rol = $this->db->query("SELECT * FROM seguimiento");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
    public function tarea()
    {
        $rol = $this->db->query("SELECT * FROM tarea");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function status_cliente()
    {
        $rol = $this->db->query("SELECT * FROM estatus");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function producto()
    {
        $rol = $this->db->query("SELECT * FROM producto");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
    public function clientes()
    {
        $rol = $this->db->query("SELECT * FROM cliente");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function lada()
    {
        $rol = $this->db->query("SELECT * FROM lada");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
    public function sexo()
    {
        $rol = $this->db->query("SELECT * FROM genero_sexo");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

}

?>