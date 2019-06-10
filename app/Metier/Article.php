<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    private $idArt;
    private $LibArticle;
    private $Qte;
    private $Ville;
    private $Int;
    private $Prix;

    public function getIdArticle()
    {
        return $this->idArt;
    }

    public function setIdArticle($idArt)
    {
        $this->idArt = $idArt;
    }

    public function getLibArticle()
    {
        return $this->LibArticle;
    }

    public function setLibArticle($LibArticle)
    {
        $this->LibArticle = $LibArticle;
    }

    public function getQte()
    {
        return $this->Qte;
    }

    public function setQte($Qte)
    {
        $this->Qte = $Qte;
    }

    public function getPrix()
    {
        return $this->Prix;
    }

    public function setPrix($Prix)
    {
        $this->Prix = $Prix;
    }

    public function getInt()
    {
        return $this->Int;
    }

    public function setInt($Int)
    {
        $this->Int = $Int;
    }

    public function getVille()
    {
        return $this->Ville;
    }

    public function setVille($Ville)
    {
        $this->Ville = $Ville;
    }
}
