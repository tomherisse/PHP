<?php
class Jeux_model extends CI_Model{
 public function __construct(){
 parent::__construct();
 $this->load->database();
 }
 
 public function get_jeux($identifiant){
    
 }
 
 public function add_jeu($id,$lastname,$firstname,$email){
 $data=array(
	'student'=>$id,
	'lastname'=>$lastname,
	'firstname'=>$firstname,
	'email'=>$email
 );
 return $this->db->insert('student',$data);
 }
    
public function add_collectionneur($identifiant,$nom,$prenom,$motdepasse){
    $data=array(
        'identifiant'=>$identifiant,
        'nom'=>$nom,
        'prenom'=>$prenom,
        'motdepasse'=>$motdepasse
    );
    return $this->db->insert('_collectionneur',$data);
}
    
public function connex($identifiant,$motDePasse){
    $query = $this->db->query('SELECT * FROM jeux._collectionneur WHERE identifiant='."'".$identifiant."'".' AND motdepasse='."'".$motDePasse."'".';');
	if ($query->result_array()!=null){
 //SI IDENTIFIANT ET MDP SONT BONS LANCER FENETRE COLLECTIONNEUR
        $query = $this->db->query('SELECT id FROM jeux._collectionne WHERE identifiant='."'".$identifiant."'".';');
        //$this->load->view('listejeux');
        return $query->result_array();
    }else{
        $data['content']='main';
    }
    
    //AFFICHER LA PAGE AVEC SES JEUX
    
    //return $this->db->query('_collectionneur',$data);
}
    
    
public function afficherjeu($identifiant){
    $query = $this->db->query('SELECT id FROM jeux._collectionne WHERE identifiant='."'".$identifiant."'".';');
    return $query->result_array();

}
    
public function del_recent($id_user){
       //doit delete le plus recent
       $query = $this->db->query('
       WITH user_jeu AS (
       Select * from collec._collection Inner join collec._jeu on _collection.id_jeu= _jeu.id 
       where id_user = ?)
       delete from collec._collection 
       where id_jeu = (select id from collec._collection Inner join collec._jeu on _collection.id_jeu=_jeu.id 
        where _jeu.sortie = (select max(sortie) from user_jeu));', $id_user);
    }
 
 public function delete_jeu($id) {
$data=array('id'=>$id);
$this->db->delete('_collectionne',$data);
}
 
 }
?>
