<?php

namespace App\Metier;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    private $idDetail;
    private $NoArticle;
    private $QteDetail;
    private $LibDetail;

    public function getIdDetail() {return $this->idDetail;}
    public function setIdDetail($id) {$this->idDetail = $id;}
    public function getNoArticle() {return $this->NoArticle;}
    public function setNoArticle($id) {$this->NoArticle = $id;}
    public function getQteDetail() {return $this->QteDetail;}
    public function setQteDetail($id) {$this->QteDetail = $id;}
    public function getLibDetail() {return $this->LibDetail;}
    public function setLibDetail($id) {$this->LibDetail = $id;}
}
