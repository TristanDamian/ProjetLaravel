<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    private $NO_CLIENT;
    private $SOCIETE;
    private $NOM_CL;
    private $PRENOM_CL;
    private $ADRESSE_CL;
    private $VILLE_CL;
    private $CODE_POST_CL;

    public function getNOCLIENT()
    {
        return $this->NO_CLIENT;
    }

    public function setNOCLIENT($NO_CLIENT)
    {
        $this->NO_CLIENT = $NO_CLIENT;
    }

    public function getSOCIETE()
    {
        return $this->SOCIETE;
    }

    public function setSOCIETE($SOCIETE)
    {
        $this->SOCIETE = $SOCIETE;
    }

    public function getNOMCL()
    {
        return $this->NOM_CL;
    }

    public function setNOMCL($NOM_CL)
    {
        $this->NOM_CL = $NOM_CL;
    }

    public function getADRESSECL()
    {
        return $this->ADRESSE_CL;
    }

    public function setADRESSECL($ADRESSE_CL)
    {
        $this->ADRESSE_CL = $ADRESSE_CL;
    }

    public function getPRENOMCL()
    {
        return $this->PRENOM_CL;
    }

    public function setPRENOMCL($PRENOM_CL)
    {
        $this->PRENOM_CL = $PRENOM_CL;
    }

    public function getVILLECL()
    {
        return $this->VILLE_CL;
    }

    public function setVILLECL($VILLE_CL)
    {
        $this->VILLE_CL = $VILLE_CL;
    }

    public function getCODEPOSTCL()
    {
        return $this->CODE_POST_CL;
    }

    public function setCODEPOSTCL($CODE_POST_CL)
    {
        $this->CODE_POST_CL = $CODE_POST_CL;
    }


}
