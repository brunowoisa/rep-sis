<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// Verificando Login
		$this->load->model('Login_model');
		$this->Login_model->verifica();

		// Resgatando os dados do Usuário
		$user = $this->session->userdata('user');

		$data = array();
		$data['user'] = $user->nome;
		$data['base_url'] = base_url();

		// // Carregando model Empresa
		// $this->load->model('Empresa_model');

		// // Foi submetido um form para a propia pagina
  	//   $form = $this->input->post();
	  //   if( !empty($form) )
	  //   {
	  //     $data['result'] = $this->Empresa_model->editar($form);     
	  //   }

		// // Buscando os dados da Empresa caso existam
		// $data['empresa'] = $this->Empresa_model->get_empresa();

		// Carregando os Views
		$this->load->view('parte1', $data);
		$this->load->view('funcionarios', $data);
		$this->load->view('parte2', $data);
	}

	public function cadastrar()
	{
		// Verificando Login
		$this->load->model('Login_model');
		$this->Login_model->verifica();

		// Resgatando os dados do Usuário
		$user = $this->session->userdata('user');

		$data = array();
		$data['user'] = $user->nome;
		$data['base_url'] = base_url();

		// // Carregando model Empresa
		// $this->load->model('Empresa_model');

		// // Foi submetido um form para a propia pagina
  	//   $form = $this->input->post();
	  //   if( !empty($form) )
	  //   {
	  //     $data['result'] = $this->Empresa_model->editar($form);     
	  //   }

		// // Buscando os dados da Empresa caso existam
		// $data['empresa'] = $this->Empresa_model->get_empresa();

		// Carregando os Views
		$this->load->view('parte1', $data);
		$this->load->view('funcionarios_cadastrar', $data);
		$this->load->view('parte2', $data);
	}
}
