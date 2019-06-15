<?php

namespace App\Modeles;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Metier\Commande;
use App\Modeles\ClientDAO;

class CommandeDAO extends Model
{
    public function getLesCommandes()
    {
        $Commandes = DB::table('commandes')->get();
        $lesCommandes = array();
        $i=0;
        foreach ($Commandes as $laCommande) {
            $idComm = $i;
            $i++;
            $lesCommandes[$idComm] = $this->creerCommande($laCommande);
        }
        return $lesCommandes;
    }

    public function getCommandesClient(){
        $clientDAO = new ClientDAO();
        $leClient = $clientDAO->getLeClient();

        $commandes = DB::table('commandes')->join('clientel', 'clientel.NO_CLIENT', '=', 'commandes.NO_CLIENT')
            ->where('clientel.NO_CLIENT', '=', $leClient->getNOCLIENT())->get();

        $detailDAO= new DetailsDAO();
        $lesCommandes = array();
        $lesDetails = array();
        $i=0;
        foreach ($commandes as $laCommande) {
            $idComm = $i;
            $i++;
            $lesCommandes[$idComm] = $this->creerCommande($laCommande);
            $lesDetails[$idComm] = $detailDAO->getLesDetails($lesCommandes[$idComm]->getIdComm());
        }
        return $lesCommandes;
    }

    public function creerCommande(\stdClass $unCommande)
    {
        $laCommande = new Commande();
        $laCommande->setIdComm($unCommande->NO_COMMAND);
        $laCommande->setNoVendeur($unCommande->NO_VENDEUR);
        $laCommande->setNoClient($unCommande->NO_CLIENT);
        $laCommande->setDate($unCommande->DATE_CDE);
        $laCommande->setFacture($unCommande->FACTURE);
        return $laCommande;
    }

    public function getCommandeById($idComm)
    {
        //On sélectionne une Commande par son id.
        //La requête ne retournant qu'une seule occurrence, on utilise la méthode first de Querybuilder
        $maCommande = DB::table('commandes')->where('NO_COMMAND', '=', $idComm)->first();
        $Commande = $this->creerCommande($maCommande);
        return $Commande;
    }

    public function creationCommandeBase(Commande $maCommande){
        $commande=DB::table('commandes')->get()->last();
        $commandeID=$commande->NO_COMMAND+1;
        session(['CurrentCommande'=>$commandeID]);
        DB::table('commandes')->insert(['NO_COMMAND'=>$commandeID,'NO_VENDEUR'=>$maCommande->getNoVendeur(),
            'NO_CLIENT'=>$maCommande->getNoClient(),'DATE_CDE'=>$maCommande->getDate(),'FACTURE'=>$maCommande->getFacture()]);
    }

    public function supprimerCommandeBase($id){
        DB::table('commandes')->where('NO_COMMAND', $id)->delete();
    }
}
