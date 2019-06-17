<?php

namespace App\Http\Controllers;
use App\Modeles\ClientDAO;
use App\Http\Requests\InsertionCommandeRequest;
use App\Metier\Client;
use App\Modeles\CommandeDAO;
use App\Modeles\DetailsDAO;
use App\Modeles\UtilisateurDAO;

class ClientController extends Controller
{
    public function getCommandesClient(){
        $clientDAO = new ClientDAO();
        $leClient = $clientDAO->getLeClient();

        $commandeDAO = new CommandeDAO();
        $lesCommandes = $commandeDAO->getCommandesClient();

        return view('compteClient',compact('leClient', 'lesCommandes'));
    }




}