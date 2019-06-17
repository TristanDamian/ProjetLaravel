<?php

namespace App\Http\Controllers;
use App\Http\Requests\InsertionUtilRequest;
use App\Modeles\UtilisateurDAO;
use App\Metier\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function connexion(){
        return view('connexion');
    }

    public function postConnecterUtilisateur(InsertionUtilRequest $request){
        $nom = $request->input('NomUtil');
        $prenom = $request->input('PrenomUtil');
        $mdp = $request->input('MotPasse');

        $monUtilDAO = new UtilisateurDAO();
        $lUtilisateur = $monUtilDAO->getUtilisateur($nom, $prenom, $mdp);

        if($lUtilisateur != null)
            return view('connecte');
        else
            return view('connexion');
    }

    public function ajoutUtilisateur(){
        return view('inscription');
    }

    public function postAjoutUtilisateur(InsertionUtilRequest $request){
        $monUtilisateur = new Utilisateur();
        $monUtilisateur->setNumUtil($request->input('NumUtil'));
        $monUtilisateur->setNomUtil($request->input('NomUtil'));
        $monUtilisateur->setPrenomUtil($request->input('PrenomUtil'));
        $monUtilisateur->setMotPasse($request->input('MotPasse'));
        $monUtilisateur->setRole($request->input('role'));
        $monUtilDAO = new UtilisateurDAO();
        $monUtilDAO->creationUtilBase($monUtilisateur);
        return view('inscriptionOK');
    }

    public function deconnexion(){
        session(['CurrentUtil'=>null]);
        session(['roleUtil'=>null]);
        session(['CurrentCommande'=>null]);
        return view('connexion');
    }
}
