<?php
class Admin extends CI_Controller{
function login(){
    echo "Admin  Testing :<br>";
    $this->load->library("form_validation");
    $this->form_validation->set_rules('uname','User Name','required|alpha');
    $this->form_validation->set_rules('pass','Password','required');
    $this->form_validation->set_error_delimiters('<div class="text-danger">',"</div>");
  if($this->form_validation->run()){
     $uname= $this->input->post('uname');
     $pass= $this->input->post('pass');
     $this->load->model('loginmodel');
     $id=$this->loginmodel->isvalidate( $uname,$pass);
     if($id){
         //logic correct
         echo 'detailes matched';
         $this->session->set_userdata('id',$id);
         return redirect('admin/welcome');
     }else{
        echo 'detailes not matched';
     }
  }else{ 
     $this->load->view('admin/login');
  }}
function welcome(){
    $this->load->model('loginmodel');
    $articles=$this->loginmodel->articlelist();
    $this->load->view('admin/dashboard',['art'=> $articles]);
}
function register(){
    $this->load->view('admin/register');
}
function senmail(){
    echo 'senmail';
  $this->load->library('form_validation');
  $this->form_validation->set_rules('uname','Username','required|alpha');  
  $this->form_validation->set_rules('pass','Password','required'); 
  $this->form_validation->set_rules('first','FirstName','required|alpha'); 
  $this->form_validation->set_rules('last','LastName','required|alpha'); 
  $this->form_validation->set_rules('email','Email','required|valid_email','is_unique[users.email]');
  $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>'); 
 if($this->form_validation->run()){
     echo 'validation';
 }else{
     $this->load->view('admin/register');
 }
}
}
?>