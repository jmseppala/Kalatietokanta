<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

function __construct()

{

parent::__construct();

$this->load->helper('url');

$this->load->model('users_model');

}

public function index()

{

$data['user_list'] = $this->users_model->get_all_users();

$this->load->view('show_users', $data);

}


public function add_form()

{

$this->load->view('insert');

}

public function insert_new_user()

{

$udata['nimi'] = $this->input->post('nimi');

$udata['kala'] = $this->input->post('kala');

$udata['paino'] = $this->input->post('paino');

$udata['pvm'] = $this->input->post('pvm');

$udata['paikka'] = $this->input->post('paikka');

$udata['viehe'] = $this->input->post('viehe');

$udata['muuta'] = $this->input->post('muuta');

$res = $this->users_model->insert_users_to_db($udata);

if($res){

header('location:'.base_url()."index.php/users/".$this->index());

}

}

public function edit(){
	
 $id = $this->uri->segment(3);
        $data['user'] = $this->users_model->getById($id);
       
        $this->load->view('edit', $data);
      
 }
 
public function delete($id)

{

$this->users_model->delete_a_user($id);

$this->index();

}

public function update()

{

$mdata['nimi']=$_POST['nimi'];

$mdata['kala']=$_POST['kala'];

$mdata['paino']=$_POST['paino'];

$mdata['pvm']=$_POST['pvm'];

$mdata['paikka']=$_POST['paikka'];

$mdata['viehe']=$_POST['viehe'];

$mdata['muuta']=$_POST['muuta'];

$res=$this->users_model->update_info($mdata, $_POST['id']);

if($res){

header('location:'.base_url()."index.php/users/".$this->index());

}



}

}