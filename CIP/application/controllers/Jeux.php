<?php
class Jeux extends CI_Controller {

public function __construct(){
parent::__construct();
$this->load->model('jeux_model');
$this->load->helper('url');
$this->load->helper('form');
$this->load->library('form_validation');
}

public function index(){

$data['title']='Liste des jeux'; // a title to display above thelist
$data['content']='main'; // template will call 'task_list ' sub -view
$this->form_validation->set_rules('identifiant','identifiant','required');
        $this->form_validation->set_rules('motdepasse','motdepasse','required');
        if($this->form_validation->run()===FALSE){
            // Ouvre le formulaire automatiquement s'il comporte des erreurs (le test empêche le formulaire de s'ouvrir quand on recharge la page)
            //if(get_cookie('connecte')!=1)$_SESSION['erreurConnexion']=TRUE;
        }
        else{
            // Initialise les variables de session
            $_SESSION['identifiant']=$_POST['identifiant'];
            $_SESSION['reload']=true;
            $this->moncompte();
        }
    $this->load->vars($data );
$this->load->view('template');
    //////////////////////////////FORMULAIRE POUR SE CONNECTER
/*  
$this->form_validation->set_rules('nomj','mdpj','required');
if($this->form_validation->run()!==FALSE){
    $identifiant=$this->input->post('nomj');
    $motdepasse=$this->input->post('mdpj');
    //$this->jeux_model->connex($identifiant,$motdepasse);
    $data['listejeux']=$this->jeux_model->connex($identifiant,$motdepasse);
    /*
    if ($data['listejeux']!=null){
        redirect('/jeux/moncompte/', 'refresh');       
    }
    */
    
}

//$data['listejeux']=$this->jeux_model->get_jeux($identifiant);
    
//$this->load->helper('form');
//$this->load->library('form_validation');
    ///////////////////////// FORMULAIRE POUR INSCRIPTION EN DESSOUS 
/*
$this->form_validation->set_rules('identifiant','identifiant','required');
$this->form_validation->set_rules('nom','nom','required');
$this->form_validation->set_rules('prenom','prenom','required');
$this->form_validation->set_rules('motdepasse','motdepasse','required');
$this->form_validation->set_rules('vmotdepasse', 'vmotdepasse', 'required');
if($this->form_validation->run()!==FALSE){
$identifiant=$this->input->post('identifiant');
$nom=$this->input->post('nom');
$prenom=$this->input->post('prenom');
$motdepasse=$this->input->post('motdepasse');
$vmotdepasse=$this->input->post('vmotdepasse');
    if(strcmp($motdepasse,$vmotdepasse)==0){
        $this->jeux_model->add_collectionneur($identifiant,$nom,$prenom,$motdepasse);
    }else{
        echo "Les 2 mots de passe sont différents";
    }
}

*/
    
public function connexion(){
    
}
    
public function enregistrer(){
    
} 
    
public function moncompte(){
    $data['content']='mesjeux';
    $identifiant=$_SESSION['identifiant'];
    $data['listejeux']=$this->jeux_model->afficherjeu($identifiant);
    echo 'test';
    echo $_POST['identifiant'];
}
    
function liste(){
    $data['jeux'] =  $this->jeux_model->get_jeux();
    $data['title'] = "La liste des jeux";
    $this->load->view('listejeux',$data);
 }
    
public function delete($id){
$this->jeux_model->delete_jeu($id);
redirect('/jeux/moncompte/', 'refresh');
}
	
}
?>
