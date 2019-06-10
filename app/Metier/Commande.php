<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    private $idComm;
    private $NoVendeur;
    private $NoClient;
    private $Facture;
    private $Date;

    public function getIdComm()
    {
        return $this->idComm;
    }

    public function setIdComm($idComm)
    {
        $this->idComm = $idComm;
    }

    public function getNoVendeur()
    {
        return $this->NoVendeur;
    }

    public function setNoVendeur($NoVendeur)
    {
        $this->NoVendeur = $NoVendeur;
    }

    public function getNoClient()
    {
        return $this->NoClient;
    }

    public function setNoClient($NoClient)
    {
        $this->NoClient = $NoClient;
    }

    public function getDate()
    {
        return $this->Date;
    }

    public function setDate($Date)
    {
        $this->Date = $Date;
    }

    public function getFacture()
    {
        return $this->Facture;
    }

    public function setFacture($Facture)
    {
        $this->Facture = $Facture;
    }
}
