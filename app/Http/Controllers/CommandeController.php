<?php

namespace App\Http\Controllers;
use App\Modeles\CommandeDAO;

use App\Modeles\DetailsDAO;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function getCommandes(){
        $commande = new CommandeDAO();
        $lescommandes = $commande->getLescommandes();
        return view('listeCommandes',compact('lescommandes'));
    }

    //Selection d'une conference par son id
    public function getConferenceById($idArt)
    {
        $conference = new commandeDAO();
        $laConference = $conference->getcommandeById($idArt);
        return view('listerCommentaires',compact('laConference','lesCommentaires'));
    }

    public function getCommandeDetails($id){
        $commande = new CommandeDAO();
        $Detail= new DetailsDAO();
        $laCommande = $commande->getCommandeById($id);
        $lesDetails = $Detail->getLesDetails($id);
        //pour simplifier l'accès aux données dans la vue "ListerCommentaire', on passe deux objets
        //laConference représente la conférence qui a été sélectionnée
        //lesCommentaires représente la liste des commentaires associés à cette conférence
        return view('CommandeDetails',compact('laCommande','lesDetails'));
    }

    public function NewCommande(){
        $commande=new CommandeDAO();
        $commande->CreationCommandeBase();
        return view('NewCommande');
    }

    public function ajoutCommande(){
        return view('formAjoutAricle');
    }
}
