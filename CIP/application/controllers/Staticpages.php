<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Staticpages extends CI_Controller {

 public function display($content='home'){
 // note the default value
 if(!file_exists('application/views/'.$content.'.php')){
 // Whoops , we don 't have a page for that !
 show_404();
 }
 $data['content']=$content;
 $this->load->vars($data);// $ data is 'extracted ' and its compenents has a global access
 $this->load->view('template');// Load a generic page
 }
 
 public function index(){
$this->display('home');
}
}
