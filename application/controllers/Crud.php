<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load Dependencies
    }

    public function index()
    {
        $data['content'] = $this->db->get('kritik');
        $this->load->view('v_admin', $data, FALSE);
    }

    public function add()
    {
         $this->load->view('crud/add');
    }
        public function action_add()
    {
         $data = array(
            'nama' =>$this->input->post('Nama'),
            'email' =>$this->input->post('Email'),
            'message' =>$this->input->post('Message')

         );

         $this-> db ->insert('kritik',$data);

         redirect('crud','refresh');
    }

    public function update ($id = NULL)
    {

    }
    public function delete($id){
    $id = array('id' => $id);
    $this->load->model('mymodel');
    $this->mymodel->Delete('kritik', $id);
    redirect('crud','refresh');
    }

}
