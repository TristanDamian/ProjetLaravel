<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    private $NumUtil;
    private $NomUtil;
    private $PrenomUtil;
    private $MotPasse;
    private $role;

    public function getNumUtil()
    {
        return $this->NumUtil;
    }

    public function setNumUtil($numUtil)
    {
        $this->NumUtil = $numUtil;
    }

    public function getNomUtil()
    {
        return $this->NomUtil;
    }

    public function setNomUtil($NomUtil)
    {
        $this->NomUtil = $NomUtil;
    }

    public function getPrenomUtil()
    {
        return $this->PrenomUtil;
    }

    public function setPrenomUtil($PrenomUtil)
    {
        $this->PrenomUtil = $PrenomUtil;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getMotPasse()
    {
        return $this->MotPasse;
    }

    public function setMotPasse($MotPasse)
    {
        $this->MotPasse = $MotPasse;
    }
}
