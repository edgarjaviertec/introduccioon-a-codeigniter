<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contactos extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper('form');
		$this->load->library("form_validation");
		$this->load->model("contacto_model");
	}

	function reglas_formulario()
	{
		$this->form_validation->set_rules("con_nombre", "Nombre", "trim|required");
		$this->form_validation->set_rules("con_email", "Email", "required|valid_email");
		$this->form_validation->set_rules("con_telefono", "Teléfono", "trim|required");
		$this->form_validation->set_rules("con_edad", "Edad", "trim|required");
		$this->form_validation->set_rules("con_status", "Status", "trim|required");
	}

	public function index()
	{
		$datos["contactos"] = $this->contacto_model->get_todos();
		$this->load->view("lista_contactos_view", $datos);
	}

	public function agregar()
	{
		$this->reglas_formulario();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("frm_agregar_contacto_view");
		} else {
			$filas_afectadas = $this->contacto_model->nuevo_contacto($this->input->post());
			if ($filas_afectadas > 0) {
				redirect('/contactos');
			}
		}
	}

	public function editar($id)
	{
		$contacto = $this->contacto_model->get_by_id($id);
		$datos["contacto"] = $contacto;
		if (!$contacto) {
			show_404();
		}
		$this->reglas_formulario();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view("frm_editar_contacto_view", $datos);
		} else {
			$filas_afectadas = $this->contacto_model->actualizar_contacto($this->input->post());
			if ($filas_afectadas > 0) {
				redirect('/contactos');
			}
		}
	}


	public function eliminar($id)
	{
		$contacto = $this->contacto_model->get_by_id($id);
		$datos["contacto"] = $contacto;
		if (!$contacto) {
			show_404();
		}
		$this->load->view("frm_eliminar_contacto_view", $datos);
		if ($this->input->post('con_id')) {
			$filas_afectadas = $this->contacto_model->eliminar_contacto($this->input->post('con_id'));
			if ($filas_afectadas > 0) {
				redirect('/contactos');
			}
		}
	}

}

/* Fin archivo Contactos.php */
