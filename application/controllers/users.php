<?php
class Users extends CI_Controller{
function index(){
    echo "Users Testing :";

    $this->load->view('users/articlelist');
}

}
?>