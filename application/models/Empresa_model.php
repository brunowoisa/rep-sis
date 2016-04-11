<?php
class Empresa_model extends CI_Model {

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function get_empresa(){
        $query = $this->db->get_where('empresa', array('id' => 1));
        $query = current($query->result());
        if($query){
            return $query;
        }else{
            return false;
        }

    }

    public function editar($form){
        // Verifica se já existe o registro de empresa no banco de dados
        $total = $this->db->count_all('empresa');
        if($total == 0){
            //inclui o registrp de empresa
            $data = array('id' => 1);

            $this->db->insert('empresa', $data); 
        }

        //Atualizando com os dados do formulário
        $data = array(
           'razao_social'   => $form['razao'],
           'nome_fantasia'  => $form['fantasia'],
           'cnpj'           => $form['cnpj'],
           'ie'             => $form['ie'],
           'im'             => $form['im'],
           'endereco'       => $form['endereco'],
           'bairro'         => $form['bairro'],
           'cidade'         => $form['cidade'],
           'cep'            => $form['cep'],
           'uf'             => $form['uf'],
           'telefone'       => $form['telefone'],
           'site'           => $form['site']
        );

        $this->db->where('id', 1);
        $this->db->update('empresa', $data); 

        if($this->db->affected_rows()){
            return 'success';
        }

        return 'danger';
    }
}
