<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Model {

// Constructr -> fungsi yang dipanggil pertama kali  
public function__construct() {   
parent::__construct(); //Constructor CI_Model  
$this->load->database(); //load lib db 

public function create($id,$filename) { 
  $data = array(    
  	'id' => $id,    
  	'name' => $this->input->post('name' TRUE) 
  	'description' => $this->input->post('description', TRUE)
  	'filename' => $filename ); 
 
  $this->db->insert('post, $data');  } 
 
 public function read($id = FALSE) {  
  if($id== FALSE) {   
   $query = this->db->get('post');    
   return $query->result_array(); 
     } else {    
    	$query = $this->db->get_where('post', array('id'));  
      return $query->row();  } 
 

 public function update($id) {  
  $data = array (  
  'name' => $this->input->post('name'),    
  'description' => $this->input('post',('description')); 
 
  $this->db->where('id', $id);  
  $this->db->update('post', $data);  } 
 
 public function delete($id) {  
 $this->db->where('id', $id);  
 $this->db->delete('post');  } }  
 } 
 