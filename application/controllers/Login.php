<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$data['base_url'] = base_url();
		$this->load->model('Login_model');

		$this->Login_model->verifica_adm_existente();
		$data ['result'] = '';
    
		// Foi submetido um form para a propia pagina
    $form = $this->input->post();
    if( !empty($form) )
    {
      $data['result'] = $this->Login_model->login($form);     

      // Só irá ter mensagem, caso haja algum erro no login (senha, etc)
      // Caso contrario a model redirecionara o usuario para a area dele
    }
		
		$this->load->view('login', $data);
	}
}
