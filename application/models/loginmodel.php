<?php
 class Loginmodel extends CI_Model{

 function isvalidate($username,$password){
   $q=$this->db->where(['username'=>$username ,'password'=>$password])
          ->get('users');

  if($q->num_rows()){
      return $q->row()->id;
  }else{
      return false;
  }

 }
 function articlelist(){
     $id=$this->session->userdata('id');
     $q=$this->db->select('article_title ')
              ->from('articles')
              ->where(['user_id'=>$id]) 
              ->get();
              return ($q->result());
              
    }

 }
?>