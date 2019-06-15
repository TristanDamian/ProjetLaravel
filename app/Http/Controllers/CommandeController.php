<?php

namespace App\Http\Controllers;
use App\Modeles\CommandeDAO;
use App\Http\Requests\InsertionCommandeRequest;
use App\Metier\Commande;
use App\Modeles\DetailsDAO;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function getCommandes(){
        $commande = new CommandeDAO();
        $lescommandes = $commande->getLescommandes();
        return view('listeCommandes',compact('lescommandes'));
    }

    public function getCommandeDetails($id){
        $commande = new CommandeDAO();
        $Detail= new DetailsDAO();
        $laCommande = $commande->getCommandeById($id);
        $lesDetails = $Detail->getLesDetails($id);
        return view('CommandeDetails',compact('laCommande','lesDetails'));
    }

    public function creationCommande(){
        return view('creationCommande');
    }

    public function postCreationCommande(InsertionCommandeRequest $request)
    {
        $commande=new Commande();
        $commande->setIdComm('000001');
        $commande->setNoVendeur($request->input('NO_VENDEUR'));
        $commande->setNoClient($request->input('NO_CLIENT'));
        $commande->setDate(date('Y-m-d'));
        $commande->setFacture('F');
        $commandeDAO = new CommandeDAO();
        $commandeDAO->creationCommandeBase($commande);
        return view('NewCommande');
    }

    public function supprimerCommande($id)
    {
        $commandeDAO=new CommandeDAO();
        $commandeDAO->supprimerCommandeBase($id);
        return view('suppressionCommande');
    }

}
