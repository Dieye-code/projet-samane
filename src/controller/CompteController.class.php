<?php

use libs\system\Controller;
use src\model\CompteRepository;

class CompteController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function add()
    {

        $compteDb = new CompteRepository();

        $clientMorals = $compteDb->listeClientMorals();
        $typeComptes = $compteDb->listeTypeComptes();
        $typeFrais = $compteDb->listeTypeFrais();
        $clientPhysiques = $compteDb->listeClientPhysiques();
        $clientPhysiquesalarie = $compteDb->listeClientPhysiqueSalaries();
        $clientPhysiquesimple = $compteDb->listeClientPhysiqueNonSalaries();
        $agiosOuverture = $compteDb->getTypeFrais("Agios");
        $fraisOuverture = $compteDb->getTypeFrais("Frais ouverture");
        $fraisBlocageOuverture = $compteDb->getTypeFrais("Frais Blocage");

        if (isset($_POST['ajouter'])) {

            extract($_POST);
            if ($typeCompte == '1') {
                $solde = $solde - $frais;
            } else {
                if ($typeCompte == '4') {

                    $solde = $solde - $fraisBlocageCompte;
                }
            }
            $idClientphysique = NULL;
            if ($idClientNormal != '0' || $idClientSalarie != '0') {
                $idClientphysique = $idClientNormal != '0' ? (int) $idClientNormal : (int) $idClientSalarie;
            }

            $compte = new Compte();

            $compte->setNumero($clesRib);
            $compte->setClerib($clesRib);
            $compte->setSolde($solde);
            $compte->setEtat('actif');
            $compte->setDateDeboc($dateDebc != '' ? $dateDebc : NULL);
            $compte->setDateCreat(date('Y-m-d'));
            $compte->setClientPhysique($compteDb->getClientPhysique($idClientphysique));
            $compte->setClientMoral($compteDb->getClientMoral($idEmployeur));
            $compte->setTypeComptes($compteDb->getTypeCompte($typeCompte));

            $a = $compteDb->addCompte($compte);

            if ($a != 0) {
                echo "Compte bien ajoute";
            } else {
                echo "Echec de l'ajout du Compte";
            }
            die;
        } else {
            $data['title'] = 'Ajout des Comptes';
            $data['age'] = 'compte';
            $data['clientMorals'] = $clientMorals;
            $data['typeComptes'] = $typeComptes;
            $data['typeFrais'] = $typeFrais;
            $data['clientPhysiques'] = $clientPhysiques;
            $data['clientPhysiquesalarie'] = $clientPhysiquesalarie;
            $data['clientPhysiquesimple'] = $clientPhysiquesimple;
            $data['agiosOuverture'] = $agiosOuverture;
            $data['fraisOuverture'] = $fraisOuverture;
            $data['fraisBlocageOuverture'] = $fraisBlocageOuverture;
            $this->view->load('compte/add',$data);
        }
    }
}
