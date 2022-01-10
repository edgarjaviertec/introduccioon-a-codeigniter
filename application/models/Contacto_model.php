<?php

class Contacto_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_todos()
	{
		$consulta = $this->db->get('mis_contactos');
		return $consulta->result();
	}

	public function get_by_id($id)
	{
		$this->db->select('*');
		$this->db->from("mis_contactos");
		$this->db->where("con_id", $id);
		$consulta = $this->db->get();
		return $consulta->row();
	}


	public function nuevo_contacto($contacto)
	{
		$this->db->insert("mis_contactos", $contacto);
		return $this->db->affected_rows();
	}


	public function actualizar_contacto($contacto)
	{
		$this->db->where("con_id", $contacto["con_id"]);
		$this->db->update("mis_contactos", $contacto);
		return $this->db->affected_rows();
	}


	public function eliminar_contacto($id)
	{
		$this->db->where("con_id", $id);
		$this->db->delete("mis_contactos");
		return $this->db->affected_rows();
	}


}

/* Fin archivo Contacto_model.php */
