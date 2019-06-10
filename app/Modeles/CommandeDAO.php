<?php

namespace App\Modeles;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Metier\Commande;

class CommandeDAO extends Model
{
    public function getLesCommandes()
    {
    $Commandes = DB::table('commandes')->get();
    $lesCommandes = array();
    $i=0;
    foreach ($Commandes as $lCommande) {
        $idComm = $i;
        $i++;
        $lesCommandes[$idComm] = $this->creerCommande($lCommande);
    }
    return $lesCommandes;
    }

    private function creerCommande(\stdClass $unCommande)
    {
        $laCommande = new Commande();
        $laCommande->setIdComm($unCommande->NO_COMMAND);
        $laCommande->setNoVendeur($unCommande->NO_VENDEUR);
        $laCommande->setNoClient($unCommande->NO_CLIENT);
        $laCommande->setDate($unCommande->DATE_CDE);
        $laCommande->setFacture($unCommande->FACTURE);
        return $laCommande;
    }

    public function getCommandeById($idConf)
    {
        //On sélectionne une Commande par son id.
        //La requête ne retournant qu'une seule occurrence, on utilise la méthode first de Querybuilder
        $maCommande = DB::table('commandes')->where('NO_COMMAND', '=', $idConf)->first();
        $Commande = $this->creerCommande($maCommande);
        return $Commande;
    }

    public function creationCommande(Commande $unCommande){
        DB::table('Commandes')->insert(['NO_Commande'=>$unCommande->getIdCommande(),'LIB_Commande'=>$unCommande->getLibCommande(),'QTE_DISPO'=>$unCommande->getQte(),'VILLE_ART'=>$unCommande->getVille(),'PRIX_ART'=>$unCommande->getQte(),'INTEROMPU'=>$unCommande->getInt()]);
    }

    public function creationCommandeBase(){
        $commande=DB::table('commandes')->get()->last();
        $commandeID=$commande->NO_COMMAND+1;
        session(['CurrentCommande'=>$commandeID]);
        DB::table('commandes')->insert(['NO_COMMAND'=>$commandeID,'NO_VENDEUR'=>'000001','NO_CLIENT'=>'000001','DATE_CDE'=>date('Y-m-d'),'FACTURE'=>'F',]);
    }
}
