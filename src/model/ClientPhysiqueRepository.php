<?php

namespace src\model;

use libs\system\Model;

class ClientPhysiqueRepository extends Model
{

	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function getClientPhysique($id)
	{
		if ($this->db != null) {
			return $this->db->getRepository('ClientPhysique')->find(array('id' => $id));
		}
	}

	public function getTypeClientPhysique($id)
	{
		if ($this->db != null) {
			return $this->db->getRepository('TypeClient')->find(array('id' => $id));
		}
	}

	public function addClientPhysique($ClientPhysique)
	{
		if ($this->db != null) {
			$this->db->persist($ClientPhysique);
			$this->db->flush();

			return $ClientPhysique->getId();
		}
	}



	public function listeOfClientPhysiques()
	{
		if ($this->db != null) {
			return $this->db->getRepository('ClientPhysique')->findAll();
		}
	}

	public function listeOfTypeClientPhysiques()
	{
		return $this->db->getRepository('TypeClient')->findAll();
	}
}
