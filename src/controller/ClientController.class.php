<?php


use bd\ClientMoral;
use bd\ClientPhysique;
use ClientMoral as GlobalClientMoral;
use ClientPhysique as GlobalClientPhysique;
use libs\system\Controller;
use src\model\ClientMoralRepository;
use src\model\ClientPhysiqueRepository;

class ClientController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function add()
    {
        $clientMoralDb = new ClientMoralRepository();
        $clientPhysiquelDb = new ClientPhysiqueRepository();

        // var_dump($clientPhysiquelDb->listeOfTypeClientPhysiques());
        // die;

        if (isset($_POST['ajouter'])) {


            extract($_POST);

            // var_dump($_POST);
            // die;

            if ($typeClient == '2') {
                $clientMoral = new GlobalClientMoral();
                $clientMoral->setRaisonSocial($raisonSocial);
                $clientMoral->setAdresse($AdresseClientMoral);
                $clientMoral->setNom($nomClientMoral);
                $clientMoral->setNumero($numeroClientMoral);
                $clientMoral->setTelephone($telephoneClientMoral);
                $clientMoral->setLogin($loginClientMoral);
                $clientMoral->setPassword($passwordClientMoral);
                $clientMoral->setEmail($emailClientMoral);

                // var_dump($clientMoral);
                // die;

                $a = $clientMoralDb->addClientMoral($clientMoral);
                var_dump($a);
                if ($a != '0') {
                    echo "client Moral bien ajouté";
                } else {
                    echo "echec d'ajout du client Moral";
                }
            } else {

                $clientPhysique = new GlobalClientPhysique();

                if ($typeClientPhysique == '2' && $idEmployeur == '0') {
                    $clientMoral = new GlobalClientMoral();
                    $clientMoral->setRaisonSocial($raisonSocial);
                    $clientMoral->setAdresse($AdresseClientMoral);
                    $clientMoral->setNom($nomClientMoral);
                    $clientMoral->setNumero($numeroClientMoral);
                    $clientMoral->setTelephone($telephoneClientMoral);
                    $clientMoral->setLogin($loginClientMoral);
                    $clientMoral->setPassword($passwordClientMoral);
                    $clientMoral->setEmail($emailClientMoral);

                    $clientPhysique->setClientMoral($clientMoral);
                } else {
                    $clientPhysique->setClientMoral($clientMoralDb->getClientMoral($idEmployeur));
                }


                $clientPhysique->setNom($nom);
                $clientPhysique->setPrenom($prenom);
                $clientPhysique->setNci($cni);
                $clientPhysique->setTelephone($telephone);
                $clientPhysique->setAdresse($adresse);
                $clientPhysique->setSalaire($salaire != '' ? $salaire : Null);
                $clientPhysique->setEmail($email != '' ? $email : Null);
                $clientPhysique->setProfession($profession != '' ? $profession : Null);
                $clientPhysique->setLogin($login);
                $clientPhysique->setPassword($password);
                $clientPhysique->setTypeClient($clientPhysiquelDb->getTypeClientPhysique($typeClientPhysique));

                $a = $clientPhysiquelDb->addClientPhysique($clientPhysique);

                if ($a != '0') {
                    echo "client Physique bien ajouté";
                } else {
                    echo "echec d'ajout du client Physique";
                }
            }
        } else {

            $data["clientMorals"] = $clientMoralDb->listeOfClientMorals();
            $data["typeClients"] = $clientPhysiquelDb->listeOfTypeClientPhysiques();
            $data["title"] = 'Ajout des clients';
            $data["page"] = 'client';
            $this->view->load("client/add",$data);
        }
    }
}