<?php

namespace App\Modeles;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Metier\Client;

class ClientDAO extends Model
{
    public function getLeClient()
    {
        $nom = session('CurrentUtil');
        $client = DB::table('clientel')->where('NOM_CL', '=', $nom)->first();
        $leClient= $this->creerClient($client);
        return $leClient;
    }

    private function creerClient(\stdClass $unClient)
    {
        $leClient = new Client();
        $leClient->setNOCLIENT($unClient->NO_CLIENT);
        $leClient->setSOCIETE($unClient->SOCIETE);
        $leClient->setNOMCL($unClient->NOM_CL);
        $leClient->setPRENOMCL($unClient->PRENOM_CL);
        $leClient->setADRESSECL($unClient->ADRESSE_CL);
        $leClient->setVILLECL($unClient->VILLE_CL);
        $leClient->setCODEPOSTCL($unClient->CODE_POST_CL);
        return $leClient;
    }

}
