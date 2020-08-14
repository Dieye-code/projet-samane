<?php

namespace src\model; 

use libs\system\Model; 
	
class CompteRepository extends Model{
	
	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct(){
		parent::__construct();
	}

	public function getCompte($id)
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->find(array('id' => $id));
		}
	}
	public function addCompte($Compte)
	{
		if($this->db != null)
		{
			$this->db->persist($Compte);
			$this->db->flush();
			return $Compte->getId();
		}
	}
	public function listeOfComptes()
	{
		if($this->db != null)
		{
			return $this->db->getRepository('Compte')->findAll();
		}
	}
	public function listeClientMorals(){
        return $this->db->getRepository('ClientMoral')->findAll();
    }
    public function listeClientPhysiques(){
        return $this->db->getRepository('ClientPhysique')->findAll();
    }
    public function listeClientPhysiqueSalaries(){
        return $this->db->createQuery("SELECT c FROM ClientPhysique c WHERE c.clientMoral IS NOT NULL")->getResult();
    }
    public function listeClientPhysiqueNonSalaries(){
        return $this->db->createQuery("SELECT c FROM ClientPhysique c WHERE c.clientMoral IS  NULL")->getResult();
    }
    public function listeTypeComptes(){
        return $this->db->getRepository('TypeCompte')->findAll();
    }
    public function listeTypeFrais(){
        return $this->db->getRepository('TypeFrais')->findAll();
    }
    public function getTypeFrais($libelle){
        return $this->db->createQuery("SELECT t FROM TypeFrais t WHERE t.libelle = '$libelle'")->getOneOrNullResult();
    }
    public function getClientMoral($id){
        return $this->db->getRepository('ClientMoral')->find($id);
    }
    public function getClientPhysique($id){
        return $this->db->getRepository('ClientPhysique')->find($id);
    }
    public function getTypeCompte($id){
        return $this->db->getRepository('TypeCompte')->find($id);
    }
	
}