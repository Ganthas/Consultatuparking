<?php
class Usuario extends CI_Model
{

	function __construct(){
		parent::__construct();
	}

	public function obtener_por_codigo($codigo){
		return $this->obtener("usu_codigo = $codigo");
	}

	public function actualizarContrasena($where, $datos){
		return $this->db->update('usuarios',$datos,$where);
	}

	public function actualizarDatos($where, $datos){
		return $this->db->update('usuarios',$datos,$where);
	}

	public function consultarContrasena($contrasena,$codigo){
		$existe=$this->obtener("usu_contrasena = '$contrasena' and usu_codigo = '$codigo'");
		if(!$existe) return false;
		else return true;
	}

	public function login($email,$contrasena){
		$contrasena = md5($contrasena);
		return $this->obtener("usu_email = '$email' and usu_contrasena = '$contrasena'");
	}

	public function obtener($where){

		$this->db->where($where);
		$sql = $this->db->get("usuarios");
		$aux = $sql->row();
		if($aux){
			$obj = new stdClass();
			$obj->codigo = $aux->usu_codigo;
			$obj->nombre = $aux->usu_nombres;
			$obj->apellido = $aux->usu_apellidos;
			$obj->email = $aux->usu_email;
			$obj->perfil = $aux->per_codigo;
			$obj->rut = $aux->usu_rut;
			$sql->free_result();
			return $obj;
		}
		$sql->free_result();
		return false;
	}

	public function actualizarIntentosFallidos($where)
	{
		$this->db->where($where);
		$sql = $this->db->get("usuarios");
		$aux = $sql->row();

		if($aux){
			$intentos = $aux->usu_intentos_fallidos;
			$sql->free_result();
			$intentos++;
		}
		if($intentos>=3)$visibilidad=0;
		else $visibilidad=1;;
		$data = array(
				'usu_visible'=>$visibilidad,
        'usu_intentos_fallidos' => $intentos
    );
		$this->db->where($where);
		$this->db->update('usuarios', $data);
		return $intentos;
	}


}
