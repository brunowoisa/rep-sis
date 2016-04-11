<?php
class Login_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function verifica_adm_existente(){
                $total = $this->db->count_all('administrador');
                if($total == 0){
                        //inclui o adm padrão
                        $data = array(
                           'nome' => 'Administrador Padrão' ,
                           'login' => md5("admin") ,
                           'senha' => md5("admin")
                        );

                        $this->db->insert('administrador', $data); 
                }
        }

        public function login($form){
                $query = $this->db->get_where('administrador', array('login' => md5($form['user']), 'senha' => md5($form['password'])));
                $query = current($query->result());
                if($query){
                        //Login efetuado com sucesso
                        $this->session->set_userdata('user', (object) $query );
                        header( 'location:'.base_url().'home' );

                }else{
                        return "ERRO";
                }
        }

        public function verifica(){
                $user = $this->session->userdata('user');
                try {
                        $query = $this->db->get_where('administrador', array('login' => $user->login, 'senha' => $user->senha));
                        $query = current($query->result());
                        if($query){
                                //Login efetuado com sucesso
                                return true;
                        }else{
                                //Logof
                                $this->logof();
                        }
                } catch (Exception $e) {
                        //Logof
                        $this->logof();
                }
        }

        public function logof(){
            $this->session->sess_destroy();
            header('location:'.base_url()); 
        }
}
