<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url' );
        $this->load->helper('form' );
        $this->load->helper('array' );
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('table');
        $this->load->model('Crud_model');
    }

    public function codeigniter (){
        $this->load->model('codeigniter');
    }

    public function index(){
        $ws_users = $this->Crud_model->get_select()->result();
        
        $site = array(
            'head'          =>  'includes/head',
            'header'        =>  'includes/header',
            'main'          =>  'pages/select' ,
            'aside'         =>  'includes/aside',
            'footer'        =>  'includes/footer',
            'scripts'        => 'includes/scripts',
            'title_head'    =>  'Lista de Usuários',
            'ws_users'      =>   $ws_users
        );
        $this->load->view('crud', $site);
    }

    public function create() {
        /** @message para msg personalizadas de validacao */

        // Validação de dados
        $this->form_validation->set_rules('name', 'NOME', 'trim|required|max_length[40]|ucwords');
        $this->form_validation->set_rules('lastname', 'SOBRENOME', 'trim|required|max_length[50]|ucwords');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[100]|valid_email|is_unique[ws_users.email]');
        $this->form_validation->set_rules('password', 'SENHA', 'trim|required|exact_length[4]');
        $this->form_validation->set_rules('password2', 'CONFIRMA SENHA', 'trim|required|exact_length[4]|matches[password]');
        $this->form_validation->set_rules('level', 'NÍVEL', 'trim|required|numeric|exact_length[1]');
         
        if($this->form_validation->run() == true):
            // echo 'validação ok, inserir no BD';
            $validation = 'validação ok, inserir no BD';
            $data = elements(array('name','lastname','email','password', 'registration', 'lastupdate', 'level'), $this->input->post());
            
            // tratamentos de dados antes de enviar para DB
            $data['password'] = md5($data['password']);
            $data['registration'] = date('Y-m-d H:i:s');
            $data['lastupdate'] = date('Y-m-d H:i:s');

            // chamar método do_insert
            $this->Crud_model->do_insert($data);
        else:
           // $validation = 'Erros na validation';
        endif;

        $site = array(
            'head'          => 'includes/head',
            'header'        => 'includes/header',
            'main'          => 'pages/create' ,
            'aside'         => 'includes/aside',
            'footer'        => 'includes/footer',
            'scripts'        => 'includes/scripts',
            'title_head'    => 'Criando Novo Cadastro'
        );
        $this->load->view('crud', $site);
    }

    public function update() {
        if(!$this->uri->segment(3)):
            unset($this->session->userdata);
            redirect('crud/select');
        else:
            $ws_users = '';
            //  Se existir o $_POST atualizar
            if($this->input->post() ):
                // 3 -Validação de dados
                $this->form_validation->set_rules('name', 'NOME', 'trim|required|max_length[40]|ucwords');
                $this->form_validation->set_rules('lastname', 'SOBRENOME', 'trim|required|max_length[50]|ucwords');
                $this->form_validation->set_rules('level', 'NÍVEL', 'trim|required|numeric|exact_length[1]');

                if($this->form_validation->run() == true):
                    //  Enviar dados atualizados
                    $data = elements(array('name','lastname','lastupdate','level'), $this->input->post());
                    $this->Crud_model->update( 'ws_users', $data, array( 'id' => $this->uri->segment(3)));

                    //  Recupera os dados atuallizados da tabela
                    $ws_users = $this->Crud_model->get_where('ws_users', array('id'=> $this->uri->segment(3)) );

                    //  load view crud/update
                    $site = array(
                        'head'          => 'includes/head',
                        'header'        => 'includes/header',
                        'main'          => 'pages/update',
                        'aside'         => 'includes/aside',
                        'footer'        => 'includes/footer',
                        'scripts'        => 'includes/scripts',
                        'title_head'    => 'Atualizando Cadastro',
                        'ws_users'      =>  $ws_users
                    );
                    $this->load->view('crud', $site);
                else:
                    unset($this->session->userdata);
                    ///  Recuperar os dados da tabela sem atualização

                    $ws_users = $this->Crud_model->get_where('ws_users', array('id'=> $this->uri->segment(3)) );

                    // se não existir dados na tabela redireciona para select
                    if($ws_users->num_rows <= 0):
                        unset($this->session->userdata);
                        redirect('crud/select');
                    else:
                        //  load view crud/update
                        $site = array(
                            'head'          => 'includes/head',
                            'header'        => 'includes/header',
                            'main'          => 'pages/update',
                            'aside'         => 'includes/aside',
                            'footer'        => 'includes/footer',
                            'scripts'       => 'includes/scripts',
                            'title_head'    => 'Titulo Principal'
                        );
                        $this->load->view('crud', $site);
                    endif;

                endif;
            else:
                // caso não exista a atualização
                unset($this->session->userdata);

                ///  Recuperar os dados da tabela sem atualização
                $ws_users = $this->Crud_model->get_where('ws_users', array('id'=> $this->uri->segment(3)) );

                // se não existir dados na tabela redireciona para select
                if($ws_users->num_rows <= 0):
                    unset($this->session->userdata);
                    redirect('crud/select');
                else:
                    //  load view crud/update
                    $site = array(
                        'head'          => 'includes/head',
                        'header'        => 'includes/header',
                        'main'          => 'pages/update',
                        'aside'         => 'includes/aside',
                        'footer'        => 'includes/footer',
                        'scripts'        => 'includes/scripts',
                        'title_head'    => 'Titulo Principal',
                        'ws_users'      =>  $ws_users
                    );
                    $this->load->view('crud', $site);
                endif;
            endif;
        endif;
    }

    public function delete() {
        if($this->uri->segment(3)):
            $ws_users = $this->Crud_model->delete('ws_users', array('id'=>$this->uri->segment(3)));
            if($ws_users):
                redirect('crud/index');
            endif;
        else:
            unset($this->session->userdata);
            redirect('crud/select');
        endif;
    }

}// end class