<?php

include 'conexion.php';
class consul
{
    private $db;
    private $lista;
    private $prov;
    private $tbl;

    public function __construct()
    {
        $this->db = conexion::con();
        $this->lista = array();
    }
    
    public function delete_cliente_dato($id)
    {

        $cat_tcolaboradores = $this->db->query("DELETE FROM dato_gen WHERE correo='$id'");

        echo '<script type="text/javascript">
        alert("Cliente eliminado correctamente");
        window.history.go(-1);
        </script>';
    }
    public function datos_cons($id_dat)
    {
        $cols = $this->db->query("SELECT d.ID, d.Nombre, d.telefono, d.correo, d.fecha_contacto, s.nom_seguimiento, d.fecha_seguimiento, t.nom_tarea, e.nom_status, t.id_tarea, s.id_seguimiento, e.id_status, d.fuente_contacto, d.comentario from dato_gen as d, seguimiento as s, tarea as t, estatus as e where d.seguimiento=s.nom_seguimiento AND t.nom_tarea=d.tarea and e.nom_status=d.statuss AND d.ID=$id_dat");
        while ($filas = $cols->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
    //seguimento 
    public function seguimiento()
    {
        $rol = $this->db->query("SELECT * FROM seguimiento");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
    //buscar tarea
    public function tarea()
    {
        $rol = $this->db->query("SELECT * FROM tarea");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
//estatus clliente
    public function status_cliente()
    {
        $rol = $this->db->query("SELECT * FROM estatus");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
    public function clave_lada_cliente()
    {
        $rol = $this->db->query("SELECT id_lada, nombre_estado as ne, clave_lada FROM clave_lada");
        while ($filas = $rol->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function mod_cliente($id_datoc,$nomc,$ap_patc,$ap_matc,$telc,$corroec,$fcontacc,$fsegc,$segec,$comentc,$tarc,$stac,$fconc,$idclac)
    {
        $cat_colaboradores = $this->db->query("UPDATE datos SET nombre='$nomc',ape_paterno='$ap_patc',ape_materno='$ap_matc',telefono='$telc',email='$corroec',fecha_contacto='$fcontacc',fecha_seguimiento='$fsegc',seguimiento=$segec,comentario='$comentc',tarea=$tarc,statu=$stac,fuente_contacto='$fconc',id_clavelad=$idclac WHERE id_datos='$id_datoc'");
        echo '<script type="text/javascript">
    alert("modificación exitosa");
    window.history.go(-2);
    </script>';
    }
   
    public function cat_add_cliente($nombrecli,$ap_parclien,$ap_matclien,$correoclien,$clave_lada_clien,$lada_clien,$tele_clien,$fcontaclient,$fsegclient,$id_Sectar_clien,$id_tar_clien,$id_stat_client,$fun_cont_clien,$coment_clien)
    {
        $cat_cliente_img = $this->db->query("INSERT INTO datos (id_datos, nombre, ape_paterno, ape_materno, telefono, email, fecha_contacto, fecha_seguimiento, seguimiento, comentario, tarea, statu, fuente_contacto, id_clavelada) VALUES (null,'$nombrecli','$ap_parclien','$ap_matclien','$tele_clien','$correoclien','$fcontaclient','$fsegclient',$id_Sectar_clien,'$coment_clien',$id_tar_clien,id_stat_client,'$fun_cont_clien',$clave_lada_clien)");
      
        echo '<script type="text/javascript">
    alert("Cliente agregado exitosamente");
    window.location.href="../index.php";
    </script>';
    }

    public function existeCuenta($cuenta)
    {
        $consulta = $this->db->query("SELECT id_datos FROM datos WHERE id_datos='$cuenta'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }

    public function login($usuario, $contrasena)
    {
        $consulta = $this->db->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }


    public function existeUsuario($email){
        $consulta = $this->db->query("SELECT * FROM usuarios WHERE usuario='$email'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }
    public function existeCurp($curp){
        $consulta = $this->db->query("SELECT * FROM usuarios WHERE curp='$curp'");
        while ($filas = $consulta->fetch_assoc()) {
            $this->lista[] = $filas;
        }
        return $this->lista;
    }


    //crear cuenta
    public function crear_cuenta($name,$apellidoP,$apellidoM,$email,$curp,$tel,$pass){
        $sql = "INSERT INTO usuarios (usuario,contrasena,nombre,apellido_paterno,apellido_materno,curp,telefono) VALUES('$email','$pass','$name','$apellidoP','$apellidoM','$curp','$tel')";      
        $this->run($sql);
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

    public function genera_contrasena(){
        $mayusculas = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z' );
        $minusculas = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        $numeros = array(1,2,3,4,5,6,7,8,9,0);
        $caracter = array('+','-','[',']','*','~','_','#',':','?');

        $resultado = array_merge($mayusculas,$minusculas,$numeros,$caracter);
        $password = "";
        for ($i=0; $i < 10; $i++) { 
            $password .= $resultado[rand(0,count($resultado))];
        }
        return $password;
    }

  //buscar cliente por id
    public function clientes_id($id){
        $consulta=$this->db->query("SELECT * FROM cliente WHERE correo='$id'");
        while($filas=$consulta->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
    }

    public function listado_cliente(){
        $consulta=$this->db->query("SELECT * FROM cliente ");
        while($filas=$consulta->fetch_assoc()){
            $this->lista[]=$filas;
        }
        return $this->lista;
    }

  //buscar producto por id
  public function selec_producto($prod){
    $consulta=$this->db->query("SELECT * FROM producto WHERE nombre='$prod'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}

     //buscar historial por id y producto
  public function historial($id, $prod){
    $consulta=$this->db->query("SELECT h.producto, s.icono_seg, h.seguimineto, h.fechasegui, t.icono, h.tarea, h.fechatarea, h.comentario FROM historial as h, seguimiento as s, tarea as t WHERE  h.seguimineto=s.nom_seguimiento AND t.nom_tarea=h.tarea AND correo='$id' AND producto='$prod'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
 //buscar historial prospectp por id y producto
 public function historial_prospecto($id){
    $consulta=$this->db->query("SELECT s.icono_seg, s.icono_seg, h.seguimineto, h.fechasegui, t.icono, h.tarea, h.fechatarea, h.comentario, e.color_status FROM historial as h, seguimiento as s, tarea as t, estatus as e WHERE h.seguimineto=s.nom_seguimiento AND t.nom_tarea=h.tarea AND e.nom_status=h.estatus_histo AND correo='$id'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}

//buscar datos por correo y producto
public function datos_genes($id){
    $consulta=$this->db->query("SELECT cliente.nom_cliente, cliente.apellido, cliente.correo, cliente.celular, cliente.fuente_prospecto, producto.nombre, dato_gen.id, dato_gen.seguimiento, dato_gen.tarea, dato_gen.statuss, dato_gen.fecha_contacto, dato_gen.fecha_seguimiento, dato_gen.comentario, dato_gen.status_cliente,dato_gen.dato_gene, dato_gen.fuente_contacto FROM dato_gen INNER JOIN seguimiento ON seguimiento.nom_seguimiento= dato_gen.seguimiento INNER JOIN tarea ON tarea.nom_tarea=dato_gen.tarea INNER JOIN estatus ON estatus.nom_status=dato_gen.statuss INNER JOIN producto ON producto.nombre=dato_gen.productos INNER JOIN cliente ON cliente.correo=dato_gen.correoda WHERE dato_gen.id='$id'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
public function datos_genes2($id){
    $consulta=$this->db->query("SELECT DISTINCT cliente.nom_cliente, cliente.apellido, cliente.correo, cliente.celular, cliente.fuente_prospecto, dato_gen.id,dato_gen.seguimiento, dato_gen.tarea, dato_gen.statuss, dato_gen.fecha_contacto, dato_gen.fecha_seguimiento, dato_gen.comentario, dato_gen.status_cliente,dato_gen.dato_gene, dato_gen.fuente_contacto, dato_gen.hora_seguimeinto, dato_gen.hora_tarea FROM dato_gen INNER JOIN seguimiento ON seguimiento.nom_seguimiento= dato_gen.seguimiento INNER JOIN tarea ON tarea.nom_tarea=dato_gen.tarea INNER JOIN estatus ON estatus.nom_status=dato_gen.statuss INNER JOIN cliente ON cliente.correo=dato_gen.correoda WHERE dato_gen.id='$id'");
    while($filas=$consulta->fetch_assoc()){
        $this->lista[]=$filas;
    }
    return $this->lista;
}
//insertar cliente-prospecto
    public function insertar($titulo,$nombre,$apellido,$correo,$f_nacimiento,$genero,$direccion,$n_calle,$c_p,$pais,$region,$estado,$ciudad,$localidad,$selec_lada1,$n_casa,$selec_lada2,$celular,$fax,$selec_lada3,$otro_num,$empresa,$departamento,$agrupacion,$f_prospecto,$estatus_prospecto,$idioma,$comunicacion,$fb,$yt,$tw,$ln,$insta)
    {
        $insert = $this->db->query("INSERT INTO cliente(id_cliente, titulo, nom_cliente, apellido, empresa, departemento, fecha_nacimiento, genero, correo, telefono_casa, celular, fax, otro_felefono, comunicacion_preferido, facebook, youtube, twitter, linkedln, instagram, idioma_preferido, fuente_prospecto, estatus_prospecto, num_calle, direccion, codigo_postal, pais, region, estado, ciudad, localidad, agrupamiento) 
        VALUES (null,'$titulo','$nombre','$apellido','$empresa','$departamento','$f_nacimiento','$genero','$correo','$selec_lada1.$n_casa','$selec_lada2.$celular','$fax','$selec_lada3.$otro_num','$comunicacion','$fb','$yt','$tw','$ln','$insta','$idioma','$f_prospecto','$estatus_prospecto','$n_calle','$direccion','$c_p','$pais','$region','$estado','$ciudad','$localidad','$agrupacion')");
    }

}
