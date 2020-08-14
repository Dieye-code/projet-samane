<?php

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="typeclient")
 */

class TypeClient
{
    /**
     * @id @Column(type="integer") @GeneratedValue
     */
    private $id;
    /**
     * @Column(type="string", length=100, nullable=true)
     */
    private $libelle;
    /**
     * @OneToMany(targetEntity="ClientPhysique", mappedBy="typeClient")
     **/
    private $clientPhysiques;

    public function __construct()
    {
        $this->clientPhysiques = new ArrayCollection();
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * Get the value of clients
     */ 
    public function getClients()
    {
        return $this->clientPhysiques;
    }

    /**
     * Set the value of clients
     */ 
    public function setClients($clients)
    {
        $this->clientPhysiques = $clients;
    }
}
