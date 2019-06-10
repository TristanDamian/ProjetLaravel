<?php

namespace App\Modeles;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Metier\Article;


class ArticleDAO extends Model
{
    public function getLesArticles()
    {
        $articles = DB::table('articles')->get();

        $lesArticles = array();
        $i=0;
        foreach ($articles as $lArticle) {
            $idComm = $i;
            $i++;
            $lesArticles[$idComm] = $this->creerArticle($lArticle);
        }
        return $lesArticles;
    }

    public function getArticle($id)
    {
        $articles = DB::table('articles')->where('NO_ARTICLE', '=', $id)->first();


            $lArticle= $this->creerArticle($articles);

        return $lArticle;
    }

    private function creerArticle(\stdClass $unArticle)
    {
        $lArticle = new Article();
        $lArticle->setIdArticle($unArticle->NO_ARTICLE);
        $lArticle->setLibArticle($unArticle->LIB_ARTICLE);
        $lArticle->setQte($unArticle->QTE_DISPO);
        $lArticle->setVille($unArticle->VILLE_ART);
        $lArticle->setPrix($unArticle->PRIX_ART);
        $lArticle->setInt($unArticle->INTERROMPU);
        return $lArticle;
    }

    public function creationArticle(Article $unArticle){
        DB::table('articles')->insert(['NO_ARTICLE'=>$unArticle->getIdArticle(),'LIB_ARTICLE'=>$unArticle->getLibArticle(),'QTE_DISPO'=>$unArticle->getQte(),'VILLE_ART'=>$unArticle->getVille(),'PRIX_ART'=>$unArticle->getQte(),'INTEROMPU'=>$unArticle->getInt()]);
    }
}
