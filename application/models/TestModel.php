<?php 
   Class TestModel extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
         $this->load->database();
      } 
   } 
?>