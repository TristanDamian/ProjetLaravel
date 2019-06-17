<?php

namespace App\Modeles;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Metier\Utilisateur;


class UtilisateurDAO extends Model
{
    public function getUtilisateur($nom, $prenom, $mdp)
    {
        $utilisateur = DB::table('utilisateur')->where([['NomUtil', '=', $nom],
            ['PrenomUtil', '=', $prenom], ['MotPasse', '=', $mdp]])->first();
        if($utilisateur){
            session(['CurrentUtil'=>$nom]);
            $lUtilisateur= $this->creerUtilisateur($utilisateur);
            session(['roleUtil'=>$lUtilisateur->getRole()]);
            return $lUtilisateur;
        }
        else
            return null;

    }

    private function creerUtilisateur(\stdClass $unUtilisateur)
    {
        $lUtilisateur = new Utilisateur();
        $lUtilisateur->setNumUtil($unUtilisateur->NumUtil);
        $lUtilisateur->setNomUtil($unUtilisateur->NomUtil);
        $lUtilisateur->setPrenomUtil($unUtilisateur->PrenomUtil);
        $lUtilisateur->setMotPasse($unUtilisateur->MotPasse);
        $lUtilisateur->setRole($unUtilisateur->role);
        return $lUtilisateur;
    }

    public function creationUtilBase(Utilisateur $monUtilisateur)
    {
        $utilisateur = DB::table('utilisateur')->get()->last();
        $utilID = $utilisateur->NumUtil + 1;
        session(['CurrentUtil' => $monUtilisateur->getNomUtil()]);
        session(['roleUtil'=>$monUtilisateur->getRole()]);
        DB::table('utilisateur')->insert(['NumUtil' => $utilID, 'NomUtil' => $monUtilisateur->getNomUtil(),
            'PrenomUtil' => $monUtilisateur->getPrenomUtil(), 'MotPasse' => $monUtilisateur->getMotPasse(),
            'role' => $monUtilisateur->getRole()]);
    }
}
